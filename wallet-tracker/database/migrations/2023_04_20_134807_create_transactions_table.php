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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_type_id');
            $table->foreign('transaction_type_id')
                ->references('id')
                ->on('transaction_types')->onDelete('cascade');
            $table->foreignId('account_method_id');
            $table->foreign('account_method_id')
                ->references('id')
                ->on('accounts_methods')->onDelete('cascade');
            $table->string('buyer_name');
            $table->string('buyer_number');
            $table->foreignId('total_id');
            $table->foreign('total_id')
                ->references('id')
                ->on('totals')->onDelete('cascade');
            $table->string('image')->default('default.png');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
