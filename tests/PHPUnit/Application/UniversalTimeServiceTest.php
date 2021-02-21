<?php

declare(strict_types=1);

namespace App\Tests\PHPUnit\Application;

use App\Application\UniversalTimeService;
use DateTimeZone;
use PHPUnit\Framework\TestCase;

class UniversalTimeServiceTest extends TestCase
{
    public function testConvertUtcToUniversalTime(): void
    {
        $timeUTC = time();

        $universalTimeService = new UniversalTimeService();

        self::assertCount(count(DateTimeZone::listIdentifiers()), $universalTimeService->convertUtcToUniversalTime($timeUTC));
    }
}
