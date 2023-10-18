<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qestionSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "Hi",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "How are you",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "Is anyone there?",
                NOW(),
                NOW()
            );');DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "Hello",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "Good day",
                NOW(),
                NOW()
            );');DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "Hey",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                1,
                "greetings",
                NOW(),
                NOW()
            );');

        }

        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "cya",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "See you later",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "Goodbye",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "I am Leaving",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "Have a Good day",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "bye",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "cao",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                2,
                "see ya",
                NOW(),
                NOW()
            );');
        }

        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                3,
                "Where can I learn to code?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                3,
                "Best way to learn to code",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                3,
                "How can I learn programming",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                3,
                "Good programming resources",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                3,
                "Can you recommend good coding resources?",
                NOW(),
                NOW()
            );');
            
        }

        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                4,
                "What is Information Technology",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                4,
                "What is IT",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                4,
                "What is BSIT",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                4,
                "What does information technology means",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                5,
                "What are my stocks?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                5,
                "Which stocks do I own?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                5,
                "Show my stock portfolio",
                NOW(),
                NOW()
            );');
        }

        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                6,
                "What is CCS",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                6,
                "What is CCS college?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                6,
                "What is the definition of CCS",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                6,
                "What is the definition of College of Computing Studies?",
                NOW(),
                NOW()
            );');
            
        }

        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                7,
                "What are the events for this year",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                8,
                "How to shift?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                8,
                "what is the shifting process?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                8,
                "shifting process",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                8,
                "How do I change course?",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Thank you",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Thank you so much",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "I appreciate it",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Please accept my deepest gratitude",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Much appreciated",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Many thanks",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                9,
                "Thanks",
                NOW(),
                NOW()
            );');
        }
        {
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                10,
                "What is CS department?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                10,
                "CS department meeans?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                10,
                "What does the CS stands for?",
                NOW(),
                NOW()
            );');
            DB::statement('INSERT INTO questions VALUES(
                NULL,
                10,
                "CS department?",
                NOW(),
                NOW()
            );');
        }
        
    }
}
