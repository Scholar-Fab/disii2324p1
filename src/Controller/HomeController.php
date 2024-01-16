<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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

    #[Route('/produits', name: 'produits')]
    public function produits(): Response
    {
        return new Response("Informations sur les produits");
    }

    #[Route('/produit/{id}', name: 'infoProduit')]
    public function infoProduit($id): Response
    {
        return new Response("Informations sur le produit $id");
    }

    #[Route('/mes-produits/{id}', name: 'mesProduits')]
    public function mesProduits($id): Response
    {
        return new Response("Informations sur les produits mis en vente par l'utilisateur n° $id");
    }

    #[Route('/mes-produits/{idUser}/{idProduit}', name: 'produitDunUtilisateur')]
    public function produitDunUtilisateur($idUser, $idProduit): Response
    {
        return new Response("Informations sur le produit n° $idProduit mis en vente par l'utilisateur n° $idUser");
    }

    #[Route('/mes-achats/{annee}', name: 'achatParAnnee')]
    public function achatParAnnee($annee): Response
    {
        return new Response("Informations sur les achats de $annee");
    }

    #[Route('/mes-achats/{annee}/{idUser}', name: 'achatParAnneeParUtilisateur')]
    public function achatParAnneeParUtilisateur($annee, $idUser): Response
    {
        return new Response("Informations sur les achats de $annee par l'utilisateur n° $idUser");
    }
}
