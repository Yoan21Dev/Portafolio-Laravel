<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Course;
use App\Models\Skill;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create();
        Course::factory(10)->create();
        Skill::factory(10)->create();
        Experience::factory(10)->create();
    }
}
