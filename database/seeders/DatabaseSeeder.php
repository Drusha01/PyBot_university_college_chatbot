<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            userRoles::class,
            userGenders::class,
            userSex::class,
            userStatus::class,
            qAndASeeders::class,
            qestionSeeders::class,
            answersSeeders::class,
            userDefaults::class,
            q_and_a_types_seeder::class,
            target_types::class,
            About_us_page::class,
            system_logo_seeder::class,
        ]);
    }
}
