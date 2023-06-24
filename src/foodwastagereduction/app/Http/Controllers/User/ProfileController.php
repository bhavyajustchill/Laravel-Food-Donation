<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->address = $request->input('address');
        $user->email = $request->input('email');
        if($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->update();
        return redirect()->route('user.profile')->with('status', 'Profile Updated Successfully!');
    }
}
