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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name",255);
            $table->string("product_code", 20)->unique();
            $table->int("trial_licence_period", 5)->default(14);
            $table->int("normal_licence_period", 5)->default(365);
            $table->boolean("user_licence_type")->default(false);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
