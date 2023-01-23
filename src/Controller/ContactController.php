<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController
{
    #[Route('/contact', methods: ['GET', 'HEAD'])]
    public function contact(): Response
    {
    

        return new Response(
            '<html><body><h1>fjjfeio</h1></body></html>'
        );
    }

    #[Route('/contact', methods: ['POST', 'HEAD'])]
    public function contracted(): Response
    {
    

        return new Response(
            '<html><body><h1>fjjfeio</h1></body></html>'
        );
    }
}
?>