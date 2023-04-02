<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\user; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class TaskController extends Controller
{
    //
    public function showhome() 

    { 

        $user = Auth::user(); 
        
        $tasks = Task::where('user_id', $user->id)->orderBy('date', 'desc')->get(); // get all tasks where user_id equals the authenticated user's ID, ordered by date descending
        return view('tasks.index', compact('user'),['tasks' => $tasks]);
        
    } 

    public function completed_tasks() 

    { 

        $user = Auth::user(); 
        
        $tasks = Task::where('user_id', $user->id)
                ->where('completed', 1) // Tâches  terminées
                ->orderBy('date', 'desc')
                ->get(); 
                return view('tasks.completedTask', compact('user'),['tasks' => $tasks]);
        
    } 

    public function active_tasks() 

    { 

        $user = Auth::user(); // Get the currently authenticated user
        
        $tasks = Task::where('user_id', $user->id)
                ->where('completed', 0) // Tâches non terminées
                ->orderBy('date', 'desc')
                ->get(); 
                
    return view('tasks.activeTasks', compact('user'),['tasks' => $tasks]);
        
    } 



    public function edit($id){
        $user = Auth::user();
        $task=task::findOrFail($id);
        
        return view('tasks.edit', compact('user'),['task'=>$task]);
        
    }



    public function create(){


        $user = Auth::user(); // Get the currently authenticated user
        return view('tasks.create', compact('user'));
        
    }


    public function completeTask($id)
    {
        $task = Task::findOrFail($id);
        $task->completed = $task->completed == 0 ? 1 : 0;
        $task->save();
        return redirect()->back();
    }


    public function store(Request $request){
        //    validate
        $request->validate([
            'name'=>'required|max:255',
            
            'date'=>'required',
            
        ]);
        
        // store
        $user = Auth::user(); // Get the currently authenticated user
        $task=task::create([
           
            'name'=>$request->name,
            'user_id'=>$user->id,
            'date'=>$request->date,
            'Description'=>$request->Description,
            ]);

           

            // return response

            return back()->with('success','task saved ');
            }
    


        // delete

    public function destroy($id){
        task::findOrFail($id)->delete();
        return back()->with('success','task deleted');
    }

    // update

    public function update(Request $request,$id){
        //    validate
        $request->validate([
            'name'=>'required|max:255',
            'date'=>'required',
            
            
        ]);
        // get exit product
            $task=task::findOrFail($id);

        // store

          // Update the product attributes
            $task->name= $request->name;
            $task->date = $request->date;
           
            $task->Description = $request->Description;

    // Save the changes to the database
    $task->save();

    

    // Return a response
    return back()->with('success', 'task updated.');
}
}
