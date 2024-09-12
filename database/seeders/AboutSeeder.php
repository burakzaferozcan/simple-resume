<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        About::create([
            "name" => "burak zafer özcan",
            "phone_number" => "5555555555",
            "email" => "ozcanburakzafer@gmail.com",
            "website" => "https://burakzaferozcan.vercel.app/",
            "address" => "kocaeli türkiye",
        ]);
    }
}
