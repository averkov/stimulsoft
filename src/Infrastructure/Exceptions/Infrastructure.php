<?php

/**
 * Базовый класс исключений infrastructure уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\Exceptions;

use DRVAS\Stimulsoft\Infrastructure\Enums;
use Exception;
use Throwable;

/**
 * Базовый класс исключений infrastructure уровня
 *
 * Class Infrastructure
 * @package DRVAS\Stimulsoft\Infrastructure\Exceptions
 */
abstract class Infrastructure extends Exception
{
    /**
     * @param string $message
     * @param Enums\ExceptionCode $code
     * @param Throwable | null $previous
     */
    public function __construct(string $message, Enums\ExceptionCode $code, Throwable $previous = null)
    {
        parent::__construct($message, $code->getValue(), $previous);
    }
}
