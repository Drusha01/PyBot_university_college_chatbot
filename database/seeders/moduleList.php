<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class moduleList extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "dashboard",
            "Dashboard",
            "dashboard",
            "bi bi-grid menu-icon",
            1,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "colleges",
            "Colleges",
            "colleges",
            "bi bi-person menu-icon",
            2,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "department",
            "Department Management",
            "department",
            "bi bi-question-circle menu-icon",
            3,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "profanity words",
            "Profanity Word Management",
            "profanity-words",
            "bi bi-volume-mute",
            4,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "model",
            "Model",
            "model",
            "bi bi-envelope menu-icon",
            5,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "user-management",
            "User Management",
            "usermanagement",
            "bi bi-card-list menu-icon",
            6,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "exam-m",
            "Chat Box Management",
            "chatbox",
            "bi bi-chat-text menu-icon",
            7,
            1,
            1,
            NOW(),
            NOW()
        );');
        DB::statement('INSERT INTO modules VALUES(
            NULL,
            "setting",
            "Settings",
            "setting",
            "bi bi-gear menu-icon",
            8,
            1,
            1,
            NOW(),
            NOW()
        );');

       
    }
}
