<?php

/**
 * Исключение "Удаление отчета не удалось"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\Exceptions;

use DRVAS\Stimulsoft\Infrastructure\Enums;
use DRVAS\Stimulsoft\Domain\ValueObjects;
use Throwable;

/**
 *
 * Исключение "Удаление отчета не удалось"
 *
 * Class DeleteReportFailed
 * @package DRVAS\Stimulsoft\Infrastructure\Exceptions
 */
class DeleteReportFailed extends Infrastructure
{
    /**
     * DeleteReportFailed constructor.
     * @param ValueObjects\ReportId $reportId
     * @param string $message
     * @param Throwable|null $previous
     */
    public function __construct(ValueObjects\ReportId $reportId, string $message, Throwable $previous = null)
    {
        parent::__construct(
            sprintf('Не удалось удалить отчёт с id %s: %s', $reportId, $message),
            Enums\ExceptionCode::DELETE_REPORT_FAILED(),
            $previous
        );
    }
}
