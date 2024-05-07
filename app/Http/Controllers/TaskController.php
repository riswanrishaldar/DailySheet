<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function create($id){
       
        $trainer = Trainer::find($id);
        return view('task.add',compact('trainer'));

    }
    public function store(Request $request){
     
       
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'id' => 'required|string|max:255',
            'chat_count' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'call' => 'required|string|max:255',
            'call_connected' => 'required|string|max:255',
            'task_assigned' => 'required|string|max:255',
            'webinar' => 'required|string|max:255',
            'live_class' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'self_learning' => 'required|string|max:255',

        ]);

       
        $task = new Task();
        $task->name = $request->name;
        $task->date = $request->date;
        $task->id= $request->id;
        $task->chat_count= $request->chat_count;
        $task->batch= $request->batch;
        $task->call= $request->call;
        $task->call_connected= $request->call_connected;
        $task->task_assigned= $request->task_assigned;
        $task->webinar= $request->webinar;
        $task->live_class= $request->live_class;
        $task->status= $request->status;
        $task->self_learning= $request->self_learning;
        

        
        $task->save();
        return redirect()->route('all.trainers');
    }

    public function trainerTask($id){

        $trainer = Trainer::find($id);
        return view('task.trainertask',compact('trainer'));
    }

    public function taskFilter(Request $request){
    
    $date = $request->input('date');
    $task_id = $request->input('id');

    // Convert the date to Carbon instance for easier handling
    $date = Carbon::parse($date);

    // Query posts filtered by the given date
    $task = Task::whereDate('date', $date)->where('id', $task_id)->get();
     
    return view('task.filter', compact('task'));

}

  public function allReport(){

    $task = Task::all();
    return view('task.allreport',compact('task'));
  }

  public function taskallFilter(Request $request){

    $date = $request->input('date');
    

    // Convert the date to Carbon instance for easier handling
    $date = Carbon::parse($date);

    // Query posts filtered by the given date
    $task = Task::whereDate('date', $date)->get();
     
    return view('task.allfilter', compact('task'));
  }

  
}