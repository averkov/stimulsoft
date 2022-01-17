<?php

/**
 * Исключение "Обновление отчета не удалось"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\Exceptions;

use DRVAS\Stimulsoft\Infrastructure\Enums;
use DRVAS\Stimulsoft\Domain\ValueObjects;
use Throwable;

/**
 * Исключение "Обновление отчета не удалось"
 *
 * Class UpdateReportFailed
 * @package DRVAS\Stimulsoft\Infrastructure\Exceptions
 */
class UpdateReportFailed extends Infrastructure
{
    /**
     * UpdateReportFailed constructor.
     * @param ValueObjects\ReportId $reportId
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct(ValueObjects\ReportId $reportId, string $message, Throwable $previous = null)
    {
        parent::__construct(
            sprintf('Не удалось обновить отчёт с id %s: %s', $reportId, $message),
            Enums\ExceptionCode::UPDATE_REPORT_FAILED(),
            $previous
        );
    }
}
