<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class alterCharTypeEnum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement("ALTER TABLE `characters` CHANGE `cast_type` `cast_type` ENUM('main', 'supporting', 'extras', 'vehicle') default 'extras';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      DB::statement("ALTER TABLE `characters` CHANGE `cast_type` `cast_type` ENUM('main', 'supporting') default NULL;");
    }
}
