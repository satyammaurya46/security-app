<?php

namespace App\Http\Controllers;

use App\Models\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    public function index()
    {
        $society_list=society::get();
        return view('society.society_list',compact('society_list'));
    }
    public function create()
    {
        return view('society.add_society');
    }
    public function store(Request $req)
    {
        // dd($req->all());

        $society=new society();
        $society->society_name=$req->society_name;
        $society->address=$req->address;
        $society->user_name=$req->user_name;
        $society->society_type=$req->society_type;
        $society->designation=$req->designation;
        $society->mobile=$req->mobile;
        $society->email=$req->email;
        $society->password=$req->password;
        $society->status=1;
        $society->date=date('Y-m-d H:i:s');
        $society->save();

        return redirect()->route('society-list');
    }

     // Show Edit Form
     public function edit($id)
     {
         $society = Society::find($id);
         return view('society.update_society', compact('society'));
     }

      // Update Society
      public function update(Request $request, $id)
      {
        $request->validate([
            'society_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'designation' => 'required|string',
            'mobile' => 'required|numeric|digits_between:10,15',
            
        ]);           

            // Find the record and update it
        $society = Society::findOrFail($id);
        $society->update($request->all());

        return redirect()->route('society-list')->with('success', 'Guard updated successfully.');
      }
      
    
    public function delete($id)
    {
        $society = Society::find($id);
        $society->delete();

        return redirect()->back()->with('success', 'Society deleted successfully!');
    }
}
