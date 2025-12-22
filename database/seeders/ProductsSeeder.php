<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'email' => 'subscriber1@example.com',
                'fname' => 'John',
                'lname' => 'Doe',
                'newsletter' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'subscriber2@example.com',
                'fname' => 'Jane',
                'lname' => 'Smith',
                'newsletter' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['email' => $product['email']],
                $product
            );
        }
    }
}

