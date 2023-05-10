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
        Schema::create('mydata', function (Blueprint $table) {
            $table->id();
            $table->integer('CustomerID',11);
            $table->string('CustomerName',250);
            $table->string('Gender',30);
            $table->text('Address');
            $table->string('City',250);
            $table->string('PostalCode',30);
            $table->string('Country',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mydata');
    }
};
