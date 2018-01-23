<?php

namespace Acme\ActorBundle\Controller;

use Acme\ActorBundle\Entity\Actors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Actor controller.
 *
 */
class ActorsController extends Controller
{
    /**
     * Lists all actor entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM AcmeActorBundle:Actors a";
        $query = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );

        // parameters to template
        return $this->render('actors/index.html.twig', array('pagination' => $pagination,'actor' => $dql));
    }

    /**
     * Finds and displays a actor entity.
     *
     */
    public function showAction(Actors $actor)
    {

        return $this->render('actors/show.html.twig', array(
            'actor' => $actor,
        ));
    }
}
