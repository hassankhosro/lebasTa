<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('avatar')->default('images/avatar.png');
            $table->integer('status')->default(0);
            $table->integer('sms_code')->nullable();
            $table->timestamp('sms_date')->nullable();
            $table->string('password');
            $table->enum('gender',['man', 'woman']);
            $table->enum('method_of_introduction',['social_network', 'friend', 'meson', 'other'])->nullable();
            $table->string('mobile');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
