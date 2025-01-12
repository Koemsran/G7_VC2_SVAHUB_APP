<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
     * Run the migrations.
     */
    
     public function up(): void
     {
         Schema::create('products', function (Blueprint $table) {
             $table->id();
             $table->foreignId('owner_id')->constrained('users')->onDelete('cascade'); // Reference to the users table
             $table->string('image');
             $table->string('name');
             $table->text('description');
             $table->decimal('price', 8, 2); // Specify the precision and scale
             $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
             $table->timestamps();
         });
     }
 
     public function down(): void
     {
         Schema::dropIfExists('products');
     }
};