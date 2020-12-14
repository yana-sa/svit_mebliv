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
        Schema::create('клиенты', function (Blueprint $table) {
            $table->id();
            $table->string('имя');
            $table->string('фамилия');
            $table->string('эмейл')->unique();
            $table->string('телефон');
            $table->timestamp('эмейл_верификация')->nullable();
            $table->string('пароль');
            $table->tinyInteger('админ')->default(0);
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
