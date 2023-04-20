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

        \App\Models\User::factory()->create([
            'name' => 'Fikri Dean Radityo',
            'email' => 'deanradityo@gmail.com',
            'email_verified_at' => '02/11/2022',
            'password' => Hash::make('password'),
            'phone_number' => '081387000325',
            'gender' => 'Man',
            'role_id' => 1
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Direktur Utama',
            'salary' => 76400000
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Manager',
            'salary' => 44000000
        ]);

        \App\Models\Role::factory()->create([
            'name' => 'Cashier',
            'salary' => 4000000
        ]);

        \App\Models\Address::factory()->create([
            'user_id' => 1,
            'location' => 'Bukit Rivaria Blok B1 No 16 Sawangan Depok'
        ]);

        \App\Models\Address::factory()->create([
            'user_id' => 1,
            'location' => 'Bintara Sawangan Indah B2 no 32'
        ]);

        \App\Models\ProductType::factory()->create([
            'name' => 'Makanan',
        ]);

        \App\Models\ProductType::factory()->create([
            'name' => 'Minuman',
        ]);

        \App\Models\ProductType::factory()->create([
            'name' => 'Minyak Goreng',
        ]);

        \App\Models\ProductType::factory()->create([
            'name' => 'Beras',
        ]);

        \App\Models\ProductType::factory()->create([
            'name' => 'Alat',
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 1,
            'name' => 'Indomie Goreng',
            'product_weight_kg' => 0.1,
            'price' => 2300,
            'stock' => 1323
        ]);

        \App\Models\Product::factory()->create([
            'product_type_id' => 1,
            'name' => 'Indomie Rebus',
            'product_weight_kg' => 0.1,
            'price' => 2400,
            'stock' => 1023
        ]);

        \App\Models\Order::factory()->create([
            'user_id' => 1,
            'weight_total_kg' => 0.4,
        ]);

        // Database seeder for many-to-many relationship
        $order = \App\Models\Order::first();
        $order->attachProducts(1, 3);

        \App\Models\Total::factory()->create([
            'order_id' => 1,
            'product_total' => 14500,
            'promo' => 1000,
            'tax' => 145,
            'final_total' => 15645
        ]);

        \App\Models\Account::factory()->create([
            'app' => 'Dana',
        ]);
        \App\Models\Account::factory()->create([
            'app' => 'BNI',
        ]);
        \App\Models\Account::factory()->create([
            'app' => 'Mandiri',
        ]);
        \App\Models\Account::factory()->create([
            'app' => 'BCA',
        ]);

        \App\Models\Method::factory()->create([
            'type' => 'Virtual Account',
        ]);

        \App\Models\Method::factory()->create([
            'type' => 'Transfer',
        ]);

        $account = \App\Models\Account::first();
        $account->attachMethods(1, 'Antoni Cikarang', '6281387000325');

        \App\Models\TransactionType::factory()->create([
            'type' => 'Income',
        ]);

        \App\Models\TransactionType::factory()->create([
            'type' => 'Expense',
        ]);

        \App\Models\TransactionType::factory()->create([
            'type' => 'Transfer',
        ]);

        \App\Models\Transaction::factory()->create([
            'transaction_type_id' => 1,
            'account_method_id' => 1,
            'buyer_name' => 'Safira Putri',
            'buyer_number' => '62728288181',
            'total_id' => 1,
            'status' => 1
        ]);
    }
}
