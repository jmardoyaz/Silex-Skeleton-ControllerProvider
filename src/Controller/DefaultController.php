<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\ControllerProviderInterface;

class DefaultController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers
            ->get('/', array($this, 'defaultIndex'))
            ->bind('default_index')
        ;

        return $controllers;
    }

    public function defaultIndex(Application $app)
    {
        echo "Default Controller Index";

        return '';

    }
}

?>
