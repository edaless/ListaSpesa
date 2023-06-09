<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // VERSIONE 1
            // $table->bigInteger('category_id')->unsigned();
            // $table->foreign('category_id')
            //     ->references('id')
            //     ->on('categories');
            // VERSIONE 2
            $table->foreignId('category_id')->constrained();
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
};
