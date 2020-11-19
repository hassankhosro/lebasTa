<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->enum('status',['enable', 'disable'])->default('disable');
            $table->enum('type',['secondhand', 'unused'])->default('secondhand');
            $table->enum('sell_way',['own', 'meson'])->default('own');
            $table->bigInteger('cat_id')->unsigned()->index();
            $table->bigInteger('meson_id')->unsigned()->index()->nullable();
            $table->bigInteger('group_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->text('description')->nullable();
            $table->integer('view_count')->default(0);
            $table->bigInteger('price');
            $table->bigInteger('market_price');
            $table->string('made_in');
            $table->string('brand')->nullable();
            $table->string('material')->nullable();
            $table->string('usage')->nullable();
            $table->text('image')->default('img/advertisement.png');
            $table->timestamp('buy_at')->nullable();
            $table->timestamps();
            $table->softDeletes();



            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('meson_id')->references('id')->on('mesons')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
