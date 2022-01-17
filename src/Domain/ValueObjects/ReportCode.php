<?php

/**
 * Объект значение "Код отчета"
 */

declare(strict_types=1);

namespace DRVAS\Stimulsoft\Domain\ValueObjects;

use DRVAS\Stimulsoft\Domain\Exceptions;

/**
 * Объект значение "Код отчета"
 *
 * Class ReportCode
 * @package DRVAS\Stimulsoft\Domain\ValueObjects
 */
class ReportCode
{
    /**
     * @var string
     */
    private $code;

    /**
     * ReportCode constructor.
     * @param string $code
     * @throws Exceptions\InvariantViolation
     */
    public function __construct(string $code)
    {
        if (empty($code)) {
            throw new Exceptions\InvariantViolation(sprintf('Некорректный код отчёта "%s"', $code));
        }
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}
