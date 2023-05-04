<?php

namespace Domain\Task\Dto;

use App\Web\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TaskDto extends DataTransferObject
{
  public string $task;
  public string $category;
  
  public static function fromRequest(TaskRequest $taskRequest): TaskDto
  {
    return new Self([
      'task' => $taskRequest['task'],
      'category' => $taskRequest['category'],
    ]);
  }
}