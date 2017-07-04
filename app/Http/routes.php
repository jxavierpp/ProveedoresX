<?php

Route::get('/', function () {
    return view('layouts.main.index');
});

Route::resource('proveedores','supplierController');
Route::resource('categorias','categoryController');
Route::resource('productos','productController');
