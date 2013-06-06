<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('category', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:Category:index',
)));

$collection->add('category_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:Category:show',
)));

$collection->add('category_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:Category:new',
)));

$collection->add('category_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:Category:create'),
    array('_method' => 'post')
));

$collection->add('category_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:Category:edit',
)));

$collection->add('category_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:Category:update'),
    array('_method' => 'post|put')
));

$collection->add('category_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:Category:delete'),
    array('_method' => 'post|delete')
));

return $collection;
