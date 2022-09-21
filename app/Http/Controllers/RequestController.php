<?php

namespace App\Http\Controllers;

use App\Mail\addRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function ViewRequest()
    {
        if (Auth::user()->utype === 'ADM') {
            $data = Requests::orderBy('id', 'asc')->where('status', '>', 0)->paginate(5);
            return view('request.view-request', compact('data'));
        } else {
            $data = Requests::orderBy('id', 'asc')->whereUId(Auth::id())->where('status', '>', 0)->paginate(5);
            return view('request.view-request', compact('data'));
        }
    }

    public function AddRequest()
    {
        $user = User::find(Auth::user()->id);
        return view('request.add-request', compact('user'));
    }

    public function NewRequest(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'for' => 'required',
            'model' => 'required',
            'manufacturing' => 'required',
        ]);
        $data = new Requests;
        $data->name = $request->name;
        $data->for = $request->for;
        $data->model = $request->model;
        $data->manufacturing = $request->manufacturing;
        $data->textarea = $request->textarea;
        $data->u_id = Auth::user()->id;

        if ($data->save()) {
            Mail::to(Auth::user()->email)->send(new addRequest($data));
            return redirect('request/view')->with('success', 'New Request Added Successful');
        } else {
            return redirect('request/view')->with('errors', 'Some Error Occured');
        }
    }

    public function EditRequest($id)
    {
        $editData = Requests::where('id', $id)->first();
        return view('request.edit-request', compact('editData'));
    }

    public function UpdateRequest(Request $request, $id)
    {
        $editData = Requests::findOrFail($id);
        $editData->name = $request->name;
        $editData->for = $request->for;
        $editData->model = $request->model;
        $editData->manufacturing = $request->manufacturing;
        $editData->textarea = $request->textarea;

        if ($editData->save()) {
            return redirect('request/view')->with('success', 'Request Updated Successfully');
        } else {
            return redirect('request/edit')->with('errors', 'Some error occured');
        }
    }

    public function DeleteRequest($id)
    {
        $data = Requests::findOrFail($id);
        $data->status = 0;
        $result = $data->save();

        $data = Requests::orderBy('id', 'asc')->where('status', 1)->get();
        if ($result) {
            return redirect('request/view')->with('success', 'Request Deleted Successfully');
        } else {
            return redirect('request/edit')->with('errors', ' Sorry Some Error Occured');
        }
    }
}
