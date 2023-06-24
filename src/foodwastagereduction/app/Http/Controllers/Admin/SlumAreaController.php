<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlumArea;
use Illuminate\Http\Request;

class SlumAreaController extends Controller
{
    public function addslumarea()
    {
        return view('admin.addslumarea');
    }

    public function store(Request $request)
    {
        $slum_area = new SlumArea;
        $slum_area->name = $request->input('name');
        $slum_area->address = $request->input('address');
        $slum_area->save();
        return redirect()->route('admin.slumareas')->with('status', 'Slum Area Added Successfully!');
    }

    public function edit($id)
    {
        $slum_area = SlumArea::find($id);
        return view('admin.updateslumarea', compact('slum_area'));
    }

    public function update(Request $request, $id)
    {
        $slum_area = SlumArea::find($id);
        $slum_area->name = $request->input('name');
        $slum_area->address = $request->input('address');
        $slum_area->update();
        return redirect()->route('admin.slumareas')->with('status', 'Slum Area Updated Successfully!');
    }

    public function destroy($id)
    {
        $slum_area = SlumArea::find($id);
        $slum_area->delete();
        return redirect()->back()->with('status', 'Slum Area Deleted Successfully!');
    }
}
