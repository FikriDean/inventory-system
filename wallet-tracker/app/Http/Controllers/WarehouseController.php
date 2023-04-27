<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Warehouse;

class WarehouseController extends Controller
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

        // jika terdapat warehouse, maka tampilkan view
        if (!$warehouse) {
            return redirect(route('home'));
        }

        // jika user yang sedang login terdaftar di warehouse
        $userWarehouses = $user->warehouses;
        foreach ($userWarehouses as $userWarehouse) {
            if ($userWarehouse->code == $code) {
                $userHasAccess = true;
            }
        }

        // Jika user tidak memiliki akses
        if (!$userHasAccess) {
            return redirect(route('home'));
        }

        $productsCount = 0;

        foreach ($warehouse->producttypes as $producttype) {
            $productCount = $producttype->products->count();
            $productsCount += $productCount;
        }

        // return view terkait
        return view('warehouse.index', [
            'warehouse' => $warehouse,
            'productsCount' => $productsCount
        ]);
    }
}
