<?php

/**
 * Исключение "Не смог найти отчет для обновления"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\Exceptions;

use DRVAS\Stimulsoft\Application\Enums;
use DRVAS\Stimulsoft\Domain\ValueObjects;
use Throwable;

/**
 * Исключение "Не смог найти отчет для обновления"
 *
 * Class CanNotFindReportForUpdate
 * @package DRVAS\Stimulsoft\Application\Exceptions
 */
class CanNotFindReportForUpdate extends Application
{
    /**
     * CanNotFindReportForUpdate constructor.
     * @param ValueObjects\ReportId $reportId
     * @param Throwable|null $previous
     */
    public function __construct(ValueObjects\ReportId $reportId, Throwable $previous = null)
    {
        parent::__construct(
            sprintf('Не найден отчёт с id %s, не могу выбполнить запрос на обновление', $reportId),
            Enums\ExceptionCode::CAN_NOT_FIND_REPORT_FOR_UPDATE(),
            $previous
        );
    }
}
