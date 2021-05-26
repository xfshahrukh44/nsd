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
            'Facebook',
            'Twitter',
            'Youtube',
            'Instagram',
            'Company Address 1',
            'Company Address 2',
            'Phone',
            'Phone 2',
            'Email',
            'Support Email',
            'Copyright',
            'Staff Email',
            'Central Office',
            'Address Line 1',
            'Address Line 2',
            'Contact Number',
            'Media Requests',
            'Website/Profile Updates',
            'Exposure Oppurtunity 1 Content',
            'Exposure Oppurtunity 2 Content',
            'Exposure Oppurtunity 3 Content',
            'Exposure Oppurtunity 4 Content',
            'Exposure Oppurtunity 1 icon',
            'Exposure Oppurtunity 2 icon',
            'Exposure Oppurtunity 3 icon',
            'Exposure Oppurtunity 4 icon',
        ];
        foreach($settings_array as $key){
            DB::table('settings')->insert([
                'key' => $key
            ]);
        }
    }
}
