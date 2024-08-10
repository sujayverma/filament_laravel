<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Client;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignIdFor(Client::class, 'client_id')->unsigned();
            $table->string('name', 255)->charset('utf8mb4');
            $table->string('agency', 255)->charset('utf8mb4');
            $table->string('brand', 255)->charset('utf8mb4');
            $table->text('description')->charset('utf8mb4')->nullable();
            $table->tinyInteger('status', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
