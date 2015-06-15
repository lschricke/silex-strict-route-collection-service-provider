<?php

namespace Lschricke\SymfonyStrictRouteCollection\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Lschricke\SymfonyStrictRouteCollection\SymfonyStrictRouteCollection;

/**
 * This provider just replaces the default $app['routes_class'] by the StrictRouteCollection class.
 */
class StrictRouteCollectionServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $app)
    {
        $app['routes_factory'] = $app->factory(function () {
            return new SymfonyStrictRouteCollection();
        });
    }
}
