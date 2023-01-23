<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', methods: ['GET'])]
    public function contact(): Response
    {
        return new Response(

            '<html><body>GET contact</body></html>'
        );

       
    }

    #[Route('/contact', methods: ['POST'])]
    public function contracted(): Response
    {
    
        return new Response(

            '<html><body>POST contracted</body></html>'
        );
       
    }
}
?>