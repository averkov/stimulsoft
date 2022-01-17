<?php

/**
 * Класс сущности отчета stimulsoft
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\Entities;

use Carbon\Carbon;
use DRVAS\Stimulsoft\Domain\ValueObjects;

/**
 * Класс сущности отчета stimulsoft
 *
 * Class Report
 * @package DRVAS\Stimulsoft\Domain\Entities
 */
class Report
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
     * @var Carbon
     */
    private $createdAt;

    /**
     * @param ValueObjects\ReportId $id
     * @param ValueObjects\ReportCode $code
     * @param string $name
     * @param string $config
     * @param Carbon $createdAt
     */
    public function __construct(
        ValueObjects\ReportId $id,
        ValueObjects\ReportCode $code,
        string $name,
        string $config,
        Carbon $createdAt
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->config = $config;
        $this->createdAt = $createdAt;
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
     * @param ValueObjects\ReportCode $code
     * @return Report
     */
    public function setCode(ValueObjects\ReportCode $code): Report
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Report
     */
    public function setName(string $name): Report
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string | null
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param string $config
     * @return Report
     */
    public function setConfig(string $config): Report
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->createdAt;
    }
}
