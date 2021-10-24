<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class HomeController extends Controller
{
    public function index()
    {
        $times = Booking::query()
            ->whereHas('device.operating_system', function ($query) {
                $query->where('operating_systems.name', 'iOS');
            })
//            ->join('devices', 'bookings.device_id', '=', 'devices.id')
//            ->join('operating_systems', 'devices.operating_system_id', '=', 'operating_systems.id')
//            ->where('operating_systems.name', 'iOS')
            ->selectRaw('bookings.start_time, count(bookings.id) as bookings_count')
            ->groupBy('start_time')
            ->orderBy('bookings_count', 'desc')
            ->take(5)
            ->get();

        return view('dashboard', compact('times'));
    }
}
