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
        Schema::create('addemployees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->bigInteger('mobile');
            $table->string('post');
            $table->bigInteger('salary');
            $table->string('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addemployees');
    }
};
