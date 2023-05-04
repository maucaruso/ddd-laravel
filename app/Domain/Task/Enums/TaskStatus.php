<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class TaskStatus extends Enum
{
  private const COMPLETE = 'complete';
  private const IMCOMPLETE = 'imcomplete';
  
  public static function status($value): string
  {
    switch($value) {
      case self::COMPLETE:
        return 'line-through';
      case self::IMCOMPLETE:
        return 'none';
      default:
        return 'none';
    }
  }
}