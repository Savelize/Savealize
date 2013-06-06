<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('company', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:Company:index',
)));

$collection->add('company_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:Company:show',
)));

$collection->add('company_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:Company:new',
)));

$collection->add('company_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:Company:create'),
    array('_method' => 'post')
));

$collection->add('company_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:Company:edit',
)));

$collection->add('company_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:Company:update'),
    array('_method' => 'post|put')
));

$collection->add('company_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:Company:delete'),
    array('_method' => 'post|delete')
));

return $collection;
