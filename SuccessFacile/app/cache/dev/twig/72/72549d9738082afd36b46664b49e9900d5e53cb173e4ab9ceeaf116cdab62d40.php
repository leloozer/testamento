<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_013ef487c60ab1896a5e7f95f1f76db8dc3eff06280d644ecd4283e487efd57e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_842801848aa3e40e6aa1422f4141222445e1871dedaa18696900d07551150b4b = $this->env->getExtension("native_profiler");
        $__internal_842801848aa3e40e6aa1422f4141222445e1871dedaa18696900d07551150b4b->enter($__internal_842801848aa3e40e6aa1422f4141222445e1871dedaa18696900d07551150b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_842801848aa3e40e6aa1422f4141222445e1871dedaa18696900d07551150b4b->leave($__internal_842801848aa3e40e6aa1422f4141222445e1871dedaa18696900d07551150b4b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_834cba586be9cfa126b7052a304fce1649872b86c69e089be28bbd6602abf0ea = $this->env->getExtension("native_profiler");
        $__internal_834cba586be9cfa126b7052a304fce1649872b86c69e089be28bbd6602abf0ea->enter($__internal_834cba586be9cfa126b7052a304fce1649872b86c69e089be28bbd6602abf0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_834cba586be9cfa126b7052a304fce1649872b86c69e089be28bbd6602abf0ea->leave($__internal_834cba586be9cfa126b7052a304fce1649872b86c69e089be28bbd6602abf0ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
