<?php

/* SuccessFacileBundle::layout.html.twig */
class __TwigTemplate_db81714ddbb94c33afe4d0d141e67a0a9d1ee590277ddef8f5734fefbf323fdb extends Twig_Template
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
        $__internal_dbb00e8ac1a6159f74a41d24f20d07cb7fe8a597e78b45ca481ba030653ea7eb = $this->env->getExtension("native_profiler");
        $__internal_dbb00e8ac1a6159f74a41d24f20d07cb7fe8a597e78b45ca481ba030653ea7eb->enter($__internal_dbb00e8ac1a6159f74a41d24f20d07cb7fe8a597e78b45ca481ba030653ea7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t<title>Succession Facile</title>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t<body>
\t\t";
        // line 11
        $this->loadTemplate("SuccessFacileBundle:Site:menu.html.twig", "SuccessFacileBundle::layout.html.twig", 11)->display($context);
        // line 12
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "\t\t";
        $this->loadTemplate("SuccessFacileBundle:Site:footer.html.twig", "SuccessFacileBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "</html>
";
        
        $__internal_dbb00e8ac1a6159f74a41d24f20d07cb7fe8a597e78b45ca481ba030653ea7eb->leave($__internal_dbb00e8ac1a6159f74a41d24f20d07cb7fe8a597e78b45ca481ba030653ea7eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41e1a25fddfe200f824b48740b9b85f4e4612357b376c0df8a78e6f010539eca = $this->env->getExtension("native_profiler");
        $__internal_41e1a25fddfe200f824b48740b9b85f4e4612357b376c0df8a78e6f010539eca->enter($__internal_41e1a25fddfe200f824b48740b9b85f4e4612357b376c0df8a78e6f010539eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boostrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("boostrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t";
        
        $__internal_41e1a25fddfe200f824b48740b9b85f4e4612357b376c0df8a78e6f010539eca->leave($__internal_41e1a25fddfe200f824b48740b9b85f4e4612357b376c0df8a78e6f010539eca_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_69dac30b2e981f62d7ca38014486bf8b05c100a722c1aa10167f4b6207d3d1d3 = $this->env->getExtension("native_profiler");
        $__internal_69dac30b2e981f62d7ca38014486bf8b05c100a722c1aa10167f4b6207d3d1d3->enter($__internal_69dac30b2e981f62d7ca38014486bf8b05c100a722c1aa10167f4b6207d3d1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t\t";
        
        $__internal_69dac30b2e981f62d7ca38014486bf8b05c100a722c1aa10167f4b6207d3d1d3->leave($__internal_69dac30b2e981f62d7ca38014486bf8b05c100a722c1aa10167f4b6207d3d1d3_prof);

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
        return array (  78 => 13,  72 => 12,  63 => 8,  58 => 7,  52 => 6,  44 => 15,  41 => 14,  38 => 12,  36 => 11,  33 => 10,  31 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* 	<title>Succession Facile</title>*/
/* 		{% block stylesheets %}*/
/* 		<link rel="stylesheet" href="{{ asset('boostrap/css/bootstrap-responsive.css') }}" type="text/css"/>*/
/* 		<link rel="stylesheet" href="{{ asset('boostrap/css/bootstrap.css') }}" type="text/css"/>*/
/* 		{% endblock %}*/
/* 	<body>*/
/* 		{% include "SuccessFacileBundle:Site:menu.html.twig" %}*/
/* 		{% block body %}*/
/* 		{% endblock %}*/
/* 		{% include "SuccessFacileBundle:Site:footer.html.twig" %}*/
/* </html>*/
/* */
