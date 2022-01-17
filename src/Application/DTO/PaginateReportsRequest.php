<?php

/**
 * Входное DTO метода пагинации отчетов
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\DTO;

/**
 * Входное DTO метода пагинации отчетов
 *
 * Class PaginateReportsRequestDTO
 * @package DRVAS\Stimulsoft\Application\DTO
 */
class PaginateReportsRequest
{
    /**
     * @var int
     */
    private $limit;
    /**
     * @var int
     */
    private $offset;

    /**
     * PaginateReportsRequestDTO constructor.
     * @param int $limit
     * @param int $offset
     */
    public function __construct(int $limit, int $offset)
    {
        $this->limit = $limit;
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
}
