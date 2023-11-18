<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class About_us_page extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('INSERT INTO about_us_page VALUES(
            NULL,
            "Welcome to the future of educational assistance! PyBOT is your virtual companion designed to enhance your university experience in the digital age. This intelligent and friendly bot is here to make your academic journey smoother, more efficient, and enjoyable.",
            1,
            NOW(),
            NOW()
        );');
    }
}
