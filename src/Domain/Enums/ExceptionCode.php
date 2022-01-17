<?php

/**
 * Коды исключений domain уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\Enums;

use Drvas\Enum\Enum;

/**
 * Коды исключений domain уровня
 *
 * Class ExceptionCode
 * @package DRVAS\Stimulsoft\Domain\Enums
 * @method static INVARIANT_VIOLATION
 */
class ExceptionCode extends Enum
{
    /** Нарушение инвариантов */
    const INVARIANT_VIOLATION = 2000;
}
