<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUsersController extends Controller
{
    public function updateuser($id)
    {
        $user = User::find($id);
        return view('admin.updateuser',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->update();
        return redirect()->route('admin.users')->with('status', 'User Updated Successfully!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', 'User Deleted Successfully!');
    }
}
