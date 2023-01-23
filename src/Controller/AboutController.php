<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/about')]
    public function about(): Response
    {
    

        $email = 'votre_email@example.com';
    $skills = ['PHP','Symfony','Javascript','MySQL','Twig'];
    $projects = [
        ['name' => 'Projet 1','description' => 'Une description','link' => 'https://example.com'],
        ['name' => 'Projet 2','description' => 'Une autre description','link' => 'https://example.com'],
    ];
    $education = [
        ['name' => 'Ecole 1','degree' => 'Diplôme 1','graduation' => new \DateTime('2022-06-01')],
        ['name' => 'Ecole 2','degree' => 'Diplôme 2','graduation' => new \DateTime('2018-09-01')],
    ];
    return $this->render('about.html.twig', [
        'email' => $email,
        'skills' => $skills,
        'projects' => $projects,
        'education' => $education
    ]);
    }
}
?>