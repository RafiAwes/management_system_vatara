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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->date('end_date')->nullable();
            $table->time('time')->nullable();
            $table->string('days');
            $table->string('supervisor');
            $table->integer('total_participants')->nullable();
            // $table->string('volunteers')->nullable()->default(null)->change();
            // $table->string('rules')->nullable()->default(null)->change();
            $table->string('registration_fees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
