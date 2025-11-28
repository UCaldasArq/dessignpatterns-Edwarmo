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
        Schema::table('products', function (Blueprint $table) {
            // Renombrar las columnas a minúsculas y con guiones bajos
            $table->renameColumn('Product Stock', 'product_stock');
            $table->renameColumn('Product_Prince', 'product_price');
            $table->renameColumn('Product_Status', 'product_status');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
