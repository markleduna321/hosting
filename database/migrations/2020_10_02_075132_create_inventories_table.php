<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('user_email');
            $table->string('name');
            $table->string('address');
            $table->string('contact')->nullable();
            $table->string('phone');
            $table->string('type');
            $table->string('status');
            $table->string('endinv')->nullable();
            $table->string('endinv2')->nullable();
            $table->string('endinv3')->nullable();
            $table->string('endinv4')->nullable();
            $table->string('endinv5')->nullable();
            $table->string('endinv6')->nullable();
            $table->string('endinv7')->nullable();
            $table->string('endinv8')->nullable();
            $table->string('endinv9')->nullable();
            $table->string('endinv10')->nullable();
            $table->string('newdel')->nullable();
            $table->string('newdel2')->nullable();
            $table->string('newdel3')->nullable();
            $table->string('newdel4')->nullable();
            $table->string('newdel5')->nullable();
            $table->string('newdel6')->nullable();
            $table->string('newdel7')->nullable();
            $table->string('newdel8')->nullable();
            $table->string('newdel9')->nullable();
            $table->string('newdel10')->nullable();
            $table->string('invnum')->nullable();
            $table->string('invnum2')->nullable();
            $table->string('invnum3')->nullable();
            $table->string('invnum4')->nullable();
            $table->string('invnum5')->nullable();
            $table->string('invnum6')->nullable();
            $table->string('invnum7')->nullable();
            $table->string('invnum8')->nullable();
            $table->string('invnum9')->nullable();
            $table->string('invnum10')->nullable();
            $table->string('totalstock')->nullable();
            $table->string('totalstock2')->nullable();
            $table->string('totalstock3')->nullable();
            $table->string('totalstock4')->nullable();
            $table->string('totalstock5')->nullable();
            $table->string('totalstock6')->nullable();
            $table->string('totalstock7')->nullable();
            $table->string('totalstock8')->nullable();
            $table->string('totalstock9')->nullable();
            $table->string('totalstock10')->nullable();
            $table->string('stockleft')->nullable();
            $table->string('stockleft2')->nullable();
            $table->string('stockleft3')->nullable();
            $table->string('stockleft4')->nullable();
            $table->string('stockleft5')->nullable();
            $table->string('stockleft6')->nullable();
            $table->string('stockleft7')->nullable();
            $table->string('stockleft8')->nullable();
            $table->string('stockleft9')->nullable();
            $table->string('stockleft10')->nullable();
            $table->string('stocksold')->nullable();
            $table->string('stocksold2')->nullable();
            $table->string('stocksold3')->nullable();
            $table->string('stocksold4')->nullable();
            $table->string('stocksold5')->nullable();
            $table->string('stocksold6')->nullable();
            $table->string('stocksold7')->nullable();
            $table->string('stocksold8')->nullable();
            $table->string('stocksold9')->nullable();
            $table->string('stocksold10')->nullable();
            $table->string('product');
            $table->integer('amount')->nullable();
            $table->double('price');
            $table->string('product2')->nullable();
            $table->integer('amount2')->nullable();
            $table->double('price2')->nullable();
            $table->string('product3')->nullable();
            $table->integer('amount3')->nullable();
            $table->double('price3')->nullable();
            $table->string('product4')->nullable();
            $table->integer('amount4')->nullable();
            $table->double('price4')->nullable();
            $table->string('product5')->nullable();
            $table->integer('amount5')->nullable();
            $table->double('price5')->nullable();
            $table->string('product6')->nullable();
            $table->integer('amount6')->nullable();
            $table->double('price6')->nullable();
            $table->string('product7')->nullable();
            $table->integer('amount7')->nullable();
            $table->double('price7')->nullable();
            $table->string('product8')->nullable();
            $table->integer('amount8')->nullable();
            $table->double('price8')->nullable();
            $table->string('product9')->nullable();
            $table->integer('amount9')->nullable();
            $table->double('price9')->nullable();
            $table->string('product10')->nullable();
            $table->integer('amount10')->nullable();
            $table->double('price10')->nullable();
            $table->double('total');
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
        Schema::dropIfExists('inventories');
    }
}
