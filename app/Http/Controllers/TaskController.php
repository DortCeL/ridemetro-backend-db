<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $taskService;

    // dependency injection
    public function __construct(TaskService $taskService){
        $this->taskService = $taskService;
    }

    
    // methods
    public function getTasks(Request $request) {
       $tasks = $this->taskService->getTasks();
       return $tasks;
    }

    public function getTaskWithId($id){
        return "Task id : $id";
    }

    public function createTask(Request $request) {
        $name = $request->input("name");
        $description = $request->input("description");
        $type = $request->input("type");

        // validation
        $validated = $request->validate([
            "name" => "required"
        ]);

        $res = $this->taskService->createTask($name, $description, $type);

        return response($res, 201);
            // ->header('content-type', 'application/json');
        
    }


    public function deleteTask(int $id) {
        return "Task $id deleted";
    }
    

}