<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Silex\Application;
use Silex\ControllerProviderInterface;

class HomeController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers
            ->get('/', array($this, 'homeIndex'))
            ->bind('home_index')
        ;

        return $controllers;
    }

    public function homeIndex(Application $app)
    {
        echo "Home Index";

        return '';
    }
}

?>
