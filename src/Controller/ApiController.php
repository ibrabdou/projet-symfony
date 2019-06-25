<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ApiController
{
    public function meteo(): JsonResponse
    {
        $today = [
            'temp' => 35,
            'unit' => 'celcium',
            'humidity' => '2%'
        ];

        return $this->json($today);
    }

    /**
     * @Route("/meteo")
     * @return RedirectResponse
     */
    public function redirectMeteo(): RedirectResponse
    {
        return $this->redirectToRoute('app_api_meteo');
    }

    /**
     * @Route("/download/pdf/")
     * @Route RedirectResponse
     */
    public function pdf(): BinaryFileResponse
    {
        $pdf = new File('documents/symfony_best_practices-3.3.pdf');
        return $this->file($pdf, 'sf4.pdf, ResponseHeaderBag ::DISPOSITION_INLINE');
    }
}
