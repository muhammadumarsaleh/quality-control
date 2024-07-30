<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualityControlsTable extends Migration
{
    public function up()
    {
        Schema::create('quality_controls', function (Blueprint $table) {
            $table->id();
            $table->string('report_id');
            $table->string('inspektor');
            $table->date('tanggal_pengecekan');
            $table->string('area');
            $table->string('sub_area');
            $table->string('eksekutor');
            $table->text('deskripsi_temuan');
            $table->string('foto_temuan_sebelum');
            $table->string('foto_temuan_sesudah');
            $table->string('status');
            $table->date('close_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quality_controls');
    }
}
