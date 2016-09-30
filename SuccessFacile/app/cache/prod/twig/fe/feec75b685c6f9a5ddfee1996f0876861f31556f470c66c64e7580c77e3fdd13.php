<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9d933ff72545d9ebbb1bc9017f77fd7f9872486ee7db0db78f1f2f3445d075cc extends Twig_Template
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
        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
