<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_68731c5627c9d63ddcf6b628c25772598621083ea2c5bc13e4bc78cac43f49c4 extends Twig_Template
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
        $__internal_a4eb44ea6e4acf910c9f7af2c93542d51c310bcb43064cfa09d9b77b4caf9e2d = $this->env->getExtension("native_profiler");
        $__internal_a4eb44ea6e4acf910c9f7af2c93542d51c310bcb43064cfa09d9b77b4caf9e2d->enter($__internal_a4eb44ea6e4acf910c9f7af2c93542d51c310bcb43064cfa09d9b77b4caf9e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a4eb44ea6e4acf910c9f7af2c93542d51c310bcb43064cfa09d9b77b4caf9e2d->leave($__internal_a4eb44ea6e4acf910c9f7af2c93542d51c310bcb43064cfa09d9b77b4caf9e2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
