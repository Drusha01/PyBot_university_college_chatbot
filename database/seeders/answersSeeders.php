<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class answersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                1,
                "Hello crimson!",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                1,
                "Good to see you again crimson!",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                1,
                "Hi there pybot at your service, how can I help you crimson?",
                NOW(),
                NOW()
            );');
        }

        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                2,
                "Sad to see you go ",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                2,
                "Talk to you later ",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                2,
                "Goodbye ",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                3,
                "Check out my lessons",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                4,
                "BSIT",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                5,
                "Here are your stocks!",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                6,
                "College of Computing Studies provides three (3) courses mainly BSCS, BSIT, ACT",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                7,
                "The events for this year are this and that",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                8,
                "shifting process!",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Thank you",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Thank you so much",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "I appreciate it",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Please accept my deepest gratitude",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Cheers",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Much appreciated",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "Many thanks",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                9,
                "I gladly appreciate it!",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO answers VALUES(
                NULL,
                2,
                10,
                "CS stands for Computer Science, CS offer a theoretical approach in solving a real world problems via computing",
                NOW(),
                NOW()
            );');
        }
    }
}
