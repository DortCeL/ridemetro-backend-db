<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class TaskService {
    public function createTask($name, $description, $type) {
        $task = [
            "name" => $name,
            "description" => $description,
            "type" => $type
        ];

        $tasks = Cache::get('tasks', []);
        array_push($tasks, $task);

        Cache::put('tasks', $tasks);
        return $tasks;
    }

    public function getTaskWithId($id){

    }
    public function getTasks() {
        $task1 = [
            "name"=> "Task Name",
            "description"=> "Task Description",
            "type"=> "Tast Type",
        ];

        $task2 = [
            "name"=> "Another task",
            "description"=> "Some random desc",
            "type"=> "baler task",
        ];
        
        return [$task1, $task2];
    }

    public function deleteTask($id) {

    }
}