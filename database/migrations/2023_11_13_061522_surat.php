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
        Schema::create("surat", function (Blueprint $table) {
            $table->integer("id_surat", true, false)->nullable(false);
            $table->integer("id_jenis_surat", false, false)->nullable(false);
            $table->integer('id_user', false, false)->index('idUser')->nullable(false);
            $table->date('tanggal_surat')->nullable(false)->default('2023-01-01');
            $table->text('ringkasan');
            $table->text('file');

            // Membuat FK
            $table->foreign('id_jenis_surat')
                ->references('id_jenis_surat')
                ->on('jenis_surat')
                ->onDelete('cascade')->onUpdate('cascade');

            // Membuat Key ID User
            $table->foreign('id_user')
                ->references('id_user')
                ->on('tbl_user')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
