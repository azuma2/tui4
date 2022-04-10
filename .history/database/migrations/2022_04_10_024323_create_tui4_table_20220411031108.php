<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTui4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('tui4s', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('age');
            $table->string('nationality', 100);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });



        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('tui4_id');
            $table->string('title');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tui4');
                Schema::dropIfExists('likes');
    }
}
