<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('members', function (Blueprint $table) {
    $table->id(); // creates BIGINT UNSIGNED primary key
    $table->string('fname');
    $table->string('lname');
    $table->string('maddress')->nullable();
    $table->string('phone')->nullable();
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
