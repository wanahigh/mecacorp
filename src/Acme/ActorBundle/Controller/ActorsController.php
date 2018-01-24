<?php

namespace Acme\ActorBundle\Controller;

use Acme\ActorBundle\Entity\Actors;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Actor controller.
 *
 * @property  indexManager
 */
class ActorsController extends Controller
{
    private $indexManager;

    /**
     * Lists all actor entities.
     *
     */
    public function indexAction(Request $request)
    {


        $em = $this->getDoctrine()->getManagerForClass(Actors::class);
        $actors = $this->indexManager->search('query', Actors::class, $em, 2, 100);


        // parameters to template
        return $this->render('actors/index.html.twig', array('actor' => $actors));
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
