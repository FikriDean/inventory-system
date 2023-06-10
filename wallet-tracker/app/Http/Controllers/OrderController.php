<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Warehouse;
use App\Models\Role;
use App\Models\Order;

class OrderController extends Controller
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
        $userHasAccess = Role::whereHas('warehouse', function($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        // return view terkait
        return view('order.index', [
            'warehouse' => $warehouse,
            'orders' => $warehouse->orders,
            'producttypes' => $warehouse->producttypes,
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

        if (!$code) {
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
        $userHasAccess = Role::whereHas('warehouse', function($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }
        
        $order = Order::whereHas('warehouse', function($q) use ($code) {
            $q->where('code', $code);
        })->where('book', $book)->first();

        $products = $order->products;

        // return view terkait
        return view('order.show', [
            'warehouse' => $warehouse,
            'products' => $products,
            'order' => $order,
        ]);
    }

    public function create(Request $request, string $code)
    {
        // check method
        $method = $request->method();

        // khusus method GET
        if ($method != "POST") {
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
        $userHasAccess = Role::whereHas('warehouse', function($q) use ($warehouse) {
            $q->where('code', $warehouse->code);
        })->whereHas('users', function($q) use ($user) {
            $q->where('username', $user->username);
        })->first();

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        $array = [];
        foreach($_REQUEST as $item) {
            array_push($array, $item);
        }

        // menghilangan item yang tidak dibutuhkan (id, method)
        $array = array_slice($array, 2);

        $newOrder = Order::create([
            'warehouse_id' => $warehouse->id,
            'book' => fake()->lexify('order-????-bill-????'),
        ]);

        foreach($array as $key => $item) {
            if ($item) {
                $newOrder->attachProducts($key + 1, $item);
            }
        };

        $product_total = 0;
        $promo = 0;
        $tax = 0;
        $final_total = 0;
        $weight_total_kg = 0;

        foreach($newOrder->products as $product) {
            $product_total += $product->price;
            $weight_total_kg += $product->product_weight_kg;
        }

        $final_total = $product_total - $promo + $tax;

        $newOrder->update([
            'product_total' => $product_total,
            'promo' => $promo,
            'tax' => $tax,
            'final_total'=> $final_total,
            'weight_total_kg' => $weight_total_kg,
        ]);

        return redirect(Route('order.index', $warehouse->code))->with('order_success', 'Order has been created successfully');
    }
}
