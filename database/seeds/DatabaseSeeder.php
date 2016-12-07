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
        $this->call(DatabaseEnSeeder::class);
        $this->call(DatabaseEsSeeder::class);

        Model::unguard();

        DB::table('users')->delete();

        $users = array(
                ['id' => 5, 'locale' => 'en_EN', 'userStatus'=> 'premium' ,'displayName' => 'Ryan',  'firstName' => 'Ryan',  'lastName' => 'Chenkie',   'email' => 'ryanchenkie@gmail.com', 'password' => Hash::make('secret')],
                ['id' => 6, 'locale' => 'es_ES', 'userStatus'=> 'normal' ,'displayName' => 'Chris', 'firstName' => 'Chris', 'lastName' => 'Sevilleja', 'email' => 'chris@scotch.io',       'password' => Hash::make('secret')],
                ['id' => 7, 'locale' => '',      'userStatus'=> 'normal' ,'displayName' => 'Holly', 'firstName' => 'Holly', 'lastName' => 'Lloyd',     'email' => 'holly@scotch.io',       'password' => Hash::make('secret')],
                ['id' => 8, 'locale' => 'pl_PL', 'userStatus'=> 'premium' ,'displayName' => 'Adnan', 'firstName' => 'Adnan', 'lastName' => 'Kukic',     'email' => 'adnan@scotch.io',       'password' => Hash::make('secret')],
        );
            
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        // -------------------------------------------------------------

        DB::table('unknown_words_1k')->delete();
        // THIS BELOW WAS MADE FOR CHECKING DB SPEED
        // $counter=1;
        // $how_many_users = 3;
        // $in_one_request_in_query = 100;
        // $words_selected_by_user = 1000;

        // for ($user=1; $user<=$how_many_users; $user++) { // $user<1000  = amount of users
        //     for ($i=1; $i<$words_selected_by_user; $i=$i+$in_one_request_in_query) {
        //         $level_progress = array();
        //         for ($y=0; $y<$in_one_request_in_query; $y++) {
        //             $now = date('Y-m-d H:i:s');
        //             array_push($level_progress, [
        //                 'id'=>$counter++,
        //                 'user_id'=>$user,
        //                 'language_id'=>'1',
        //                 'word_id'=>$i+$y,
        //                 "status"=>(($i+$y) & 3),
        //                 "created_at" => $now ]);
        //         }
        //         DB::table('unknown_words_1k')->insert($level_progress);
        //     }
        // }
        $unknown_words_1k_data = array(
                ['id' => 1, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 12, 'status' => 1, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 2, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 14, 'status' => 2, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 3, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 16, 'status' => 3, 'created_at' => '2016-12-07 12:24:18'],
                ['id' => 4, 'user_id' => 8, 'language_id'=> 1 ,'word_id' => 18, 'status' => 0, 'created_at' => '2016-12-07 12:24:18'],
        );
            
        DB::table('unknown_words_1k')->insert($unknown_words_1k_data);
        // -------------------------------------------------------------

        DB::table('available_dictionaries')->delete();

        $available_dictionaries = array(
            ['language_id' => 'en_EN', 'count_words'=> 4586, 'free_words_for_not_premium_users' => 2200, 'language_name' => 'english', 'available_languages' => '[{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'es_ES', 'count_words'=> 5000, 'free_words_for_not_premium_users' => 2500, 'language_name' => 'spanish', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'ru_RU', 'count_words'=> 5500, 'free_words_for_not_premium_users' => 2600, 'language_name' => 'russian', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'fr_FR', 'count_words'=> 6000, 'free_words_for_not_premium_users' => 3000, 'language_name' => 'french',  'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'de_DE', 'count_words'=> 6500, 'free_words_for_not_premium_users' => 3200, 'language_name' => 'deutsch', 'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"pl_PL", "name":"polish"}]'],
            ['language_id' => 'pl_PL', 'count_words'=> 7000, 'free_words_for_not_premium_users' => 4400, 'language_name' => 'polish',  'available_languages' => '[{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}]'],
        );
        DB::table('available_dictionaries')->insert($available_dictionaries);


        // $level_progress = array(
        //     ['user_id' => '8', 'dictionary_id'=> 1, 'levels_progress' => '[{"level": "1", "done":"yes"},{"level": "2", "done":"no"},{"level": "3", "done":"yes"},{"level": "4", "done":"no"},{"5": "lvl5EN", "done":"no"},{"level": "6", "done":"yes"},{"level": "7", "done":"no"}]'],
        //     ['user_id' => '8', 'dictionary_id'=> 2, 'levels_progress' => '[{"level": "1", "done":"no"}, {"level": "2", "done":"no"},{"level": "3", "done":"no"}, {"level": "4", "done":"no"},{"5": "lvl5EN", "done":"no"},{"level": "6", "done":"no"}, {"level": "7", "done":"no"}]'],
        // );

        // DB::table('users_level_progress')->insert($level_progress);



        Model::reguard();
 
    }
}
