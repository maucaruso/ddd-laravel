<?php

namespace Domain\Task\Actions;

use Domain\Task\Dto\TaskDto;
use Domain\Task\Models\Task;

final class CreateTaskAction
{
  public function __invoke(TaskDto $taskDto): Task
  {
    return Task::create([
      'task' => $taskDto->task,
      'category' => $taskDto->category
    ]);
  }
}