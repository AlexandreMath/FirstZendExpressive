<?php

/* @app/show.html.twig */
class __TwigTemplate_dda5c9ac112e35bbcea634e360d9697c35fa76dbfbcc1f7a9f000bc5791420d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@app/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"ui inverted vertical footer segment\">
  <div class=\"ui center aligned container\">
    <div class=\"ui stackable inverted divided grid\">
      <div class=\"three wide column\">
        <h4 class=\"ui inverted header\">Group 1</h4>
        <div class=\"ui inverted link list\">
          <a href=\"#\" class=\"item\">Link One</a>
          <a href=\"#\" class=\"item\">Link Two</a>
          <a href=\"#\" class=\"item\">Link Three</a>
          <a href=\"#\" class=\"item\">Link Four</a>
        </div>
      </div>
      <div class=\"three wide column\">
        <h4 class=\"ui inverted header\">Group 2</h4>
        <div class=\"ui inverted link list\">
          <a href=\"#\" class=\"item\">Link One</a>
          <a href=\"#\" class=\"item\">Link Two</a>
          <a href=\"#\" class=\"item\">Link Three</a>
          <a href=\"#\" class=\"item\">Link Four</a>
        </div>
      </div>
      <div class=\"three wide column\">
        <h4 class=\"ui inverted header\">Group 3</h4>
        <div class=\"ui inverted link list\">
          <a href=\"#\" class=\"item\">Link One</a>
          <a href=\"#\" class=\"item\">Link Two</a>
          <a href=\"#\" class=\"item\">Link Three</a>
          <a href=\"#\" class=\"item\">Link Four</a>
        </div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "@app/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@app/show.html.twig", "D:\\Documents Informatique\\UwAmp\\www\\zendexpresstuto\\templates\\app\\show.html.twig");
    }
}
