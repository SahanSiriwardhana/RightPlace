<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommercialSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->string('town');
            $table->string('address');           
            $table->string('title');
            $table->string('item_type');            
            $table->string('size');          
            $table->string('pic');
            $table->string('rent_fee');
            $table->string('negotiable');
            $table->string('detail');
            $table->string('phone');
            $table->string('status');
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
        Schema::dropIfExists('commercial_sales');
    }
}
