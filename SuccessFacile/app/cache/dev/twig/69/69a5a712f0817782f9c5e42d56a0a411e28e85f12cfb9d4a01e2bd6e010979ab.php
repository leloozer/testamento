<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6ce8a242ce8b408173de601d2707bc70227df80035d2782e4054e818a4ed432e extends Twig_Template
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
        $__internal_e00bf96f91b039ba988804657a67b430dceeea47adab2eb6cb092207f3037062 = $this->env->getExtension("native_profiler");
        $__internal_e00bf96f91b039ba988804657a67b430dceeea47adab2eb6cb092207f3037062->enter($__internal_e00bf96f91b039ba988804657a67b430dceeea47adab2eb6cb092207f3037062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e00bf96f91b039ba988804657a67b430dceeea47adab2eb6cb092207f3037062->leave($__internal_e00bf96f91b039ba988804657a67b430dceeea47adab2eb6cb092207f3037062_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
