<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Warehouse::factory(10)->create();

        \App\Models\Role::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Direktur Utama',
            'salary' => 76000,
            'level' => 700
        ]);

        \App\Models\Role::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Manager',
            'salary' => 44000,
            'level' => 500,
        ]);

        \App\Models\Role::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Cashier',
            'salary' => 4000,
            'level' => 400,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fikri Dean Radityo',
            'username' => 'fikridean',
            'email' => 'deanradityo@gmail.com',
            'email_verified_at' => '02/11/2022',
            'password' => Hash::make('password'),
            'phone_number' => '6281387000325',
            'gender' => 'Male',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Safira Putri',
        //     'username' => 'safiraa',
        //     'email' => 'safira@gmail.com',
        //     'email_verified_at' => '02/12/2022',
        //     'password' => Hash::make('password'),
        //     'phone_number' => '62545234234',
        //     'gender' => 'Female',
        //     'role_id' => 2
        // ]);

        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::first();
        $user->attachWarehouses(1);
        $user->attachWarehouses(2);
        $user->attachWarehouses(3);

        $user->attachRoles(1);

        \App\Models\ProductType::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Makanan',
        ]);

        \App\Models\ProductType::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Minuman',
        ]);

        \App\Models\ProductType::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Minyak Goreng',
        ]);

        \App\Models\ProductType::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Beras',
        ]);

        \App\Models\ProductType::factory()->create([
            'warehouse_id' => 1,
            'name' => 'Alat',
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 1,
            'name' => 'Indomie Goreng',
            'slug' => 'indomie_goreng',
            'product_weight_kg' => 0.1,
            'price' => 2300,
            'stock' => 1323
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 1,
            'name' => 'Indomie Rebus',
            'slug' => 'indomie_rebus',
            'product_weight_kg' => 0.1,
            'price' => 2400,
            'stock' => 1023
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 2,
            'name' => 'Pop Ice',
            'slug' => 'pop_ice',
            'product_weight_kg' => 0.05,
            'price' => 350,
            'stock' => 1323
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 2,
            'name' => 'Nutri Sari',
            'slug' => 'nutri_sari',
            'product_weight_kg' => 0.05,
            'price' => 500,
            'stock' => 5535
        ]);

        \App\Models\Product::factory(10)->create();

        // Database seeder for many-to-many relationship
        // $order = \App\Models\Order::first();
        // $order->attachProducts(1, 3);

        \App\Models\Order::factory()->create([
            'warehouse_id' => 1,
            'book' => fake()->lexify('ware-????-house-????'),
            'product_total' => 14500,
            'promo' => 1000,
            'tax' => 145,
            'final_total' => 15645,
            'weight_total_kg' => 2.2,
            'confirmation' => true,
        ]);

        \App\Models\Account::factory()->create([
            'warehouse_id' => 1,
            'app' => 'Dana',
            'number' => '081387000325',
        ]);

        \App\Models\Account::factory()->create([
            'warehouse_id' => 1,
            'app' => 'BNI',
            'number' => '28281929829',
        ]);

        \App\Models\Account::factory()->create([
            'warehouse_id' => 1,
            'app' => 'Mandiri',
            'number' => '31313131313',
        ]);

        \App\Models\Account::factory()->create([
            'warehouse_id' => 1,
            'app' => 'BCA',
            'number' => '313131313131',
        ]);

        \App\Models\Method::factory()->create([
            'warehouse_id' => 1,
            'type' => 'Virtual Account',
        ]);

        \App\Models\Method::factory()->create([
            'warehouse_id' => 1,
            'type' => 'Transfer',
        ]);

        $account = \App\Models\Account::first();
        $account->attachMethods(1, fake()->lexify('account-????-method-????'), 'Antoni Cikarang', '6281387000325');

        \App\Models\TransactionType::factory()->create([
            'warehouse_id' => 1,
            'type' => 'Income',
        ]);

        \App\Models\TransactionType::factory()->create([
            'warehouse_id' => 1,
            'type' => 'Expense',
        ]);

        \App\Models\TransactionType::factory()->create([
            'warehouse_id' => 1,
            'type' => 'Transfer',
        ]);

        \App\Models\TransactionStatus::factory()->create([
            'name' => 'Pending',
        ]);

        \App\Models\TransactionStatus::factory()->create([
            'name' => 'Canceled',
        ]);

        \App\Models\TransactionStatus::factory()->create([
            'name' => 'Done',
        ]);

        \App\Models\Transaction::factory()->create([
            'transaction_type_id' => 1,
            'account_method_id' => 1,
            'transaction_name' => 'Safira Putri',
            'transaction_number' => '62728288181',
            'order_id' => 1,
            'status_id' => 1,
        ]);
    }
}
