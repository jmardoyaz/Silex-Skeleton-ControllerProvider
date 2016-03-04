<?php

require_once __DIR__.'/../vendor/autoload.php';
use App\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

$app = new Silex\Application();

$app->mount('/', new App\Controller\HomeController());
$app->mount('/default', new App\Controller\DefaultController());

$app['debug'] = true;

$app->run();

?>
