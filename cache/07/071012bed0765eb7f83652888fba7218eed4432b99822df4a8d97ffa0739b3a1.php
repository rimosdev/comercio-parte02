<?php

/* employee_detail.html */
class __TwigTemplate_5e525536f80d5dd586aad4fce89c5894b129569bd6d6c961567460625757f16e extends Twig_Template
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
        $this->loadTemplate("shared/header.html", "employee_detail.html", 1)->display($context);
        // line 2
        echo "
<div class=\"panel panel-primary \">
  <div class=\"panel-heading\">Employee detail</div>
  <div class=\"panel-body\">

      <dl class=\"dl-horizontal\">
        <dt>Name</dt>
        <dd>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "name", array()), "html", null, true);
        echo "</dd>
        <dt>Email</dt>
        <dd>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "email", array()), "html", null, true);
        echo "</dd>
        <dt>Phone</dt>
        <dd>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "phone", array()), "html", null, true);
        echo "</dd>
        <dt>Address</dt>
        <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "address", array()), "html", null, true);
        echo "</dd>
        <dt>Position</dt>
        <dd>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "position", array()), "html", null, true);
        echo "</dd>
        <dt>Salary</dt>
        <dd>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "salary", array()), "html", null, true);
        echo "</dd>
        <dt>Skills</dt>
        <dd>
            ";
        // line 22
        echo twig_escape_filter($this->env, ($context["skills"] ?? null), "html", null, true);
        echo "
        </dd>
      </dl>

  </div>
</div>


  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "employee_detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  59 => 19,  54 => 17,  49 => 15,  44 => 13,  39 => 11,  34 => 9,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "employee_detail.html", "C:\\sw\\nginx\\html\\rimos\\comercio-parte02\\templates\\employee_detail.html");
    }
}
