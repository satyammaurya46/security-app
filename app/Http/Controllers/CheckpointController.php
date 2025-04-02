<?php

namespace App\Http\Controllers;

use App\Models\Checkpoint;
use Illuminate\Http\Request;
use Psy\VersionUpdater\Checker;

class CheckpointController extends Controller
{
    public function create()
    {
        return view('checkpoints.add_checkpoints');
    }

    public function store(Request $request )
    {
            // dd($request->all());
           $checkpoint = new Checkpoint();
           $checkpoint->society_name=$request->society_name;
           $checkpoint->checkpoint_name=$request->checkpoint_name;
           $checkpoint->location=$request->location;
           $checkpoint->save();

           return redirect()->route('checkpoint-list');
    }

    public function index()
    {
        $checkpoint = Checkpoint::get();
        return view('checkpoints.checkpoints_list',compact('checkpoint'));
    }

    public function edit($id)
    {
       $checkpoint = Checkpoint::find($id);
        return view('checkpoints.update_checkpoint',compact('checkpoint'));
    }

    public function update(Request $request , $id)
    {
          $checkpoint = Checkpoint::findOrFail($id);
          $checkpoint->update($request->all());

          return redirect()->route('checkpoint-list')->with('success', 'Guard updated successfully.');
    }

    public function delete($id)
    {
        $checkpoint = Checkpoint::find($id);
        $checkpoint->delete();

        return redirect()->back()->with('success', 'Checkpoint deleted successfully');
    }
}
