<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produk_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert(array(
            ['nama_produk'=>'sabun lipeboy','harga_jual'=>'30000'],
            ['nama_produk'=>'sabun lux','harga_jual'=>'900000'],
            ['nama_produk'=>'sabun cap tangan','harga_jual'=>'1000000'],
            ['nama_produk'=>'sabun mama melon','harga_jual'=>'30000'],
        ));
    }
}
