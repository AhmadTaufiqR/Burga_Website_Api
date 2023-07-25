<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code_barcode');
            $table->string('name_product');
            $table->integer('price_product');
            $table->string('desc_product');
            $table->integer('stok');
            $table->string('image')->nullable(true);
            $table->softDeletes();
            $table->timestamps();
        });

        $faker = \Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
            Product::create([
                'code_barcode' => $faker->randomNumber(5, true),
                'name_product' => $faker->word(),
                'price_product'=> $faker->randomNumber(3, true),
                'desc_product'=> $faker->sentence(5, true),
                'stok'=> $faker->randomNumber(1, true),
                'image'=> $faker->sentence(5, true),
                
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_product');
    }
};
