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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('img');
            $table->timestamp('date')->nullable();
            $table->string('unit');
            $table->integer('price');
            $table->boolean('is_sample_product')->default(0);
            $table->string('Details');
            $table->string('country');
            $table->string('time');
            $table->string('sale_range');
            $table->string('features');




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
        Schema::dropIfExists('products');
    }
};
