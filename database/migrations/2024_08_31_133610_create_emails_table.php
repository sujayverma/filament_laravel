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
        Schema::create('emails', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->string('video_ids', 128)->charset('utf8mb4')->nullable();
            $table->string('email_subject',128)->charset('utf8mb4')->nullable();
            $table->text('email_message')->charset('utf8mb4')->nullable();
            $table->string('attach_type',32)->charset('utf8mb4')->default('send_link'); 
            $table->string('status',32)->charset('utf8mb4')->default('pending')->comment('pending, failed, delivered');
            $table->text('error_detail')->nullable();
            $table->dateTime('sending_date_time');
            $table->dateTime('delivered_date_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
