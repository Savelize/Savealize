<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('adminaccount', new Route('/', array(
    '_controller' => 'SiteSavalizeBundle:AdminAccount:index',
)));

$collection->add('adminaccount_show', new Route('/{id}/show', array(
    '_controller' => 'SiteSavalizeBundle:AdminAccount:show',
)));

$collection->add('adminaccount_new', new Route('/new', array(
    '_controller' => 'SiteSavalizeBundle:AdminAccount:new',
)));

$collection->add('adminaccount_create', new Route(
    '/create',
    array('_controller' => 'SiteSavalizeBundle:AdminAccount:create'),
    array('_method' => 'post')
));

$collection->add('adminaccount_edit', new Route('/{id}/edit', array(
    '_controller' => 'SiteSavalizeBundle:AdminAccount:edit',
)));

$collection->add('adminaccount_update', new Route(
    '/{id}/update',
    array('_controller' => 'SiteSavalizeBundle:AdminAccount:update'),
    array('_method' => 'post|put')
));

$collection->add('adminaccount_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'SiteSavalizeBundle:AdminAccount:delete'),
    array('_method' => 'post|delete')
));

return $collection;
