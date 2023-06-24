<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlumArea;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $userCount = count(User::all());
        $donations = Donation::all();
        $donationsDoneCount = count(Donation::where('status','=','Donated')->get());
        $donationsPendingCount = count(Donation::where('status','=','Pending')->get());
        $donationsInTransitCount = count(Donation::where('status','=','In Transit')->get());
        $pieChartData = [$donationsDoneCount, $donationsInTransitCount, $donationsPendingCount];
        return view('admin.index',compact('userCount','donations','donationsDoneCount','donationsPendingCount','donationsInTransitCount'))->with('pieChartData',$pieChartData);
    }

    public function demodashboard()
    {
        return view('admin.demo-dashboard');
    }

    public function blank()
    {
        return view('admin.blank');
    }

    // public function oldlogin()
    // {
    //     return view('admin.login_old');
    // }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function donations()
    {
        $donations = Donation::all();
        return view('admin.donations', compact('donations'));
    }

    public function slumareas()
    {
        $slum_areas = SlumArea::all();
        return view('admin.slumareas', compact('slum_areas'));
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updatedonation($id)
    {
        $donation = Donation::find($id);
        $slum_areas = SlumArea::all();
        $users = User::all();
        return view('admin.updatedonation',compact('donation','slum_areas','users'));
    }

    public function updateuser()
    {
        return view('admin.updateuser');
    }

}
