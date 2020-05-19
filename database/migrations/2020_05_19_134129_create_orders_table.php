<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('refNumber');
            $table->timestamps();
            $table->integer('quantity');
            $table->text('loadingNotes'); 
            $table->text('deliveryNotes');
            $table->dateTime('loadingDateTime');
            $table->dateTime('deliveryDateTime');
            
            //foreign keys
            $table->unsignedBigInteger('loading_client_id');
            $table->foreign('loading_client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('loading_location_id');
            $table->foreign('loading_location_id')->references('id')->on('locations');

            $table->unsignedBigInteger('delivery_client_id');
            $table->foreign('delivery_client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('delivery_location_id');
            $table->foreign('delivery_location_id')->references('id')->on('locations');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            $table->unsignedBigInteger('metric_id');
            $table->foreign('metric_id')->references('id')->on('metrics');

            $table->unsignedBigInteger('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
