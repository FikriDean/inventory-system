<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index(Request $request, string $code)
    {
        $user = Auth::user();
        // check method
        $method = $request->method();

        // khusus method POST
        if ($method != "POST") {
            return redirect(Route('home'));
        }

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

        // return view terkait
        return view('warehouse.index', [
            'code' => $code
        ]);
    }
}
