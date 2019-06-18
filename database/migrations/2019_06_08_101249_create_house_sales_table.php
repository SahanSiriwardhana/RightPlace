<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location');
            $table->string('town');
            $table->string('address');
            $table->string('select_file');
            $table->string('title');
            $table->string('item_type');
            $table->string('beds');
            $table->string('baths');
            $table->string('land_size');
            $table->string('house_size');
            $table->string('unit');
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
        Schema::dropIfExists('house_sales');
    }
}
