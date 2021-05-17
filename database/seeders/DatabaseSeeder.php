<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Logos
        // DB::table('logos')->insert([
        //     'type' => 'main'
        // ]);
        // DB::table('logos')->insert([
        //     'type' => 'footer'
        // ]);
        // DB::table('logos')->insert([
        //     'type' => 'favicon'
        // ]);

        // Settings
        $settings_array = [
            'Address Line 1',
            'Address Line 2',
            'Contact Number',
            'Media Requests',
            'Website/Profile Updates',
        ];
        foreach($settings_array as $key){
            DB::table('settings')->insert([
                'key' => $key
            ]);
        }
    }
}
