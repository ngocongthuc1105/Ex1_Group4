<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muon', function (Blueprint $table) {
            $table->increments('ma_muon');
            $table->string('user_name',100);
            $table->string('ma_sach',100);
            $table->integer('so_luong');
            $table->date('ngay_muon');
            $table->date('ngay_hen_tra');
            $table->date('ngay_tra');
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
        Schema::dropIfExists('muon');
    }
}
