<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0b5fc501f140cbaf7d7f184eae732085173e179ee6b2be13714e76e6261b5aa1 extends Twig_Template
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
        $__internal_1e83f5d29701817639f5c4a7bf13af43caa866a1273ab117ca25d1dcbd092c6f = $this->env->getExtension("native_profiler");
        $__internal_1e83f5d29701817639f5c4a7bf13af43caa866a1273ab117ca25d1dcbd092c6f->enter($__internal_1e83f5d29701817639f5c4a7bf13af43caa866a1273ab117ca25d1dcbd092c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1e83f5d29701817639f5c4a7bf13af43caa866a1273ab117ca25d1dcbd092c6f->leave($__internal_1e83f5d29701817639f5c4a7bf13af43caa866a1273ab117ca25d1dcbd092c6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
