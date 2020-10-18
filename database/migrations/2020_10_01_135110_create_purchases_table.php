<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('user_email');
            $table->string('name');
            $table->string('address');
            $table->string('contact');
            $table->string('phone');
            $table->string('type');
            $table->string('status');
            $table->string('product');
            $table->integer('amount');
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
        Schema::dropIfExists('purchases');
    }
}
