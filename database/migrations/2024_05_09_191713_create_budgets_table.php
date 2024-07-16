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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('budget_code')->unique();

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->enum('status', ['open', 'rejected', 'accepted'])->default('open');

            $table->string('payment_date');
            $table->string('deadline');
            $table->string('signal');

            $table->decimal('signal_price', 8, 2);
            $table->decimal('remaining_price', 8, 2);
            $table->decimal('total_budget_price', 8, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
