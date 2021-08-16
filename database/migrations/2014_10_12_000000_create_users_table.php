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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->tinyInteger('verified')->default(2)->comment('1: verified, 2: not verify');
            $table->string('verification_token')->nullable();
            $table->tinyInteger('provider')->nullable()->comment('1: Facebook, 2: Mobile phone');
            $table->bigInteger('provider_id')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string('avatar')->nullable();

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
