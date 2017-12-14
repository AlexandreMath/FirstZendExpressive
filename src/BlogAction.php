<?php
namespace App;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class BlogAction implements MiddlewareInterface
{
  /**
   * @var TemplateRendererInterface
   */
  private $renderer;

  public function __construct(TemplateRendererInterface $renderer)
  {
    $this->renderer = $renderer;
  }

  public function process(ServerRequestInterface $request, DelegateInterface $delegate)
  {
    if($request->getAttribute('id')){
      return $this->show($request->getAttribute('id'), $request);
    }
    return $this->index($request);
  }

  private function index(ServerRequestInterface $request): ResponseInterface
  {
    return new HtmlResponse('Salut je suis sur le blog');
  }

  private function show(int $id, ServerRequestInterface $request): ResponseInterface
  {
    return new HtmlResponse($this->renderer->render('@app/show'));
  }
}
?>
