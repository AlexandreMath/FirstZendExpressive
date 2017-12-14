<?php
use App\API;
require '../vendor/autoload.php';
// Container
$builder = new \DI\ContainerBuilder();
$builder->addDefinitions('../config.php');
$container = $builder->build();


$app = new \Zend\Expressive\Application($container->get(\Zend\Expressive\Router\RouterInterface::class), $container);

$app->get('/blog', \App\BlogAction::class, 'blog');
$app->get('/blog/{slug}-{id}', \App\BlogAction::class, 'blog.show');

$app->pipe('/api', \App\API::class);

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();

$app->run();
 ?>
