<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->email = $request->input('email');
        if($request->input('password')) {
            $admin->password = Hash::make($request->input('password'));
        }
        $admin->update();
        return redirect()->route('admin.profile')->with('status', 'Profile Updated Successfully!');
    }
}
