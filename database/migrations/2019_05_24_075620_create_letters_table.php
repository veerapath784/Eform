<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('at')->comment('ที่');
            $table->string('address')->comment('ที่อยู่');
            $table->string('date')->comment('วันที่');
            $table->string('subject')->comment('เรื่อง');
            $table->string('study')->comment('เรียน');
            $table->longtext('deteil')->comment('เนื้อหา');
            $table->string('ending')->comment('ขอแสดงความนับถือ');
            $table->string('sign')->comment('ลงนาม');
            $table->string('position')->comment('ตำแหน่ง');
            $table->string('phone')->comment('โทร');

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
        Schema::dropIfExists('letters');
    }
}
