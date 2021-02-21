<?php

declare(strict_types=1);

namespace App\Infrastructure\Api\Controller;

use App\Application\UniversalTimeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UniversalTimeController extends AbstractController
{
    private UniversalTimeService $universalTimeService;

    public function __construct(UniversalTimeService $universalTimeService)
    {
        $this->universalTimeService = $universalTimeService;
    }

    /**
     * @Route("/UniversalTime")
     */
    public function universalTime(Request $request): Response
    {
        $timeUTC = (int)$request->query->get('timeUTC', time());

        return new JsonResponse(
            $this->universalTimeService->convertUtcToUniversalTime($timeUTC)
        );
    }
}
