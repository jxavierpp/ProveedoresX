<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration{

    public function up() {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // 15 caracteres, 2 decimales
            $table->double('price', 15, 2);
            $table->integer('stock');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('products');
    }
}

