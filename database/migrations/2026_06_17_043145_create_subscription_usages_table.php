<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscription_usages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('subscription_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('metric');

            $table->unsignedBigInteger('used')
                ->default(0);

            $table->unsignedBigInteger('limit')
                ->nullable();

            $table->date('period_start');

            $table->date('period_end');

            $table->timestamps();

            $table->unique([
                'subscription_id',
                'metric',
                'period_start'
            ], 'subscription_usage_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_usages');
    }
};
