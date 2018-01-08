<?php

namespace Acme\ActorBundle\Controller;

use Acme\ActorBundle\Entity\Actors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actors = $em->getRepository('AcmeActorBundle:Actors')->findAll();

        return $this->render('actors/index.html.twig', array(
            'actors' => $actors,
        ));
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
