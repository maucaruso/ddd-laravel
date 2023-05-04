<?php

namespace Domain\Task\DataTransferObjects;

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