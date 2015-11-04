// /database/migrations/seeds/CharactersTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder {

  public function run()
  {
    DB::table('characters')->delete();

    $cast = array(
      ['id' => 1, 'character_name' => 'MAY', 'description' => '4 years old, blonde', 'actor' => 'Julie June', 'contact' => 'Agent - Gearge Mellors, 0778876543', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 2, 'character_name' => 'HOWL', 'description' => 'magic boy', 'actor' => 'John Jones', 'contact' => '0778876543', 'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('characters')->insert($cast);
  }

}
