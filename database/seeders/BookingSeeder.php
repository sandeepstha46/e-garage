<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bookings;
use Illuminate\Support\Facades\Storage;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/json/bookings.json');
        $bookings = json_decode($json, true);

        foreach ($bookings as $booking) {
            Bookings::query()->updateOrCreate([
                'name' => $booking['name'],
                'email' => $booking['email'],
                'status' => $booking['status'],
                'type' => $booking['type'],
                'phone' => $booking['phone'],
                'vehicle' => $booking['vehicle'],
                'rank' => $booking['rank'],
                'urgent' => $booking['urgent'],
                'textarea' => $booking['textarea'],
                'u_id' => $booking['u_id'],
            ]);
        }
    }
}
