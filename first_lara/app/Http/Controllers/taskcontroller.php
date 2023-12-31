<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    //
    function createnewtask(Request $request)
    {
        //validate inputs - use a validate method
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'iscomplete' => 'required'
        ]);

        //create a variable task using the task model class
        //to store our request details
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'iscomplete' => $request->iscomplete
        ]);

        //check if the record has been successfully added to the db
        $task = Task::find($task->id);
        //operation success the response is the  db message + added task
        if ($task) {
            return response()->json($task);
        }
        //operation failure is the db access message + a task message
        else {
            return response("Task not created");
        }
    }

    //similar function that adds a task same to the above function
    function addnewtask(Request $request)
    {
        //request validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'iscomplete' => 'required'
        ]);

        //create a variable task using the task model class
        //to receive the request details
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'iscomplete' => $request->iscomplete
        ]);

        //check to see if the task has been added successfully
        $task = Task::find($task->id);
        if ($task) {
            //response contains the db access message + the added task
            return response()->json($task);
        }
        //response is the db access message + task creation failure message
        else {
            return response("Task not created");
        }
    }

    //this function reads all the tasks in the db
    function readalltasks()
    {
        //the all method gets all the records in the table and store them in tasks
        $tasks = Task::all();

        //check to see if there is something retrieved and returning the response
        if ($tasks) {
            //response is a db access message + all the tasks in the db
            return response()->json($tasks);
        } else {
            //response is a db access message + a task message
            return response("No tasks found");
        }
    }

    function readatask(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $task = Task::find($request->id);

        if ($task) {
            return response()->json($task);
        } else {
            return response("No such task exists");
        }
    }



    function updatetask(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $task = Task::find($request->id);

        if ($task) {
            $task->iscomplete = true;
            $task->save();

            return response()->json($task);
        }
        else
        {
            return response("No such task exists");
        }
    }

    function deletetask(Request $request) {
        //validation of the request details
        $request->validate([
            'id'=>'required'
        ]);

        //get the record to delete and store it in task
        $task = Task::find($request->id);

        //check to see if the task exists
        if($task){
            //create a separate variable to store the task to delete just to show the user what has been deleted
            $deletedtask = $task;
            $task->delete();
            return response()->json($deletedtask);
        }
        else {
            return response("Delete unsuccessful, no such task exists");
        }
    }
}