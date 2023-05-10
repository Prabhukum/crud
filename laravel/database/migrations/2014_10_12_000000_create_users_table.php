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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('Date');
            $table->integer('BM_BatchID');
            $table->string('CountyName', 255);
            $table->string('BM_BatchName', 255);
            $table->integer('ImageID');
            $table->string('ImageName', 255);
            $table->integer('AddendumID')->nullable();
            $table->string('DocType_Name', 255)->nullable();
            $table->string('Level_name', 255)->nullable();
            $table->string('FieldLabel', 255);
            $table->string('IndexFieldValue', 4096)->nullable();
            $table->string('VerifyFieldValue', 4096)->nullable();
            $table->string('IndexUser', 255)->nullable();
            $table->string('VerifyUser', 255)->nullable();
            $table->enum('ErrorStatus', ['Error', 'No Error']);
            $table->string('VendorName', 255)->nullable();
            $table->string('Status', 255)->nullable();
            $table->timestamps();
        });
    }
    // ->nullable()
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
