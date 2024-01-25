<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('produk/semua', function ()
{
    $produk	=	App\Produk::all();
    foreach($produk	as	$data){
    echo	$data->id_produk.".".
    $data->nama_produk."-"	.
    $data->harga_jual."<br>";
}});

Route::get('produk/add1',	function()
{
	$produk	=	new	App\Produk;
	$produk	->	nama_produk	=	"Gayung";
	$produk	->	harga_jual	=	15000;
	$produk	->	save();
});

Route::get('produk/update1',	function(){
    $produk	=	App\Produk::find(3);
    $produk	->	harga_jual	=	8000;
    $produk	->	update();
});
