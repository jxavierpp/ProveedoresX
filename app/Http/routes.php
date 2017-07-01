<?php

Route::get('/', function () {
    return view('index');
});

Route::resource('proveedores','supplierController');
Route::resource('categorias','categoryController');
Route::resource('productos','productController');
