<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_service', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('base_price');
            $table->string('discount_price')->default('0');
            $table->string('tax_class_id');
            $table->string('vat')->nullable(true);
            $table->string('sku')->unique();
            $table->string('barcode');
            $table->string('quantity');
            $table->string('availability');
            $table->longText('description');
            $table->json('media')->nullable(true);
            $table->foreignId('thumbnail');
            $table->string('shipping_cost')->nullable(true);
            $table->string('status');
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
        Schema::dropIfExists('it_service');
    }
}
