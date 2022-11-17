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
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->integer('total_price');
            $table->foreignId('user_id');
            $table->foreignId('pharmacy_id');
            $table->integer('sms_code')->nullable();
            $table->integer('order_status')->nullable();
            $table->string('expiration_date')->nullable();
            $table->integer('drug_price');
            $table->integer('drug_quantity');
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
        Schema::dropIfExists('baskets');
    }
};
