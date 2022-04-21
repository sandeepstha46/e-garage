<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bookings;
use Illuminate\Http\Request;

class DashboardComponent extends Component
{
    public function render(Request $request)
    {
        $data = Bookings::orderBy('id')->where('status', 1)->get();
        return view('dashboard', compact('data'));
    }
}
