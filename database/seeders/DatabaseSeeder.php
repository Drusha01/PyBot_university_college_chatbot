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
        ]);
    }
}
