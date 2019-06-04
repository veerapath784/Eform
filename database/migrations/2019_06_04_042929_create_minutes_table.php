<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('heading')->comment('หัวเรื่อง');
            $table->longtext('meeting')->comment('ผู้มาประชุม');
            $table->longtext('attendees')->comment('ผู้เข้าร่วมประชุม');
            $table->longtext('nonattendee')->comment('ผู้ไม่เข้าร่วมประชุม');
            $table->longtext('start')->comment('เวลาเริ่มประชุม');
            $table->longtext('time')->comment('เวลา');
            $table->longtext('agenda1')->comment('วาระที่1');
            $table->longtext('agenda2')->comment('วาระที่2');
            $table->longtext('agenda3')->comment('วาระที่3');
            $table->longtext('agenda4')->comment('วาระที่4');
            $table->longtext('agenda5')->comment('วาระที่5');
            $table->longtext('agenda6')->comment('วาระที่6');
            $table->string('end')->comment('เวลาเลิกประชุม');
            $table->string('sign1')->comment('ลงนาม1');
            $table->string('sign2')->comment('ลงนาม2');
            $table->string('position1')->comment('ตำแหน่ง1');
            $table->string('position2')->comment('ตำแหน่ง2');

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
        Schema::dropIfExists('minutes');
    }
}
