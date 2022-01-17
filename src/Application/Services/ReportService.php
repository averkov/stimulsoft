<?php

/**
 * Сервис для работы с отчетами stimulsoft
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\Services;

use DRVAS\Stimulsoft\Application\DTO;
use DRVAS\Stimulsoft\Application\Exceptions;
use DRVAS\Stimulsoft\Domain\Entities;
use DRVAS\Stimulsoft\Domain\ValueObjects;
use DRVAS\Stimulsoft\Infrastructure;
use DRVAS\Stimulsoft\Infrastructure\Repository\ReportRepositoryInterface;
use Exception;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

/**
 * Сервис для работы с отчетами stimulsoft
 *
 * Class ReportService
 * @package DRVAS\Stimulsoft\Application\Services
 */
class ReportService
{
    /**
     * @var ReportRepositoryInterface
     */
    private $reportRepository;

    /**
     * ReportService constructor.
     * @param ReportRepositoryInterface $reportRepository
     */
    public function __construct(ReportRepositoryInterface $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }

    /**
     * @param ValueObjects\ReportId $reportId
     * @return Entities\Report|null
     */
    public function getReport(ValueObjects\ReportId $reportId)
    {
        return $this->reportRepository->findReport($reportId);
    }

    /**
     * @param DTO\PaginateReportsRequest $request
     * @return DTO\PaginateReportsResult
     */
    public function paginateReports(DTO\PaginateReportsRequest $request): DTO\PaginateReportsResult
    {
        $result = $this->reportRepository->paginateReports($request->getLimit(), $request->getOffset());

        return new DTO\PaginateReportsResult(
            $result->getReports(),
            $result->getPage(),
            $result->getLimit(),
            $result->getTotal()
        );
    }

    /**
     * @param DTO\UpdateReportRequest $reportDto
     * @return Entities\Report
     * @throws Exceptions\CanNotFindReportForUpdate
     * @throws Infrastructure\Exceptions\UpdateReportFailed
     */
    public function updateReport(DTO\UpdateReportRequest $reportDto): Entities\Report
    {
        $report = $this->reportRepository->findReport($reportDto->getId());

        if (empty($report)) {
            throw new Exceptions\CanNotFindReportForUpdate($reportDto->getId());
        }

        $report
            ->setCode($reportDto->getCode())
            ->setName($reportDto->getName())
            ->setConfig($reportDto->getConfig());

        $this->reportRepository->updateReport($report);

        return $report;
    }


    /**
     * @param DTO\StoreReportRequest $reportDto
     * @return Entities\Report
     * @throws Exception
     */
    public function storeReport(DTO\StoreReportRequest $reportDto): Entities\Report
    {
        $report = $this->makeReportEntity(
            $reportDto->getCode(),
            $reportDto->getTitle(),
            $reportDto->getContent()
        );

        $this->reportRepository->storeReport($report);

        return $report;
    }

    /**
     * @param ValueObjects\ReportId $reportId
     * @return bool
     * @throws Exceptions\CanNotFindReportForUpdate
     * @throws Infrastructure\Exceptions\DeleteReportFailed
     */
    public function deleteReport(ValueObjects\ReportId $reportId): bool
    {
        $report = $this->reportRepository->findReport($reportId);

        if (empty($report)) {
            throw new Exceptions\CanNotFindReportForUpdate($reportId);
        }

        return $this->reportRepository->deleteReport($report);
    }

    /**
     * @param ValueObjects\ReportCode $code
     * @param string $title
     * @param string $content
     * @return Entities\Report
     * @throws Exception
     */
    private function makeReportEntity(ValueObjects\ReportCode $code, string $title, string $content)
    {
        return new Entities\Report(
            new ValueObjects\ReportId(Uuid::uuid4()),
            $code,
            $title,
            $content,
            Carbon::now()
        );
    }
}
