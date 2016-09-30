<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1b4b20071dd771812975967badcec9886f75afb6a4383c9447ceaf40d6d98567 extends Twig_Template
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
        $__internal_2094537b85baed3f631e5ef1c789dd3a3e673c83ac4fa2bedfae5334d2150921 = $this->env->getExtension("native_profiler");
        $__internal_2094537b85baed3f631e5ef1c789dd3a3e673c83ac4fa2bedfae5334d2150921->enter($__internal_2094537b85baed3f631e5ef1c789dd3a3e673c83ac4fa2bedfae5334d2150921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2094537b85baed3f631e5ef1c789dd3a3e673c83ac4fa2bedfae5334d2150921->leave($__internal_2094537b85baed3f631e5ef1c789dd3a3e673c83ac4fa2bedfae5334d2150921_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
