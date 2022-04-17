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

    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('livewire.admin.profile.edit_profile', compact('editData'));
    }

    public function ProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('images/upload_images/admin_images' . $data->profile_photo_path));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/upload_images/admin_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        return redirect()->route('admin.profile');
    }
}
