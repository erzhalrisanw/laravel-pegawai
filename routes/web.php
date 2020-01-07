<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get("/", "HomeController@index")->name("dashboard");

Route::get("pegawai", "PegawaiController@index")->name("pegawai.index");
Route::get("pegawai/create", "PegawaiController@create")->name("pegawai.create");
Route::post("pegawai", "PegawaiController@store")->name("pegawai.store");
Route::get("pegawai/{id}/edit", "PegawaiController@edit")->name("pegawai.edit");
Route::post("pegawai{id}/update", "PegawaiController@update")->name("pegawai.update");
Route::get("pegawai{id}/destroy", "PegawaiController@destroy")->name("pegawai.destroy");


Route::get("inventaris", "InventarisController@index")->name("inventaris.index");
Route::get("inventaris/create", "InventarisController@create")->name("inventaris.create");
Route::post("inventaris", "InventarisController@store")->name("inventaris.store");




