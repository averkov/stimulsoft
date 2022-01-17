<?php

/**
 * Коды исключений app уровня
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\Enums;

use Drvas\Enum\Enum;

/**
 * Коды исключений app уровня
 *
 * @package DRVAS\Stimulsoft\Application\Enums
 * @method static CAN_NOT_FIND_REPORT_FOR_UPDATE
 */
class ExceptionCode extends Enum
{
    /** Не смог найти отчет для обновления */
    const CAN_NOT_FIND_REPORT_FOR_UPDATE = 1000;
}
