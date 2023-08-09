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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name1');
            $table->string('last_name2');
            $table->string('phone');
            $table->string('curp');
            $table->string('rfc');
            $table->string('nationality');
            $table->string('place_born');
            $table->string('account_number_bank');
            $table->string('bank');
            $table->string('clabe');
            $table->string('infonavit');
            $table->string('position');
            $table->date('date_start');
            $table->string('remplacement_employee_id')->nullable();
            $table->string('remplacement_employee_name')->nullable();
            $table->string('remplacement_employee_reasons')->nullable();
            $table->date('remplacement_employee_date')->nullable();
            $table->string('scholarship');
            $table->tinyInteger('gender');
            $table->tinyInteger('marital_status');
            $table->string('street');
            $table->bigInteger('number');
            $table->string('suburb');
            $table->string('colony');
            $table->string('city');
            $table->string('state');
            $table->string('cp');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
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
};
