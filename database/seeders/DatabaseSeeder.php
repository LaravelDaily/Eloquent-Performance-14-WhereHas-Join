<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(OperatingSystemSeeder::class);
        $this->call(DeviceSeeder::class);

        for ($i = 1; $i <= 50; $i++) {
            $this->call(BookingSeeder::class);
        }
    }
}
