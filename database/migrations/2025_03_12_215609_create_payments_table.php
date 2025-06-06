<?php

use App\Models\Account;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('method', ['cash', 'Visa']);
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->decimal('amount');
            $table->foreignIdFor(Order::class)->nullable()->constrained()
            ->onDelete('set null');
            $table->foreignIdFor(User::class)->nullable()->constrained()
                ->onDelete('set null');
            $table->string('transaction_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
