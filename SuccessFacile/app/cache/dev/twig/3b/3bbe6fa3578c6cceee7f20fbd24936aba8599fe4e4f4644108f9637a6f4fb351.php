<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a6ee2d8cf1535809c1f4ab90fe8d2f8a176bbb8db60e862534d3467ff59aa0f2 extends Twig_Template
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
        $__internal_cf2f5df3e43fa7249b434ad28e04c41edb5477b9c6834c350466f57a030680bf = $this->env->getExtension("native_profiler");
        $__internal_cf2f5df3e43fa7249b434ad28e04c41edb5477b9c6834c350466f57a030680bf->enter($__internal_cf2f5df3e43fa7249b434ad28e04c41edb5477b9c6834c350466f57a030680bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cf2f5df3e43fa7249b434ad28e04c41edb5477b9c6834c350466f57a030680bf->leave($__internal_cf2f5df3e43fa7249b434ad28e04c41edb5477b9c6834c350466f57a030680bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
