<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('expdate');
            $table->integer('totalqty')->nullable();
            $table->integer('qtyleft')->nullable();
            $table->integer('qty');
            $table->string('location');
            $table->double('unitprice');
            $table->double('price');
            $table->double('totalunit')->nullable();
            $table->double('total')->nullable();
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
        Schema::dropIfExists('prod_inventories');
    }
}
