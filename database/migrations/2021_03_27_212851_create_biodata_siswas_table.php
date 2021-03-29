<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('kelas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('nomor_absensi')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->enum('jenis_kelamin', ['l', 'p'])->default('l');
            $table->enum('goldar', ['a', 'ab', 'b', 'o'])->default('a');
            $table->enum('kewarganegaraan', ['wni', 'wna'])->default('wni');
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('tinggi_badan', false, true)->length(10);
            $table->integer('berat_badan', false, true)->length(10);

            $table->string('nama_depan_ayah')->nullable();
            $table->string('nama_belakang_ayah')->nullable();
            $table->string('alamat_rumah_ayah')->nullable();
            $table->string('desa_kelurahan_ayah')->nullable();
            $table->string('kecamatan_ayah')->nullable();
            $table->string('kabupaten_kota_ayah')->nullable();
            $table->string('provinsi_ayah')->nullable();
            $table->string('kode_pos_ayah')->nullable();
            $table->string('nomor_hp_ayah')->nullable();
            $table->enum('goldar_ayah', ['a', 'ab', 'b', 'o'])->default('a');
            $table->enum('kewarganegaraan_ayah', ['wni', 'wna'])->default('wni');
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();

            $table->string('nama_depan_ibu')->nullable();
            $table->string('nama_belakang_ibu')->nullable();
            $table->string('alamat_rumah_ibu')->nullable();
            $table->string('desa_kelurahan_ibu')->nullable();
            $table->string('kecamatan_ibu')->nullable();
            $table->string('kabupaten_kota_ibu')->nullable();
            $table->string('provinsi_ibu')->nullable();
            $table->string('kode_pos_ibu')->nullable();
            $table->string('nomor_hp_ibu')->nullable();
            $table->enum('goldar_ibu', ['a', 'ab', 'b', 'o'])->default('a');
            $table->enum('kewarganegaraan_ibu', ['wni', 'wna'])->default('wni');
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_siswa');
    }
}
