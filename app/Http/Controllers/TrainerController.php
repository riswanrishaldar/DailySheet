<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index(){
        $trainer = Trainer::all();
        return view('trainers.index',compact('trainer'));
    }
    public function create(){
        return view('trainers.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
           
        ]);

       
        $trainer = new Trainer();
        $trainer->name = $request->name;
        $trainer->designation = $request->designation;
        $trainer->department = $request->department;
        $trainer->save();
        return redirect()->route('all.trainers');
    }

    Public function edit($id){

        $trainer = Trainer::find($id);

        return view('trainers.edit', compact('trainer'));
    }
    public function update(Request $request, $id)
  {
      $request->validate([
          'name' => 'required',
          'department' => 'required',
          'designation' => 'required',
      ]);

      $trainer = Trainer::find($id);
      $trainer->name = $request->name;
    $trainer->department = $request->department;
    $trainer->designation = $request->designation;
    $trainer->save();

      return redirect()->route('all.trainers')
          ->with('success', 'Task updated successfully');
  }
  public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();

        return redirect()->route('all.trainers')
            ->with('success', 'Task deleted successfully');
    }
}
