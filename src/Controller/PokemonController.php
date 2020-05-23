<?php

namespace App\Controller;
use App\Entity\Pokemon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class PokemonController extends AbstractController
{
    /**
     * @Route("/pokemon", name="pokemon")
     */
    // public function index()
    // {
    //     return $this->render('pokemon/index.html.twig', [
    //         'controller_name' => 'PokemonController',
    //     ]);
    // }

    public function createPokemon(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $pokemon = new Pokemon();
        $pokemon->setName('Bulbizarre');
        $pokemon->setUrlPhoto('https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png');


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($pokemon);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new Pokemon with name '.$pokemon->getName());
    }


}
