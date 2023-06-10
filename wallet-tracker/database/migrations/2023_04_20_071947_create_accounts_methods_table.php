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
        Schema::create('accounts_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id');
            $table->foreign('account_id')
                ->references('id')
                ->on('accounts')->constrained()->onDelete('cascade');
            $table->foreignId('method_id');
            $table->foreign('method_id')
                ->references('id')
                ->on('methods')->constrained()->onDelete('cascade');
            $table->string('am_code');
            $table->string('name');
            $table->string('number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_methods');
    }
};
