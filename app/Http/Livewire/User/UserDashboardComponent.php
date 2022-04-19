<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Bookings;
use Illuminate\Http\Request;

class UserDashboardComponent extends Component
{
    public function render(Request $request)
    {
        $data = Bookings::orderBy('id')->get();
        return view('livewire.user.user_dashboard', compact('data'));
    }
}
