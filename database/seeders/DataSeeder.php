<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Produk;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '123456789123',
            'address' => 'perjalanan jalan jalan'
        ]);

        Kategori::create([
            'nama_kategori' => 'Hijab'
        ]);

        Kategori::create([
            'nama_kategori' => 'Wad'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pashmina'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pakaian Pria'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pakaian Wanita'
        ]);

        Produk::create([
            'kategori_id' => 1,
            'gambar' => 'produk_135486525.jpg',
            'nama_produk' => 'Hijab Alila',
            'deskripsi' => 'Hijab berbahan lembut',
            'harga_jual' => '100000',
        ]);
    }
}
