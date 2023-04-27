<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Warehouse;

class PartnerController extends Controller
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

        // check apakah terdapat warehouse dengan kode yang dikirimkan
        $warehouse = Warehouse::where('code', $code)->first();

        // jika terdapat warehouse, maka tampilkan view
        if (!$warehouse) {
            return redirect(route('home'));
        }

        // jika user yang sedang login terdaftar di warehouse
        $usersInWarehouse = $warehouse->users;

        // return view terkait
        return view('partners.index', [
            'warehouse' => $warehouse,
            'usersInWarehouse' => $usersInWarehouse,
        ]);
    }
}
