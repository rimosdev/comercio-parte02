<?php

/* employee_detail.html */
class __TwigTemplate_8d14984c1bbd1b70cac09ee5ab650c7539f18fe66b802dec18dd39b507d230df extends Twig_Template
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
        echo "    <div class=\"container\">

      <div class=\"panel panel-primary \">
        <div class=\"panel-heading\">Employee detail</div>
        <div class=\"panel-body\">

            <dl class=\"dl-horizontal\">
              <dt>Name</dt>
              <dd>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "name", array()), "html", null, true);
        echo "</dd>
              <dt>Email</dt>
              <dd>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "email", array()), "html", null, true);
        echo "</dd>
              <dt>Phone</dt>
              <dd>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "phone", array()), "html", null, true);
        echo "</dd>
              <dt>Address</dt>
              <dd>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "address", array()), "html", null, true);
        echo "</dd>
              <dt>Position</dt>
              <dd>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "position", array()), "html", null, true);
        echo "</dd>
              <dt>Salary</dt>
              <dd>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empleado"] ?? null), "salary", array()), "html", null, true);
        echo "</dd>
              <dt>Skills</dt>
              <dd>
                  ";
        // line 23
        echo twig_escape_filter($this->env, ($context["skills"] ?? null), "html", null, true);
        echo "
              </dd>
            </dl>

        </div>
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
        return array (  66 => 23,  60 => 20,  55 => 18,  50 => 16,  45 => 14,  40 => 12,  35 => 10,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "employee_detail.html", "C:\\sw\\nginx\\html\\comercio-parte02\\templates\\employee_detail.html");
    }
}
