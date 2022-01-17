<?php

/**
 * Базовый класс исключений app уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\Exceptions;

use DRVAS\Stimulsoft\Application\Enums;
use Exception;
use Throwable;

/**
 * Базовый класс исключений app уровня
 *
 * Class ApplicationException
 * @package DRVAS\Stimulsoft\Application\Exceptions
 */
abstract class Application extends Exception
{
    /**
     * Application constructor.
     * @param string $message
     * @param Enums\ExceptionCode $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message, Enums\ExceptionCode $code, Throwable $previous = null)
    {
        parent::__construct($message, $code->getValue(), $previous);
    }
}
