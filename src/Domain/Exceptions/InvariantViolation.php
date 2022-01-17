<?php

/**
 * Исключение "Нарушение инварианта"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\Exceptions;

use DRVAS\Stimulsoft\Domain\Enums;
use Throwable;

/**
 * Исключение "Нарушение инварианта"
 *
 * Class InvariantViolation
 * @package DRVAS\Stimulsoft\Domain\Exceptions
 */
class InvariantViolation extends Domain
{
    /**
     * InvariantViolation constructor.
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct(string $message, Throwable $previous = null)
    {
        parent::__construct(
            $message,
            Enums\ExceptionCode::INVARIANT_VIOLATION(),
            $previous
        );
    }
}
