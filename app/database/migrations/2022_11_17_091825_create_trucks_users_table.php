<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrucksUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trucks_users', function (Blueprint $table) {
            $table->id();
            $table->date('startRent')->nullable();
            $table->date('endRent')->nullable();
            $table->foreignId('truck_id')
            ->constrained('trucks')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnUpdate()
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
        Schema::dropIfExists('trucks_users');
    }
}
