<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c724fa554016d655341a2b2cc1071f99e6c41d8d67942121c56aef83559d58f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_663329d9073a7873179424adf0e4f9550f079524b439bb2514853433c61f1722 = $this->env->getExtension("native_profiler");
        $__internal_663329d9073a7873179424adf0e4f9550f079524b439bb2514853433c61f1722->enter($__internal_663329d9073a7873179424adf0e4f9550f079524b439bb2514853433c61f1722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_663329d9073a7873179424adf0e4f9550f079524b439bb2514853433c61f1722->leave($__internal_663329d9073a7873179424adf0e4f9550f079524b439bb2514853433c61f1722_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
