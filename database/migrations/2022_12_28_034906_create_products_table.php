<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
         /* Creating a table with the following columns:
         id, name, reference, weight, category, stock, created_at, updated_at */
            $table->id();
            $table->string('name')->required()->unique();
            $table->string('reference')->required();
            $table->integer('weight')->required();
            $table->string('category')->required();
            $table->integer('stock')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
