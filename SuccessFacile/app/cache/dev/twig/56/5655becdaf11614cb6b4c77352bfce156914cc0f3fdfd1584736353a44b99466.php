<?php

/* SuccessFacileBundle:Site:about.html.twig */
class __TwigTemplate_60e55ebaec8c7c6673831a52a77ed9ef02b4c4c693a42a9f2376d4745a469f40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:about.html.twig", 1);
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
        $__internal_6434031e45495483ed1d7e4c2ea9ece447ecf33f0e0806e4c8cbd926792af64c = $this->env->getExtension("native_profiler");
        $__internal_6434031e45495483ed1d7e4c2ea9ece447ecf33f0e0806e4c8cbd926792af64c->enter($__internal_6434031e45495483ed1d7e4c2ea9ece447ecf33f0e0806e4c8cbd926792af64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6434031e45495483ed1d7e4c2ea9ece447ecf33f0e0806e4c8cbd926792af64c->leave($__internal_6434031e45495483ed1d7e4c2ea9ece447ecf33f0e0806e4c8cbd926792af64c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_659200859af2ee467c43afe01b0512b476508eac7dd02c4bbf778b4656640c93 = $this->env->getExtension("native_profiler");
        $__internal_659200859af2ee467c43afe01b0512b476508eac7dd02c4bbf778b4656640c93->enter($__internal_659200859af2ee467c43afe01b0512b476508eac7dd02c4bbf778b4656640c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\tABOUTTTTTTTTT
";
        
        $__internal_659200859af2ee467c43afe01b0512b476508eac7dd02c4bbf778b4656640c93->leave($__internal_659200859af2ee467c43afe01b0512b476508eac7dd02c4bbf778b4656640c93_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	ABOUTTTTTTTTT*/
/* {% endblock %}*/
/* */
