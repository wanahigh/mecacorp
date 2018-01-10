<?php

namespace Acme\ActorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeActorBundle:Default:Accueil.html.twig');
    }
}
