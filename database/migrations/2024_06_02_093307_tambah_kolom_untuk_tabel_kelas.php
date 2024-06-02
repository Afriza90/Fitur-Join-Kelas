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
        Schema::table('kelas', function (Blueprint $table) {
            $table->unsignedInteger('id_pengguna')->after('id_kelas');
            $table->enum('tingkat_kelas', ['Beginner', 'Intermediate', 'Advanced', 'Expert', 'Professional'])->after('nama_singkat');
            $table->string('sampul')->nullable()->change();
            $table->string('silabus')->nullable();
            $table->text('deskripsi');

            $table->foreign('id_pengguna')->references('id')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
