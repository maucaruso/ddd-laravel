<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\Dto\TaskDto;
use Domain\Task\Models\Task;

class TaskController extends Controller
{
  public function index()
  {
    $tasks = Task::all();
    
    return view('welcome', compact('tasks'));
  }
  
  public function store(TaskRequest $taskRequest, CreateTaskAction $createTaskAction)
  {
    $taskDto = TaskDto::fromRequest($taskRequest);
    
    $createTaskAction($taskDto);
    
    return back()->with(['success' => 'Tarefa criada com sucesso']);
  }
}