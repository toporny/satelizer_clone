<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->call(DatabaseTwoSeeder::class);

        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                ['displayName' => 'Ryan Chenkie', 'email' => 'ryanchenkie@gmail.com', 'password' => Hash::make('secret')],
                ['displayName' => 'Chris Sevilleja', 'email' => 'chris@scotch.io', 'password' => Hash::make('secret')],
                ['displayName' => 'Holly Lloyd', 'email' => 'holly@scotch.io', 'password' => Hash::make('secret')],
                ['displayName' => 'Adnan Kukic', 'email' => 'adnan@scotch.io', 'password' => Hash::make('secret')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        DB::table('unknown_words')->delete();

        DB::table('users')->delete();

        DB::table('available_dictionaries')->delete();

        $available_dictionaries = array(
            ['language_id' => 'en_EN', 'count_words'=> 4586, 'language_name' => 'english', 'available_languages' => '[{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'es_ES', 'count_words'=> 5000, 'language_name' => 'spanish', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'ru_RU', 'count_words'=> 5500, 'language_name' => 'russian', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'fr_FR', 'count_words'=> 6000, 'language_name' => 'french',  'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'de_DE', 'count_words'=> 6500, 'language_name' => 'deutsch', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'pl_PL', 'count_words'=> 7000, 'language_name' => 'polish',  'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}]'],
        );


        DB::table('available_dictionaries')->insert($available_dictionaries);

   
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }


        Model::reguard();
 
    }
}
