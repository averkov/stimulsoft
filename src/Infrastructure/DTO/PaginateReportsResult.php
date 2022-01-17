<?php

/**
 * Входное DTO метода пагинации отчетов
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Infrastructure\DTO;

use DRVAS\Stimulsoft\Domain\Entities;

/**
 * Входное DTO метода пагинации отчетов
 *
 * Class PaginateReportsResult
 * @package DRVAS\Stimulsoft\Infrastructure\DTO
 */
class PaginateReportsResult
{
    /**
     * @var Entities\Report[]
     */
    private $reports;
    /**
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $limit;
    /**
     * @var int
     */
    private $total;

    /**
     * PaginateReportsResult constructor.
     * @param Entities\Report[] $reports
     * @param int $page
     * @param int $limit
     * @param int $total
     */
    public function __construct(array $reports, int $page, int $limit, int $total)
    {
        $this->reports = $reports;
        $this->page = $page;
        $this->limit = $limit;
        $this->total = $total;
    }

    /**
     * @return Entities\Report[]
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}
