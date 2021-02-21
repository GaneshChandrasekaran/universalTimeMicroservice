<?php

declare(strict_types=1);

namespace App\Tests\PHPUnit\Domain\ValueObject;

use App\Domain\ValueObject\UniversalTime;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class UniversalTimeTest extends TestCase
{
    public function testValueAsUniversalTime(): void
    {
        $timeUTC = time();
        $universalTime = UniversalTime::fromTimeUTC($timeUTC);

        self::assertCount(count(DateTimeZone::listIdentifiers()), $universalTime->valueAsUniversalTime());
    }
}
