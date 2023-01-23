<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    #[Route('/')]
    public function home(): Response
    {
    

        return new Response(
            '<html>
            <title>Syrfa</title>
            <body>
            <h1>Bienvenue sur le site de Syrfa ! Vous pouvez en savoir plus ou me contacter ! </h1>
            <a href="url">en savoir plus</a><br><br>
            <a href="url">me contacter</a>
            </body>
            </html>'
        );
    }
}
?>