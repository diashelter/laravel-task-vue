<?php

declare(strict_types=1);

namespace App\Task\Domain\Entity;

use DateTimeInterface;
use App\Task\Domain\Enums\StatusTask;

final class Task
{
    public function __construct(
        public readonly string $name,
        public readonly DateTimeInterface $createdAt,
        private StatusTask $status = StatusTask::Open,
    ) {
    }

    public function changeStatus(StatusTask $statusTask): void
    {
        $this->status = $statusTask;
    }

    public function getStatus(): StatusTask
    {
        return $this->status;
    }
}
