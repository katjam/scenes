// /database/migrations/seeds/CharactersScenesTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class CharactersScenesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('characters_scenes')->delete();

    $characters_scenes = array(
      ['character_id' => 1, 'scene_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['character_id' => 2, 'scene_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['character_id' => 2, 'scene_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('characters_scenes')->insert($characters_scenes);
  }

}

