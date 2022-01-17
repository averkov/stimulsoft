<?php

/**
 * Коды исключений infrastructure уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\Enums;

use Drvas\Enum\Enum;

/**
 * Коды исключений infrastructure уровня
 *
 * @package DRVAS\Stimulsoft\Infrastructure\Enums
 * @method static UPDATE_REPORT_FAILED
 * @method static DELETE_REPORT_FAILED
 */
class ExceptionCode extends Enum
{
    /** Обновление отчета не удалось */
    const UPDATE_REPORT_FAILED = 3000;
    /** Удаление отчета не удалось */
    const DELETE_REPORT_FAILED = 3001;
}
