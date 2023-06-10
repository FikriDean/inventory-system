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
                ->on('transaction_types')->constrained()->onDelete('cascade');
            $table->foreignId('account_method_id');
            $table->foreign('account_method_id')
                ->references('id')
                ->on('accounts_methods')->constrained()->onDelete('cascade');
            $table->string('transaction_name');
            $table->string('transaction_number');
            $table->foreignId('order_id');
            $table->foreign('order_id')
                ->references('id')
                ->on('orders')->constrained()->onDelete('cascade');
            $table->foreignId('status_id');
            $table->foreign('status_id')
                ->references('id')
                ->on('transaction_statuses')->constrained()->onDelete('cascade');
            $table->string('image')->nullable();
            $table->string('status')->default('pending');
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
