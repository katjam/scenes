// /database/migrations/seeds/CharacterSceneTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class CharacterSceneTableSeeder extends Seeder {

  public function run()
  {
    DB::table('character_scene')->delete();

    $character_scene = array(
      ['character_id' => 1, 'scene_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['character_id' => 2, 'scene_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['character_id' => 2, 'scene_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('character_scene')->insert($character_scene);
  }

}

