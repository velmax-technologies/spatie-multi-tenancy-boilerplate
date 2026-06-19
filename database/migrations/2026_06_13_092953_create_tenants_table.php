<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            // Business
            $table->string('business_name')->unique();
            $table->string('slug')->unique();

            // personal & contact
            $table->string('owner_name');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();

            // Database Configuration
            $table->string('database')->unique();
            $table->string('database_host')->default('127.0.0.1');
            $table->integer('database_port')->default(3306);
            $table->string('database_username')->nullable();
            $table->string('database_password')->nullable();

            // subdomain
            $table->string('subdomain')->unique();

            
            // status
            $table->boolean('is_active')->default(false);
            
            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_active']);
        });
    }
};

// TODO:: Enable hosting database on extanal server