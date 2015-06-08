<?php

namespace Lschricke\SymfonyStrictRouteCollection\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * This provider just replaces the default $app['routes_class'] by the StrictRouteCollection class.
 */
class StrictRouteCollectionServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['routes_class'] = 'Lschricke\\SymfonyStrictRouteCollection\\StrictRouteCollection';
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }
}
