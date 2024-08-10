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
        Schema::create('channels', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name', 255)->charset('utf8mb4');
            $table->string('contact_person', 255)->charset('utf8mb4');
            $table->string('email', 255)->charset('utf8mb4');
            $table->string('phone_no', 50)->charset('utf8mb4');
            $table->text('address')->charset('utf8mb4');
            $table->tinyInteger('status',false,true); // Auto increment false and Unsigned is true.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
