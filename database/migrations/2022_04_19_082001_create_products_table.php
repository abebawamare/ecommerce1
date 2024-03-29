<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->double('price',8,2)->nullable();
            $table->integer('quantity')->nullable();
            $table->timestamp('created_at')->nullable();
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
}
