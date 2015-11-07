// /database/migrations/seeds/ScenesTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class ScenesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('scenes')->delete();

    $scenes = array(
      ['id' => 1, 'scn_no' => '1', 'description' => 'George buys a house.', 'int_ext' => 'INT', 'setting_id' => 1, 'day_night' => 'day', 'story_day' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 2, 'scn_no' => '2', 'description' => 'May runs away', 'int_ext' => 'EXT', 'setting_id' => 2, 'day_night' => 'day', 'story_day' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 3, 'scn_no' => '3', 'description' => 'All the characters runs around in circles and whoop for joy!', 'int_ext' => 'EXT', 'setting_id' => 1, 'day_night' => 'night', 'story_day' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('scenes')->insert($scenes);
  }

}

