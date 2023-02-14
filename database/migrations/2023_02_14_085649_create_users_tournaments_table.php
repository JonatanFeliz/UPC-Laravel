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
        Schema::create('user_tournaments', function (Blueprint $table) {
            $table->id();

            // $table->string('user_id');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->cascadeOnDelete();       
            
            // $table->string('user_id');
            // $table->foreign('tournament_id')
            //     ->references('id')
            //     ->on('tournaments')
            //     ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('tournament_id')
                ->nullable()    
                ->constrained()
                ->cascadeOnDelete();

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
        Schema::dropIfExists('user_tournaments');
    }
};
