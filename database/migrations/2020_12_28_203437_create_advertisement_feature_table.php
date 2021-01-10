<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_feature', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('feature_id')->unsigned()->index();
            $table->bigInteger('advertisement_id')->unsigned()->index();
            $table->text('value')->nullable();
            $table->timestamps();
            $table->softDeletes();



             $table->foreign('advertisement_id')->references('id')->on('advertisements')->onDelete('cascade')->onUpdate('cascade');
             $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement_feature');
    }
}
