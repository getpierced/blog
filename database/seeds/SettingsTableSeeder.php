<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => "Laravel's Blog",
            'address' => "Dallas, Texas",
            'contact_number' => "18008008000",
            'contact_email' => "info@wahteverblog.com",
        ]);
    }
}
