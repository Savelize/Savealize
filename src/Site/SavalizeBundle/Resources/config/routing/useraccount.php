<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('useraccount', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:UserAccount:index',
)));

$collection->add('useraccount_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:UserAccount:show',
)));

$collection->add('useraccount_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:UserAccount:new',
)));

$collection->add('useraccount_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:UserAccount:create'),
    array('_method' => 'post')
));

$collection->add('useraccount_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:UserAccount:edit',
)));

$collection->add('useraccount_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:UserAccount:update'),
    array('_method' => 'post|put')
));

$collection->add('useraccount_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:UserAccount:delete'),
    array('_method' => 'post|delete')
));

return $collection;
