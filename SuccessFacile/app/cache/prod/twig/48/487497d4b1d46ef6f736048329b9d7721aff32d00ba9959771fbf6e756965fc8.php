<?php

/* SuccessFacileBundle:Site:index.html.twig */
class __TwigTemplate_a3d1a6f693fa9f1f6b3d6b1abeccfb7604d2a3b0f33e034c122f686252ad6283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuccessFacileBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\tACCEUILLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	ACCEUILLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL*/
/* {% endblock %}*/
/* */
