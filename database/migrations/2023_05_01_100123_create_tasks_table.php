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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('order');
            $table->date('limit')->nullable();
            $table->unsignedBigInteger('column_id');
            $table->unsignedBigInteger('created_user_id')->nullable();
            $table->unsignedBigInteger('assigned_user_id')->nullable();
            $table->foreign('column_id')->references('id')->on('columns')->onDelete('cascade');
            $table->foreign('created_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('assigned_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tasks');
    }
};
