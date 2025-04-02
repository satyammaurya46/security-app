<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function create()
    {
        return view('designation.add_designation');
    }

    public function index()
    {
        $designation_list=Designation::get();
        return view('designation.designation_list',compact('designation_list'));
    }

    public function store(Request $request)
    
    {

        //  dd($request->all());
       $designation=new Designation();
       $designation->designation_category=$request->designation_category;
       $designation->date=date('Y-m-d H:i:s');
       $designation->save();

       return redirect()->route('designation-list');
    }
     
    public function edit($id)
    {
        $designation=Designation::find($id);
        return view('designation.update_designation',compact('designation'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'designation_category' => 'required|string|max:255',
    ]);

    $designation = Designation::findOrFail($id);
    $designation->designation_category = $request->designation_category;
    $designation->save();

    return redirect()->route('designation-list', $id)->with('success', 'Designation updated successfully!');
}



    public function delete($id)
    {
        $designation=Designation::find($id);
        $designation->delete();

        return redirect()->back()->with('success','Designation deleted successfully!');
    }

   

}
