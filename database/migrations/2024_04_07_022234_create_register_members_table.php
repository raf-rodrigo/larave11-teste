<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('register_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name', 255)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('cellphone', 17)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('zipcode', 9)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('addressNumber', 10)->nullable();
            $table->string('addressComplement', 25)->nullable();
            $table->string('neighborhood', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_members');
    }
};
