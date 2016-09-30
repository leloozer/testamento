<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fac688756cef8e8a134bf087a08793969c9eb390dc0c9d2bfc2dd40d29933df5 extends Twig_Template
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
        $__internal_3d8680a2c64c2707e22e8db161f418c8e96e8708303fb6c11c5551a557e84105 = $this->env->getExtension("native_profiler");
        $__internal_3d8680a2c64c2707e22e8db161f418c8e96e8708303fb6c11c5551a557e84105->enter($__internal_3d8680a2c64c2707e22e8db161f418c8e96e8708303fb6c11c5551a557e84105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3d8680a2c64c2707e22e8db161f418c8e96e8708303fb6c11c5551a557e84105->leave($__internal_3d8680a2c64c2707e22e8db161f418c8e96e8708303fb6c11c5551a557e84105_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
