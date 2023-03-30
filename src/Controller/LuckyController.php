<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// php bin/console debug:router

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'app_lucky')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );

        return $this->render('number.html.twig', [
            'number' => $number,
        ]);
    }
}
