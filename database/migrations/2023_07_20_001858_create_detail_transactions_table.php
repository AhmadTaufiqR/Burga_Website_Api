<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('id_transactions')->nullable(true);
            $table->foreign('id_transactions')->references('id_transaction')->on('transactions');
            $table->unsignedBigInteger('id_product')->nullable(true);
            $table->foreign('id_product')->references('id')->on('products');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('subtotal');
            $table->softDeletes();
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
        Schema::dropIfExists('detail_transactions');
    }
};
