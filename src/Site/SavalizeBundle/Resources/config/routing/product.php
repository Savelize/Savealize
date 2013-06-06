<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('product', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:Product:index',
)));

$collection->add('product_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:Product:show',
)));

$collection->add('product_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:Product:new',
)));

$collection->add('product_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:Product:create'),
    array('_method' => 'post')
));

$collection->add('product_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:Product:edit',
)));

$collection->add('product_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:Product:update'),
    array('_method' => 'post|put')
));

$collection->add('product_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:Product:delete'),
    array('_method' => 'post|delete')
));

return $collection;
