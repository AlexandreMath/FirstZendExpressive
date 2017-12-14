<?php
use \Zend\Expressive\Router\RouterInterface;
use \Zend\Expressive\Router\FastRouteRouter;
use Zend\Expressive\Template\TemplateRendererInterface;
use \Zend\Expressive\Twig\TwigEnvironmentFactory;
use \Zend\Expressive\Twig\TwigRendererFactory;

return [
    RouterInterface::class => \DI\get(FastRouteRouter::class),
    Twig_Environment::class => \DI\factory(TwigEnvironmentFactory::class),
    TemplateRendererInterface::class => \DI\factory(TwigRendererFactory::class),
    'config' => [
      'templates' => [
          'paths' => [
              Twig_Loader_Filesystem::MAIN_NAMESPACE => __DIR__ . '/templates',
              'app' => __DIR__ . '/templates/app'
          ],
      ],
      'twig' => [
          'cache_dir' => 'path to cached templates',
          'assets_url' => 'base URL for assets',
          'assets_version' => 'base version for assets',
          'extensions' => [
          ],
          'globals' => [
          ],
      ],
    ]
];
 ?>
