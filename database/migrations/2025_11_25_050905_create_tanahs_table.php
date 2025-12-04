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
        // Buat tabel 'tanahs' jika belum ada
        if (!Schema::hasTable('tanahs')) {
            Schema::create('tanahs', function (Blueprint $table) {
                $table->id();
                $table->string('nama_tanah');
                $table->string('kode_tanah');
                $table->string('status')->nullable();
                $table->timestamps();
            });
        }

        // Tambahkan kolom tambahan jika belum ada
        Schema::table('tanahs', function (Blueprint $table) {
            if (!Schema::hasColumn('tanahs', 'no_sertifikat')) {
                $table->string('no_sertifikat')->nullable();
            }

            if (!Schema::hasColumn('tanahs', 'alamat')) {
                $table->string('alamat')->nullable();
            }

            if (!Schema::hasColumn('tanahs', 'luas')) {
                $table->integer('luas')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Hapus kolom tambahan jika ada
        Schema::table('tanahs', function (Blueprint $table) {
            if (Schema::hasColumn('tanahs', 'alamat')) {
                $table->dropColumn('alamat');
            }

            if (Schema::hasColumn('tanahs', 'no_sertifikat')) {
                $table->dropColumn('no_sertifikat');
            }

            if (Schema::hasColumn('tanahs', 'luas')) {
                $table->dropColumn('luas');
            }
        });

        // Hapus tabel jika ada
        if (Schema::hasTable('tanahs')) {
            Schema::dropIfExists('tanahs');
        }
    }
};
