<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmingDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('filming_days', function (Blueprint $table) {
	      $table->increments('id');
	      $table->text('notes')->default('');
          $table->timestamps();
      });

      Schema::table('scenes', function (Blueprint $table) {
      	  $table->integer('filming_day_id')->unsigned()->default(0);
	      $table->foreign('filming_day_id')->references('id')->on('filming_days')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	      Schema::drop('filming_days');
    }
}
