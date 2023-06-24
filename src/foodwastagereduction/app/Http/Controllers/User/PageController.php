<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\SlumArea;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }
    
    // public function login()
    // {
    //     return view('user.login');
    // }

    // public function register()
    // {
    //     return view('user.register');
    // }

    public function donate()
    {
        $slum_areas = SlumArea::all();
        return view('user.donate',compact('slum_areas'));
    }

    public function donations()
    {
        $donations = Donation::where('user_id', '=', Auth::guard('web')->user()->id)->get();
        $key=0;
        return view('user.donations', compact('donations','key'));
    }

    public function donationsingle($id)
    {
        $donation = Donation::find($id);
        return view('user.donation-single', compact('donation'));
    }

    public function updateprofile()
    {
        return view('user.updateprofile');
    }
}
