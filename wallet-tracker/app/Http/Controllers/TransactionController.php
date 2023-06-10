<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Warehouse;
use App\Models\Role;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(Request $request, string $code)
    {
        // check method
        $method = $request->method();

        // khusus method GET
        if ($method != "GET") {
            return redirect(Route('home'));
        }

        if (!$code) {
            return redirect(Route('home'));
        }

        // inisiasi user yang sedang aktif
        $user = Auth::user();

        // check apakah terdapat warehouse dengan kode yang dikirimkan
        $warehouse = Warehouse::where('code', $code)->first();

        if (!$warehouse) {
            return redirect(route('home'));
        }

        // jika user yang sedang login terdaftar di warehouse
        $userHasAccess = Role::whereHas('warehouse', function ($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function ($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        // return view terkait
        return view('transaction.index', [
            'warehouse' => $warehouse,
            'transactions' => $warehouse->transactiontypes->first()->transactions,
        ]);
    }

    public function show(Request $request, string $code, string $book)
    {
        
        // check method
        $method = $request->method();

        // khusus method GET
        if ($method != "GET") {
            return redirect(Route('home'));
        }

        if (!$book) {
            return redirect(Route('home'));
        }

        // inisiasi user yang sedang aktif
        $user = Auth::user();

        // check apakah terdapat warehouse dengan kode yang dikirimkan
        $warehouse = Warehouse::where('code', $code)->first();

        if (!$warehouse) {
            return redirect(route('home'));
        }

        // jika user yang sedang login terdaftar di warehouse
        $userHasAccess = Role::whereHas('warehouse', function ($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function ($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        $transaction = Transaction::whereHas('order', function($q) use ($book) {
            $q->where('book', $book);
        })->first();

        return view('transaction.show', [
            'warehouse' => $warehouse,
            'transaction' => $transaction,
        ]);
    }

    public function uploadReceipt(Request $request, string $code, string $book)
    {
        // check method
        $method = $request->method();

        // khusus method POST
        if ($method != "POST") {
            return redirect(Route('home'));
        }

        if (!$book) {
            return redirect(Route('home'));
        }

        // inisiasi user yang sedang aktif
        $user = Auth::user();

        // check apakah terdapat warehouse dengan kode yang dikirimkan
        $warehouse = Warehouse::where('code', $code)->first();

        if (!$warehouse) {
            return redirect(route('home'));
        }

        // jika user yang sedang login terdaftar di warehouse
        $userHasAccess = Role::whereHas('warehouse', function ($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function ($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        if ($request->file('image')) {
            if ($request->file('image')->getSize() / 10000 > 1000) {
                return redirect(Route('transaction.index', $warehouse->code))->with('transaction_failed', 'Failed to Upload, please upload image under 3mb!');
            }
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('receipt');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/user/receipt');
            $image->move($destinationPath, $input['imageName']);
        }

        Transaction::whereHas('order', function($q) use ($book) {
            $q->where('book', $book);
        })->first()->update($validatedData);

        return redirect(Route('transaction.index', $warehouse->code))->with('transaction_success', 'Receipt Uploaded Succesfully');
    }
}
