<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

    public function up() {
        Schema::create('suppliers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('supplierName');
            $table->string('supplierEmail')->unique();
            $table->integer('supplierPhone');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('suppliers');
    }
}
