<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('pessoa_id');

            $table->string('nome', 200);

            $table->string('cpf', 11)
                    ->unique();

            $table->timestamp('data_nascimento');

            $table->string('email', 200)
                    ->unique();

            $table->tinyInteger('status')
                    ->default(1);

            $table->string('logradouro', 200);

            $table->integer('cidade');

            $table->integer('estado');

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
        Schema::dropIfExists('pessoas');
    }
}
