<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\TaskStatus;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'task',
        'category',
        'status'
    ];
    
    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value);
    }
}
