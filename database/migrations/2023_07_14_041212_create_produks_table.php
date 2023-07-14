<?php

use App\Models\product;
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
            $table->string('name_product');
            $table->string('price_product');
            $table->string('desc_product');
            $table->string('image');
            $table->timestamps();
        });

        $faker = \Faker\Factory::create();
        for ($i=0; $i < 10 ; $i++) { 
            product::create([
                'name_product' => $faker->word(),
                'price_product'=> $faker->randomNumber(3, true),
                'desc_product'=> $faker->sentence(5, true),
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
        //
    }
};
