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
        Schema::create('reports', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('email_id')->unsigned();
            $table->string(column: 'channel_name', length: 255)->charset('utf8mb4');
            $table->string('title',255)->charset('utf8mb4')->comment('This is campaign name');
            $table->string('client_name',255)->charset('utf8mb4');
            $table->string('brand_name',255)->charset('utf8mb4')->comment('This is in Campaign table.');
            $table->string('duration', 32)->charset('utf8mb4')->nullable()->comment('This is Video length');
            $table->string('language', 128)->charset('utf8mb4')->nullable()->comment('This is from Video language.');
            $table->string('tvc_id', 32)->charset('utf8mb4')->nullable()->comment('This beta_no from video table.');
            $table->string('agency', 255)->charset('utf8mb4')->comment('This is from Campaign table.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
