<?php

/* SuccessFacileBundle:Site:contact.html.twig */
class __TwigTemplate_419db461fe1fd2cbd2d4c760fe6af7d39702bb2e779abc348eb3116e15d19a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:contact.html.twig", 1);
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
        echo "\tCONTACTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:contact.html.twig";
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
/* 	CONTACTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT*/
/* {% endblock %}*/
/* */
