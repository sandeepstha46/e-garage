<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bookings;
use App\Models\Products;
use Illuminate\Http\Request;

class DashboardComponent extends Component
{
    public function render(Request $request)
    {
        $data = Bookings::orderBy('id')->where('status', 1)->paginate(2);
        $product = Products::orderBy('id')->where('status', 1)->paginate(2);
        $daall = Bookings::all();
        return view('dashboard', compact('data', 'product','daall'));
    }
}
