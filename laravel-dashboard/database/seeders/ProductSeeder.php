<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Produk A',
            'description' => 'Deskripsi Produk A',
            'price' => 10000,
            'stock' => 10
        ]);

        Product::create([
            'name' => 'Produk B',
            'description' => 'Deskripsi Produk B',
            'price' => 20000,
            'stock' => 5
        ]);

        Product::create([
            'name' => 'Produk C',
            'description' => 'Deskripsi Produk C',
            'price' => 15000,
            'stock' => 20
        ]);
    }
}
