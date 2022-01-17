<?php

/**
 * Объект значение "Id отчета"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\ValueObjects;

use Ramsey\Uuid\UuidInterface;

/**
 * Объект значение "Id отчета"
 *
 * Class ReportId
 * @package DRVAS\Stimulsoft\Domain\ValueObjects
 */
class ReportId
{
    /**
     * @var UuidInterface
     */
    private $reportId;

    /**
     * ReportId constructor.
     * @param UuidInterface $reportId
     */
    public function __construct(UuidInterface $reportId)
    {
        $this->reportId = $reportId;
    }

    /**
     * @return UuidInterface
     */
    public function getValue(): UuidInterface
    {
        return $this->reportId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}
