<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('brand', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:Brand:index',
)));

$collection->add('brand_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:Brand:show',
)));

$collection->add('brand_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:Brand:new',
)));

$collection->add('brand_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:Brand:create'),
    array('_method' => 'post')
));

$collection->add('brand_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:Brand:edit',
)));

$collection->add('brand_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:Brand:update'),
    array('_method' => 'post|put')
));

$collection->add('brand_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:Brand:delete'),
    array('_method' => 'post|delete')
));

return $collection;
