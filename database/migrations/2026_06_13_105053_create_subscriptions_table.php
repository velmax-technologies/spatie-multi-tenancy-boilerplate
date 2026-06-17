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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tenant_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('plan_id')
                ->constrained()
                ->restrictOnDelete();

            $table->enum('billing_cycle', [
                'monthly',
                'yearly'
            ]);

            $table->enum('status', [
                'trial',
                'active',
                'expired',
                'cancelled',
                'suspended'
            ])->default('trial');;

            $table->decimal('amount', 12, 2);

            $table->date('starts_at');
            $table->date('ends_at')->nullable();

            $table->date('trial_ends_at')->nullable();

            $table->boolean('auto_renew')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
