<?php
namespace App\API;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\JsonResponse;

class CommentAction implements MiddlewareInterface
{

  public function process(ServerRequestInterface $request, DelegateInterface $delegate)
  {
    return new JsonResponse(['comments'=> ['C3PO', 'Luke Skywalker', 'Leia']]);
  }
}
?>
