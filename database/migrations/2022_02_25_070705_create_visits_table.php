<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('url_id');
            $table->string('visitor_ip');
            $table->string('visitor_location');
            $table->string('visitor_long');
            $table->string('visitor_lat');
            $table->string('visitor_device');
            $table->string('visitor_os');
            $table->string('previous_platform');
            $table->string('last_visit_time');
            $table->integer('visit_count')->default(1);
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
        Schema::dropIfExists('visits');
    }
}
