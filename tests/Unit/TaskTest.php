<?php

declare(strict_types=1);

use App\Task\Domain\Entity\Task;
use App\Task\Domain\Enums\StatusTask;

test('Deve conseguir criar uma task', function () {
    $dateTimeCreatAtTask = new DateTimeImmutable();
    $task = new Task('Task init', $dateTimeCreatAtTask);
    expect($task)->toBeInstanceOf(Task::class);
    expect($task->name)->toBeString();
    expect($task->createdAt)->toBe($dateTimeCreatAtTask);
    expect($task->getStatus())->toBe(StatusTask::Open);
});

test('Deve alterar o status de uma Task para completed', function () {
    $task = new Task('Task to change', new DateTimeImmutable());
    $task->changeStatus(StatusTask::Completed);
    expect($task->getStatus())->toBe(StatusTask::Completed);
});
