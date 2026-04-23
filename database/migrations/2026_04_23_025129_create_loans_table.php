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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->foreignIdFor(\App\Models\Book::class)->constrained();
            $table->date('loaned_at')->comment('La fecha de prestamo');
            $table->date('returned_at')->comment('La fecha de devolucion');
            $table->date('due_date')->comment('La fecha maxima de devolucion');
            $table->boolean('returned')->default(false)->comment('Indica si el libro ha sido devuelto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
