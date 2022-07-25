<?php

declare(strict_types=1);

namespace App\Task\Domain\Enums;

enum StatusTask: int {
    case Completed = 1;
    case Open = 0;
}
