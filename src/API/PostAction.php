<?php
namespace App\API;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class PostAction implements MiddlewareInterface
{

  public function process(ServerRequestInterface $request, DelegateInterface $delegate)
  {
    return new JsonResponse(['posts'=> ['R2D2', 'Luke Skywalker', 'Han Solo']]);
  }
}
?>
