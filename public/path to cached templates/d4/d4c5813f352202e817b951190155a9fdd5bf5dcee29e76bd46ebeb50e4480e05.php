<?php

/* layout.html.twig */
class __TwigTemplate_6dc58caddb2e233f967310fd9fe4231fd4c5ca5808f8c7e4725109215c815d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">

  <!-- Site Properties -->
  <title>Fixed Menu Example - Semantic</title>

  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/reset.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/site.css\">

  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/container.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/grid.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/header.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/image.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/menu.css\">

  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/divider.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/list.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/segment.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/dropdown.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"../dist/components/icon.css\">

  <style type=\"text/css\">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class=\"ui fixed inverted menu\">
    <div class=\"ui container\">
      <a href=\"#\" class=\"header item\">
        <img class=\"logo\" src=\"assets/images/logo.png\">
        Project Name
      </a>
      <a href=\"#\" class=\"item\">Home</a>
      <div class=\"ui simple dropdown item\">
        Dropdown <i class=\"dropdown icon\"></i>
        <div class=\"menu\">
          <a class=\"item\" href=\"#\">Link Item</a>
          <a class=\"item\" href=\"#\">Link Item</a>
          <div class=\"divider\"></div>
          <div class=\"header\">Header Item</div>
          <div class=\"item\">
            <i class=\"dropdown icon\"></i>
            Sub Menu
            <div class=\"menu\">
              <a class=\"item\" href=\"#\">Link Item</a>
              <a class=\"item\" href=\"#\">Link Item</a>
            </div>
          </div>
          <a class=\"item\" href=\"#\">Link Item</a>
        </div>
      </div>
    </div>
  </div>

  <div class=\"ui main text container\">
    <h1 class=\"ui header\">Semantic UI Fixed Template</h1>
    <p>This is a basic fixed menu template using fixed size containers.</p>
    <p>A text container is used for the main container, which is useful for single column layouts</p>
    <img class=\"wireframe\" src=\"assets/images/wireframe/media-paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
    <img class=\"wireframe\" src=\"assets/images/wireframe/paragraph.png\">
  </div>

    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
        <div class=\"seven wide column\">
          <h4 class=\"ui inverted header\">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class=\"ui inverted section divider\"></div>
      <img src=\"assets/images/logo.png\" class=\"ui centered mini image\">
      <div class=\"ui horizontal inverted small divided link list\">
        <a class=\"item\" href=\"#\">Site Map</a>
        <a class=\"item\" href=\"#\">Contact Us</a>
        <a class=\"item\" href=\"#\">Terms and Conditions</a>
        <a class=\"item\" href=\"#\">Privacy Policy</a>
      </div>
    </div>
  </div>
</body>

</html>
";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 90,  113 => 91,  111 => 90,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "D:\\Documents Informatique\\UwAmp\\www\\zendexpresstuto\\templates\\layout.html.twig");
    }
}
