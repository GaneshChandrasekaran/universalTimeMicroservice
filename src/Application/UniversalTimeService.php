<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\ValueObject\UniversalTime;

class UniversalTimeService
{
    public function convertUtcToUniversalTime(int $timeUTC): array
    {
        $universalTime = UniversalTime::fromTimeUTC($timeUTC);

        return $universalTime->valueAsUniversalTime();
    }
}
