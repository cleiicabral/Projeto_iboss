<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryProduct extends Migration
{
    
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('product_id')->constrained();


        });
   
    }

    
    public function down()
    {
        //
    }
}
