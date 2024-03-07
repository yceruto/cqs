<?php

namespace OpenSolid\Cqs\Command\Error;

use OpenSolid\Cqs\Command\Command;

final class NoHandlerForCommand extends \LogicException
{
    public static function create(Command $command, \Throwable $previous = null, int $code = 0): self
    {
        return new self(sprintf('No handler for command "%s".', get_class($command)), $code, $previous);
    }
}
