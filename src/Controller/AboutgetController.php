<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutgetController
{
    #[Route('/contact')], methods: ['GET']
    public function about(): Response
    {
    

        return new Response(
            '<html><body><h1>fjjfeio</h1></body></html>'
        );
    }
}
?>