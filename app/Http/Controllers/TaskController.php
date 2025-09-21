<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\TaskResource;
use App\Models\Category;
use App\Models\Task;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    use ApiResponseTrait;
    public function index(){
        $tasks=Task::query()->paginate(20);

        return $this->sendResponse(TaskResource::collection($tasks),'retrieved success');

    }
    public function task($id){

        $task=Task::find($id);
        if(! $task){
            $this->sendError('not found');

        }
        return $this->sendResponse(new TaskResource($task),'retrieve one task  success');

    }
    public function create(TaskRequest $request){

       $task= Task::query()->create($request->validated());

        return  $task?$this->sendResponse($task,'created success'):$this->sendError('creation failed');


    }
    public function toggle($id){
        $task=Task::find($id);
        if(! $task){
            $this->sendError('not found');

        }
        $task->completed=!$task->completed;
        $task->save();

        return $this->sendResponse(new TaskResource($task), ' toggled successfully');



    }
    public function category(){
        $categories=Category::with('task')->paginate(20);

        return $this->sendResponse($categories,'retrieved success');

    }
}
