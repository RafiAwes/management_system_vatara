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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->string("address")->nullable();
            $table->date("date_of_birth");
            $table->float("height");
            $table->float("weight");
            $table->string("contact_number");
            $table->string("email");
            $table->date("date_of_joining");
            $table->enum('gender', ['male', 'female','other']);
            $table->string('batch_id')->nullable();
            $table->string('trainer_id');
            $table->string('position');
            // $table->integer('attended_class');
            $table->integer('honorarium');
            $table->string('status');
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
        Schema::dropIfExists('trainers');
    }
};
