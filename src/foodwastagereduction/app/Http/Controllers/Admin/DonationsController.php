<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\SlumArea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DonationsController extends Controller
{
    public function create()
    {
        $slum_areas = SlumArea::all();
        $users = User::all();
        return view('admin.adddonation', compact('slum_areas','users'));
    }
    public function store(Request $request)
    {
        $donation = new Donation;
        $donation->name = $request->input('name');
        $donation->qty = $request->input('qty');
        $donation->user_id = $request->input('user_id'); 
        $donation->slum_area_id = $request->get('slum_area_id'); 
        $donation->status = $request->input('status');

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->img = $filename;
        }

        $donation->save();
        return redirect('/admin/donations')->with('status','Donation Added Successfully!');
    }

    public function update(Request $request, $id)
    {
        $donation = Donation::find($id);
        $donation->name = $request->input('name');
        $donation->qty = $request->input('qty');
        $donation->user_id = $request->input('user_id'); 
        $donation->slum_area_id = $request->get('slum_area_id'); 
        $donation->status = $request->input('status');

        if($request->hasFile('img'))
        {
            $destination = 'uploads/donations/'.$donation->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->img = $filename;
        }

        $donation->update();
        return redirect('/admin/donations')->with('status','Donation Updated Successfully!');
    }

    public function destroy($id)
    {
        $donation = Donation::find($id);
        $destination = 'uploads/donations/'.$donation->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $donation->delete();
        return redirect('/admin/donations')->with('status','Donation Deleted Successfully!');
    }
}
