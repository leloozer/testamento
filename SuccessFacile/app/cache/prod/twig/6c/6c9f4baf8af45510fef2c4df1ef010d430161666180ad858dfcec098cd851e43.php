<?php

/* SuccessFacileBundle::layout.html.twig */
class __TwigTemplate_130ddda625c22c4bf8972f8e7f66cd5523589e26735e6b52b8522fa6680e4f44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t<title>Succession Facile</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t<body>
\t\t";
        // line 10
        $this->loadTemplate("SuccessFacileBundle:Site:menu.html.twig", "SuccessFacileBundle::layout.html.twig", 10)->display($context);
        // line 11
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "\t\t";
        $this->loadTemplate("SuccessFacileBundle:Site:footer.html.twig", "SuccessFacileBundle::layout.html.twig", 13)->display($context);
        // line 14
        echo "</html>
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boostrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  56 => 11,  49 => 7,  46 => 6,  41 => 14,  38 => 13,  35 => 11,  33 => 10,  30 => 9,  28 => 6,  21 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* 	<title>Succession Facile</title>*/
/* 		{% block stylesheets %}*/
/* 		<link rel="stylesheet" href="{{ asset('boostrap/css/bootstrap.css') }}" type="text/css"/>*/
/* 		{% endblock %}*/
/* 	<body>*/
/* 		{% include "SuccessFacileBundle:Site:menu.html.twig" %}*/
/* 		{% block body %}*/
/* 		{% endblock %}*/
/* 		{% include "SuccessFacileBundle:Site:footer.html.twig" %}*/
/* </html>*/
/* */
