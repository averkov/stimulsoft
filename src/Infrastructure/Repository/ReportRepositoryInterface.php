<?php

/**
 * Интерфейс репозитория отчетов
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\Repository;

use DRVAS\Stimulsoft\Domain\Entities;
use DRVAS\Stimulsoft\Domain\ValueObjects;
use DRVAS\Stimulsoft\Infrastructure\DTO;
use DRVAS\Stimulsoft\Infrastructure\Exceptions;

/**
 * Интерфейс репозитория отчетов
 *
 * Interface ReportRepositoryInterface
 * @package DRVAS\Stimulsoft\Infrastructure\Repository
 */
interface ReportRepositoryInterface
{
    /**
     * @param ValueObjects\ReportId $id
     * @return Entities\Report | null
     */
    public function findReport(ValueObjects\ReportId $id);

    /**
     * @param int $limit
     * @param int $page
     * @return DTO\PaginateReportsResult
     */
    public function paginateReports(int $limit, int $page): DTO\PaginateReportsResult;

    /**
     * @param Entities\Report $report
     * @return Entities\Report
     */
    public function storeReport(Entities\Report $report): Entities\Report;

    /**
     * @param Entities\Report $report
     * @return Entities\Report
     * @throws Exceptions\UpdateReportFailed
     */
    public function updateReport(Entities\Report $report): Entities\Report;

    /**
     * @param Entities\Report $report
     * @return bool
     * @throws Exceptions\DeleteReportFailed
     */
    public function deleteReport(Entities\Report $report): bool;
}
