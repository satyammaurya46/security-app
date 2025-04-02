<?php

namespace App\Http\Controllers;

use App\Models\Guards;
// use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuardController extends Controller
{
    public function create()
    {
        return view('guard.add_guard');
    }

    public function index()
    {
        $guard_list=Guards::get();
        return view('guard.guard_list', compact('guard_list'));
    }

    
    public function store(Request $request)
    {
        
        //   dd($request->all());
        $guard= new Guards();
        $guard->society=$request->society;
        $guard->designation_category=$request->designation_category;
        $guard->name=$request->name;
        $guard->email=$request->email;
        $guard->number=$request->number;
       // Handle Aadhar Card Upload
     if ($request->hasFile('aadhar_card')) {
        $aadharPath = $request->file('aadhar_card')->store('uploads/aadhar_cards', 'public');
        $guard->aadhar_card = $aadharPath;
       }

         // Handle PAN Card Upload
      if ($request->hasFile('pan_card')) {
        $panPath = $request->file('pan_card')->store('uploads/pan_cards', 'public');
        $guard->pan_card = $panPath;
      }
        $guard->password = $request->password;
        $guard->police_verification = $request->has('police_verification') ? 1 : 0; // Handle checkbox
        $guard->status=1;
        $guard->save();

        return redirect()->route('guard-list');
    }

    public function delete($id)
    {
        $guard = Guards::find($id);
        $guard->delete();

        return redirect()->back()->with('success', 'Society deleted successfully!');
    }

    public function edit($id)
    {
        $guard = Guards::find($id); 
        return view('guard.update_guard',compact('guard'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'society' => 'required|string',
            'designation_category' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:guards,email,' . $id,
            'number' => 'required|string|max:15',
            'aadhar_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pan_card' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'police_verification' => 'nullable|boolean',
        ]);

        $guard = Guards::findOrFail($id);
        $guard->society = $request->society;
        $guard->designation_category = $request->designation_category;
        $guard->name = $request->name;
        $guard->email = $request->email;
        $guard->number = $request->number;
        $guard->police_verification = $request->has('police_verification') ? 1 : 0;

        // Handle Aadhar Card Upload
        if ($request->hasFile('aadhar_card')) {
            $aadharPath = $request->file('aadhar_card')->store('uploads/aadhar_cards', 'public');
            $guard->aadhar_card = $aadharPath;
        }

        // Handle PAN Card Upload
        if ($request->hasFile('pan_card')) {
            $panPath = $request->file('pan_card')->store('uploads/pan_cards', 'public');
            $guard->pan_card = $panPath;
        }

        $guard->save();

        return redirect()->route('guard-list')->with('success', 'Guard updated successfully.');
    }

    public function attendence()
    {
        return view('guard.attendence');
    }


}