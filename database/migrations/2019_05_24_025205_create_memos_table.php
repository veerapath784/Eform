<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part')->comment('ส่วนราชการ');
            $table->string('phone')->comment('โทร');
            $table->string('at')->comment('ที่');
            $table->date('date')->comment('วันที่');
            $table->string('subject')->comment('เรื่อง');
            $table->string('study')->comment('เรียน');
            $table->longtext('deteil')->comment('เนื้อหา');
            $table->string('ending')->comment('จึงเรียนมา');
            $table->string('sign')->comment('ลงนาม');
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
        Schema::dropIfExists('memos');
    }
}
