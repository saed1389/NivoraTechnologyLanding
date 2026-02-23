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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('google_place_id')->unique();
            $table->string('business_name');
            $table->string('category');
            $table->string('city');
            $table->char('country', 2);
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->text('address')->nullable();
            $table->string('google_maps_url')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->integer('review_count')->default(0);
            $table->string('business_status')->nullable();
            $table->integer('lead_score')->default(0);
            $table->string('lead_category')->default('cold');
            $table->json('qualification_reasons')->nullable(); // optional, can be added later
            $table->string('scanned_by')->nullable();
            $table->timestamp('scanned_at');
            $table->timestamps();

            // indexes for fast filtering
            $table->index(['city', 'lead_score']);
            $table->index('lead_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
