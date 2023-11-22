<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class access_role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `access_roles` (`access_role_id`, `access_role_user_id`, `access_role_module_id`, `access_role_create`, `access_role_read`, `access_role_update`, `access_role_delete`, `created_at`, `updated_at`) VALUES
        (1, 1, 7, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:05'),
        (2, 1, 6, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:08'),
        (3, 1, 5, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:09'),
        (4, 1, 4, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:10'),
        (5, 1, 3, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:12'),
        (6, 1, 2, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:13'),
        (7, 1, 1, 1, 1, 1, 1, '2023-11-19 02:05:57', '2023-11-19 02:09:14');");
    }
}
