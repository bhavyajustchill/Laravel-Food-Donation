<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Auth;

class MyDonationsController extends Controller
{
    public function store(Request $request)
    {
        $donation = new Donation;
        $donation->name = $request->input('name');
        $donation->qty = $request->input('qty');
        $donation->user_id = Auth::guard('web')->user()->id; 
        $donation->slum_area_id = $request->get('slum_area_id'); 
        $donation->status = "Pending";
        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/donations/', $filename);
            $donation->img = $filename;
        }

        $donation->save();
        return redirect('/donations')->with('status','Donation Added Successfully!');
    }
}
