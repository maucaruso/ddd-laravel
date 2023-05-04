<?php

namespace Domain\Task\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'task',
        'category'
    ];
}
