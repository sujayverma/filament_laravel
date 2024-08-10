<?php

use App\Models\Campaign;
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
        Schema::create('videos', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignIdFor(Campaign::class);
            $table->string('name', 255)->charset('utf8mb4');
            $table->string('length', 32)->charset('utf8mb4')->nullable();
            $table->string('frames', 32)->charset('utf8mb4')->nullable();
            $table->string('size', 32)->charset('utf8mb4')->nullable();
            $table->string('language', 128)->charset('utf8mb4')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->string('beta_no', 32)->charset('utf8mb4')->nullable();
            $table->string('caption', 64)->charset('utf8mb4')->nullable();
            $table->string('download_url', 128)->charset('utf8mb4')->nullable();
            $table->string('download_channels', 128)->charset('utf8mb4')->nullable();
            $table->tinyInteger('status', false, true);
            $table->integer('downloadable')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Videos');
    }
};
