<?php

/**
 * Входное DTO метода сохранения отчета
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Application\DTO;

use DRVAS\Stimulsoft\Domain\ValueObjects;

/**
 * Входное DTO метода сохранения отчета
 *
 * Class StoreReportRequestDTO
 * @package DRVAS\Stimulsoft\Application\DTO
 */
class StoreReportRequest
{
    /**
     * @var string
     */
    private $title;
    /**
     * @var ValueObjects\ReportCode
     */
    private $code;
    /**
     * @var string
     */
    private $content;

    /**
     * StoreReportRequestDTO constructor.
     * @param ValueObjects\ReportCode $code
     * @param string $title
     * @param string $content
     */
    public function __construct(
        ValueObjects\ReportCode $code,
        string $title,
        string $content
    ) {
        $this->code = $code;
        $this->title = $title;
        $this->content = $content;
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
