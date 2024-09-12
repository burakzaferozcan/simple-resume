<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Experience::create([
            "job_start" => "2020-01-01",
            "job_finish" => "2020-12-01",
            "company_name" => "Fabrikod",
            "job_description" => "Software Developer",
        ]);
    }
}
