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
            $table->string('heading')->comment('หัวเรื่อง');
            $table->string('meeting')->comment('ผู้มาประชุม');
            $table->string('attendees')->comment('ผู้เข้าร่วมประชุม');
            $table->string('non-attendee')->comment('ผู้ไม่เข้าร่วมประชุม');
            $table->string('start')->comment('เวลาเริ่มประชุม');
            $table->longtext('agenda1')->comment('วาระที่1');
            $table->string('agenda2')->comment('วาระที่2');
            $table->string('agenda3')->comment('วาระที่3');
            $table->string('agenda4')->comment('วาระที่4');
            $table->string('agenda5')->comment('วาระที่5');
            $table->string('agenda6')->comment('วาระที่6');
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
