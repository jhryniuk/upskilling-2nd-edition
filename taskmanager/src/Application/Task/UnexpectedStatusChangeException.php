<?php declare(strict_types=1);

namespace App\Application\Task;

class UnexpectedStatusChangeException extends \LogicException
{
    public static function createForClosedStatus()
    {
        return new self('Cannot change closed task status.');
    }
}
