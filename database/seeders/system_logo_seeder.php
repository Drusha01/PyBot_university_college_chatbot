<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class system_logo_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('INSERT INTO system_assets VALUES(
            NULL,
            "Pybot",
            "logo.png",
            NOW(),
            NOW()
        );');
    }
}
