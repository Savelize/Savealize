<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('subcategory', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:SubCategory:index',
)));

$collection->add('subcategory_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:SubCategory:show',
)));

$collection->add('subcategory_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:SubCategory:new',
)));

$collection->add('subcategory_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:SubCategory:create'),
    array('_method' => 'post')
));

$collection->add('subcategory_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:SubCategory:edit',
)));

$collection->add('subcategory_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:SubCategory:update'),
    array('_method' => 'post|put')
));

$collection->add('subcategory_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:SubCategory:delete'),
    array('_method' => 'post|delete')
));

return $collection;
