<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('vendor_id');
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->integer('location_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->text('email')->nullable();
            $table->text('email_secondary')->nullable();
            $table->text('phone');
            $table->text('website');
            $table->integer('view_count')->unsigned()->default(0);
            $table->foreign('location_id')->references('location_id')->on('locations');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
