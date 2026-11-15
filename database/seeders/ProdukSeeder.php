<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       \App\Models\Produk::create([
    'nama' => 'Laptop Asus',
    'harga' => 7500000,
    'stok' => 10,
    'deskripsi' => 'Laptop kenceng buat ngoding',
]);

\App\Models\Produk::create([
    'nama' => 'Mouse Logitech',
    'harga' => 250000,
    'stok' => 50,
    'deskripsi' => 'Mouse nyaman, gak bikin tangan pegel',
]);

\App\Models\Produk::create([
    'nama' => 'Keyboard Mechanical',
    'harga' => 500000,
    'stok' => 20,
    'deskripsi' => 'Keyboard bunyi tak-tak, enak banget',
]);

\App\Models\Produk::create([
    'nama' => 'Keyboard Mechanical',
    'harga' => 500000,
    'stok' => 20,
    'deskripsi' => 'Keyboard bunyi tak-tak, enak banget',
]);
    }
}