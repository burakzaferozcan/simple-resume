<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Education::create([
            "start_edu" => "2013-01-09",
            "end_edu" => "2017-01-09",
            "school_name" => "GFCAL",
            "school_description" => "Eşit Ağırlık",
        ]);
        Education::create([
            "start_edu" => "2017-01-09",
            "end_edu" => "2019-01-09",
            "school_name" => "KOU",
            "school_description" => "Bilgisayar Programcılığı",
        ]);

    }
}
