<?php
namespace App;

use App\API\PostAction;
use App\API\CommentAction;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use \Zend\Expressive\Application;
use \Zend\Expressive\Router\FastRouteRouter;

class API implements MiddlewareInterface
{
  /**
   * @var ContainerInterface
   */
  private $container;

  public function __construct(ContainerInterface $container)
  {
    $this->container = $container;
  }

  public function process(ServerRequestInterface $request, DelegateInterface $delegate)
  {
    $app = new Application(new FastRouteRouter(), $this->container);

    $app->get('/posts', PostAction::class);
    $app->get('/comments', CommentAction::class);
    $app->pipeRoutingMiddleware();
    $app->pipeDispatchMiddleware();
    return $app->process($request, $delegate);
  }
}
?>
