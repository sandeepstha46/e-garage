<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Bookings;
use Illuminate\Http\Request;

class AdminDashboardComponent extends Component
{
    public function render(Request $request)
    {
        $data = Bookings::orderBy('id')->get();
        return view('dashboard', compact('data'));
    }
}
