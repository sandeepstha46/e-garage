<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function ViewProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('livewire.admin.profile.view_profile', compact('user'));
        // return view('livewire.admin.profile.view_profile');
    }
}
