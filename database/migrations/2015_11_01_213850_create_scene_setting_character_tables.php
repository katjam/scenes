<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSceneSettingCharacterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('settings', function (Blueprint $table) {
	      $table->increments('id');
	      $table->string('set_name')->nullable();
	      $table->string('location')->nullable();
	      $table->text('notes')->nullable();
	      // @todo way of ref to other settings geographically nearby
        $table->timestamps();
	    });
	    Schema::create('scenes', function (Blueprint $table) {
	      $table->increments('id');
	      // @todo - film with id of other scenes to group with this one
	      $table->char('scn_no', 4);
        $table->text('description')->nullable();
        $table->enum('int_ext', ['INT','EXT']);
	      $table->integer('setting_id')->unsigned()->default(0);
	      $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
	      $table->enum('day_night', ['day', 'night', 'evening', 'dawn', 'dusk']);
        $table->integer('page_count')->unsigned()->default(0);
        $table->integer('filming_day')->nullable();
        $table->timestamps();
      });
      Schema::create('characters', function (Blueprint $table) {
	      $table->increments('id');
	      $table->string('character_name')->default('')->unique();
        $table->enum('cast_type', ['main', 'supporting']);
        $table->text('description')->nullable();
	      $table->string('actor')->nullable();
	      $table->text('contact')->nullable();
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
        Schema::drop('settings');
	      Schema::drop('characters');
	      Schema::drop('scenes');
    }
}
