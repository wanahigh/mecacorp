<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('actors_index', new Route(
    '/',
    array('_controller' => 'AcmeActorBundle:Actors:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('actors_show', new Route(
    '/{raisonsocial}/show',
    array('_controller' => 'AcmeActorBundle:Actors:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));




return $collection;
