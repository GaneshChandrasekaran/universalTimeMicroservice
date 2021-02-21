<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use DateTime;
use DateTimeZone;

final class UniversalTime
{
    private const TIME_FORMAT_RFC_2822 = 'r';

    private DateTime $dateTimeUtc;

    private function __construct(int $timeUTC)
    {
        $this->dateTimeUtc = new DateTime();
        $this->dateTimeUtc->setTimestamp($timeUTC);
    }

    public static function fromTimeUTC(int $timeUTC): self
    {
        return new self($timeUTC);
    }

    public function valueAsUniversalTime(): array
    {
        $allTimeZones = DateTimeZone::listIdentifiers();

        $universalTimes = [];

        foreach ($allTimeZones as $timeZone) {
            $this->dateTimeUtc->setTimezone(new DateTimeZone($timeZone));
            $universalTimes[$timeZone] = $this->dateTimeUtc->format(self::TIME_FORMAT_RFC_2822);
        }

        return $universalTimes;
    }
}
