<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('city');
            $table->string('town');
            $table->string('add_status')->default('pending');//-----publish , pending, cancled
            $table->integer('type');//----sell=1 or rent=2
            $table->boolean('negotiable')->nullable();
            $table->string('item_type');//----agriculture,commercial,residential,other
            $table->integer('land_size');
            $table->string('land_size_type');//---perches or Acrce
            $table->double('rent_per_month', 8, 2);
            $table->string('address')->nullable();
            $table->text('description');
            $table->string('phone');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('properties');
    }
}
