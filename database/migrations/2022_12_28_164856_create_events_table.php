<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('judul');

            $table->string('by');
            $table->text('tentang');
            $table->text('materi');
            $table->text('sk');

            $table->date('tanggalMulai');
            $table->time('waktuMulai');
            $table->string('lokasi');
            $table->string('peralatan');
            $table->string('pendaftaran');

            $table->foreignId('recomended_id');
            $table->foreignId('mentor_id');
            $table->foreignId('status_id');
            $table->foreignId('category_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
