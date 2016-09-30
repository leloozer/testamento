<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4589e0a0f3c6d03d62c589f9215e2eab202f739e7b57c0818a436547cd8e026d extends Twig_Template
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
        $__internal_c734087ea044407a512f83ad09c69e581df77cc6121d832c14722141be6df8cb = $this->env->getExtension("native_profiler");
        $__internal_c734087ea044407a512f83ad09c69e581df77cc6121d832c14722141be6df8cb->enter($__internal_c734087ea044407a512f83ad09c69e581df77cc6121d832c14722141be6df8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c734087ea044407a512f83ad09c69e581df77cc6121d832c14722141be6df8cb->leave($__internal_c734087ea044407a512f83ad09c69e581df77cc6121d832c14722141be6df8cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
