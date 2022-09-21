<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Requests;
use App\Models\Bookings;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardComponent extends Component
{
    public function render(Request $request)
    {
        if (Auth::user()->utype === 'ADM') {
            $user = User::all()->where('status', '>', 1);
            // urgent data send to view
            $data = Bookings::orderBy('id')->where('rank', '>', 0)->whereDate('created_at', today())->where('urgent', '>', 0)->paginate(5, ["*"], 'data');
            $product = Products::orderBy('id')->where('status', '>', 0)->paginate(3, ["*"], 'product');
            $daall = Bookings::all()->where('rank', '>', 0);
            $req = Requests::all()->where('status', '>', 0);
            return view('dashboard', compact('data', 'product', 'daall', 'user', 'req'));
        } else {
            $data = Bookings::orderBy('id')->whereUId(Auth::id())->where('rank', '>', 0)->paginate(2);
            $product = Products::orderBy('id')->where('status', '>', 0)->paginate(2);
            $daall = Bookings::all()->where('rank', '>', 0);
            return view('dashboard', compact('data', 'product', 'daall'));
        }
    }
}
