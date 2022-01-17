<?php

/**
 * Базовый класс исключений domain уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\Exceptions;

use DRVAS\Stimulsoft\Domain\Enums;
use Exception;
use Throwable;

/**
 * Базовый класс исключений domain уровня
 *
 * Class Domain
 * @package DRVAS\Stimulsoft\Domain\Exceptions
 */
abstract class Domain extends Exception
{
    /**
     * Domain constructor.
     * @param string $message
     * @param Enums\ExceptionCode $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message, Enums\ExceptionCode $code, Throwable $previous = null)
    {
        parent::__construct($message, $code->getValue(), $previous);
    }
}
