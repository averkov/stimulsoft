<?php

/**
 * Входное DTO метода обновления отчета
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\DTO;

use DRVAS\Stimulsoft\Domain\ValueObjects;

/**
 * Входное DTO метода обновления отчета
 *
 * Class UpdateReportRequestDTO
 * @package DRVAS\Stimulsoft\Application\DTO
 */
class UpdateReportRequest
{
    /**
     * @var ValueObjects\ReportId
     */
    private $id;

    /**
     * @var ValueObjects\ReportCode
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $config;

    /**
     * UpdateReportRequestDTO constructor.
     * @param ValueObjects\ReportId $id
     * @param ValueObjects\ReportCode $code
     * @param string $name
     * @param string $config
     */
    public function __construct(
        ValueObjects\ReportId $id,
        ValueObjects\ReportCode $code,
        string $name,
        string $config
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->config = $config;
    }

    /**
     * @return ValueObjects\ReportId
     */
    public function getId(): ValueObjects\ReportId
    {
        return $this->id;
    }

    /**
     * @return ValueObjects\ReportCode
     */
    public function getCode(): ValueObjects\ReportCode
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getConfig(): string
    {
        return $this->config;
    }
}
