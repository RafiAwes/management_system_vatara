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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("student_name");
            $table->string("image");
            $table->string("address");
            $table->date("date_of_birth");
            $table->float("height")->nullable();
            $table->float("weight")->nullable();
            $table->string("contact_number");
            $table->string("email");
            $table->date("date_of_joining")->nullable();
            $table->enum('gender', ['male', 'female','other']);
            $table->string('batch_id')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('attended_class')->nullable();
            $table->integer('fees')->nullable();
            $table->string('status')->nullable();
            $table->string('position')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('enc_pass');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
