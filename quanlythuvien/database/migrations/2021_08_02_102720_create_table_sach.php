<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('ma_sach');
            $table->string('ten_sach',100);
            $table->string('ten_tac_gia',100);
            $table->string('ngon_ngu',100);
            $table->string('dich_gia',100);
            $table->string('the_loai',100);
            $table->string('ma_ddc',100);
            $table->string('nxb',100);
            $table->text('gioi_thieu_sach',100);
            $table->integer('so_luong');
            $table->integer('gia_tien');
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
        Schema::dropIfExists('sach');
    }
}
