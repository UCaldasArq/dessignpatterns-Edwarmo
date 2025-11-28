<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Agrega la columna category_id que será la llave foránea
            $table->unsignedBigInteger('category_id')->nullable();

            // Establecer la llave foránea que referencia a la tabla categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Eliminar la llave foránea y la columna
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}

