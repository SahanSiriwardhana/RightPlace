<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('city');
            $table->string('town');
            $table->string('add_status')->default('pending');//-----publish , pending, cancled
            $table->integer('type');//----sell=1 or rent=2
            $table->boolean('negotiable')->nullable();
            $table->string('item_type');//----anex house aprtment etc
            $table->integer('gender');//-----sqft
            $table->double('rent_per_month', 8, 2);
            $table->string('address')->nullable();
            
            //---optional property-------
            $table->string('air_condition')->nullable();
            $table->string('alarm_system')->nullable();
            $table->string('doorman')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('garden')->nullable();
            $table->string('heating_system')->nullable();
            $table->string('high_ceiling')->nullable();
            $table->string('car_parking')->nullable();

            $table->text('description');
            $table->string('phone');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
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
      //  Schema::dropIfExists('rooms');
    }
}
