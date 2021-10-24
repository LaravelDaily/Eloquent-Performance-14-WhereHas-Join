<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = Device::factory(100000)->make();
        $devices->chunk(500)->each(function($chunk) {
            Device::insert($chunk->toArray());
        });
    }
}
