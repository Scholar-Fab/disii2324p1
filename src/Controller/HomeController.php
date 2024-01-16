<?php

namespace App\Controller;

use App\Entity\Joueur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    #[Route('/home/{nom}', name: 'app_home')]
    public function index($nom): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'nom' => $nom
        ]);
    }

    #[Route('/joueur/{id}', name: 'infoJoueur')]
    public function infoJoueur(Joueur $joueur,EntityManagerInterface $manager): Response
    {
        /*$joueurRepo = $manager->getRepository(Joueur::class);
        $joueur = $joueurRepo->find($id);*/


        return $this->render('home/infoJoueur.html.twig', [
            "joueur" => $joueur
        ]);
    }

    #[Route('/listeJoueurs', name: 'listeJoueurs')]
    public function listeJoueurs(EntityManagerInterface $manager): Response
    {
        $joueurRepo = $manager->getRepository(Joueur::class);
        $listeJoueurs = $joueurRepo->findAll();


        return $this->render('home/listeJoueurs.html.twig', [
            "listeJoueurs" => $listeJoueurs
        ]);
    }

    
}
