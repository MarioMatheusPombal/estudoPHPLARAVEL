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
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',100);
            $table->timestamps();
        });
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('filial_id');
            $table->decimal('preco', 10, 2)->default(1.00);
            $table->integer('estoque')->default(0);
            $table->timestamps();
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filial_id')->references('id')->on('filiais');
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('preco');
            $table->dropColumn('estoque');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco', 10, 2)->default(1.00);
            $table->integer('estoque')->default(0);
        });

        Schema::dropIfExists('produto_filiais');
        Schema::dropIfExists('filiais');
    }
};
