<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_tag', function(Blueprint $table){
            $table->bigIncrements('product_tag_id');
            $table->unsignedInteger('tag_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('tag_id')->references('tag_id')->on('tag');
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tag');
    }
};
