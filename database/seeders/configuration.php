<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class configuration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('configuration')->insert([
            'logo' => Str::random(10),
            'favicon'=> Str::random(10),
            'title' => Str::random(10),
            'logo_alternative_text' => Str::random(10),
            'contact_email' => Str::random(10),
            'sales_email' => Str::random(10),
            'service_email' => Str::random(10),
            'contact_number' => Str::random(10),
            'address' => Str::random(10),
            'facebook_page_link' => Str::random(10),
            'instagram_page_link' => Str::random(10),
            'meta_title' => Str::random(10),
            'meta_description' => Str::random(10),
            'meta_keywords' => Str::random(10),
        ]);
    }
}
