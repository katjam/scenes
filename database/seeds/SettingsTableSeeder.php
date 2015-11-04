// /database/migrations/seeds/SettingsTableSeeder.php
<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('settings')->delete();

    $settings = array(
      ['id' => 1, 'set_name' => 'LITTLE MAYS HOUSE', 'location' => 'Greenland', 'notes' => 'We need to book early and bring coats. contact: 07766554432', 'created_at' => new DateTime, 'updated_at' => new DateTime],
      ['id' => 2, 'set_name' => 'HOWLS GARDEN', 'location' => 'Iceland', 'notes' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime]
    );
    DB::table('settings')->insert($settings);
  }

}

