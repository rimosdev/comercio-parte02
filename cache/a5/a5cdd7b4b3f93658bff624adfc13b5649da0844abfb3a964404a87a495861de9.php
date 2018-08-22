<?php

/* shared/header.html */
class __TwigTemplate_7c05e6d0a8720df07255e250408389286bdfd24a0dea10b7d264dd3a31a1192d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Employees list</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/assets/js/bootstrap.min.js\"></script>

    <nav class=\"navbar navbar-default\" role=\"navigation\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">Employees</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
   
    <div class=\"col-sm-3 col-md-3\">
        <form class=\"navbar-form\" role=\"search\" method=\"GET\" action=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Email\" name=\"email\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["q_email"] ?? null), "html", null, true);
        echo "\">
            <div class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
        </div>
        </form>
    </div>
  </div><!-- /.navbar-collapse -->
</nav>";
    }

    public function getTemplateName()
    {
        return "shared/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 45,  76 => 43,  66 => 36,  52 => 25,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "shared/header.html", "C:\\sw\\nginx\\html\\comercio-parte02\\templates\\shared\\header.html");
    }
}
