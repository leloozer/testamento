<?php

/* SuccessFacileBundle:Site:index.html.twig */
class __TwigTemplate_720cff4305381843a90422fcc6d2b8fa64048695e13456fd472a6e7c9f01cd70 extends Twig_Template
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
        $__internal_58ddd61d3457d5e6111ab2f6e41680bb65260970fa15169c66994eb199d33b03 = $this->env->getExtension("native_profiler");
        $__internal_58ddd61d3457d5e6111ab2f6e41680bb65260970fa15169c66994eb199d33b03->enter($__internal_58ddd61d3457d5e6111ab2f6e41680bb65260970fa15169c66994eb199d33b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ddd61d3457d5e6111ab2f6e41680bb65260970fa15169c66994eb199d33b03->leave($__internal_58ddd61d3457d5e6111ab2f6e41680bb65260970fa15169c66994eb199d33b03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d861ab77e5e23b76f5f2d4cce521a3b5ee7dc7fd47514149063e99a06217d4 = $this->env->getExtension("native_profiler");
        $__internal_c9d861ab77e5e23b76f5f2d4cce521a3b5ee7dc7fd47514149063e99a06217d4->enter($__internal_c9d861ab77e5e23b76f5f2d4cce521a3b5ee7dc7fd47514149063e99a06217d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
\t<div class=\"jumbotron\">
\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("index.titre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h1>
\t\t<p class=\"lead\">";
        // line 7
        echo $this->env->getExtension('translator')->trans("index.lead", array(), "SuccessFacileBundle");
        echo "</p>
\t\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t<h2>";
        // line 11
        echo $this->env->getExtension('translator')->trans("index.gras1", array(), "SuccessFacileBundle");
        echo "</h2>
\t\t<p>";
        // line 12
        echo $this->env->getExtension('translator')->trans("index.p1", array(), "SuccessFacileBundle");
        echo "</p>
\t\t<p><a class=\"btn btn-danger\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Simulateur");
        echo "\" role=\"button\">J'anticipe ma succession >></a></p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t<h2>";
        // line 16
        echo $this->env->getExtension('translator')->trans("index.gras2", array(), "SuccessFacileBundle");
        echo "</h2>
        <p>";
        // line 17
        echo $this->env->getExtension('translator')->trans("index.p2", array(), "SuccessFacileBundle");
        echo "<p>
\t\t<p><a class=\"btn btn-success\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("Combien");
        echo "\" role=\"button\">Je viens d'hériter >></a></p> </div>
\t\t<div class=\"col-lg-4\">
\t\t<h2>";
        // line 20
        echo $this->env->getExtension('translator')->trans("index.gras3", array(), "SuccessFacileBundle");
        echo "</h2> 
        <p>";
        // line 21
        echo $this->env->getExtension('translator')->trans("index.p3", array(), "SuccessFacileBundle");
        echo "</p>
\t\t<p><a class=\"btn btn-info\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("Quotite");
        echo "\" role=\"button\">Calcul de ma quotité disponible >></a></p>
\t</div>
\t</div>
</div>
";
        
        $__internal_c9d861ab77e5e23b76f5f2d4cce521a3b5ee7dc7fd47514149063e99a06217d4->leave($__internal_c9d861ab77e5e23b76f5f2d4cce521a3b5ee7dc7fd47514149063e99a06217d4_prof);

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
        return array (  90 => 22,  86 => 21,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* {% block body %}*/
/* <div class="container">*/
/* 	<div class="jumbotron">*/
/* 		<h1>{{'index.titre' |trans }}</h1>*/
/* 		<p class="lead">{{'index.lead' |trans | raw}}</p>*/
/* 		</div>*/
/* 	<div class="row">*/
/* 		<div class="col-lg-4">*/
/* 		<h2>{{'index.gras1' |trans | raw}}</h2>*/
/* 		<p>{{'index.p1'|trans | raw}}</p>*/
/* 		<p><a class="btn btn-danger" href="{{path('Simulateur')}}" role="button">J'anticipe ma succession >></a></p>*/
/* 		</div>*/
/* 		<div class="col-lg-4">*/
/* 		<h2>{{'index.gras2' |trans | raw}}</h2>*/
/*         <p>{{'index.p2' |trans | raw}}<p>*/
/* 		<p><a class="btn btn-success" href="{{path('Combien')}}" role="button">Je viens d'hériter >></a></p> </div>*/
/* 		<div class="col-lg-4">*/
/* 		<h2>{{'index.gras3' |trans |raw}}</h2> */
/*         <p>{{'index.p3' |trans |raw}}</p>*/
/* 		<p><a class="btn btn-info" href="{{path('Quotite')}}" role="button">Calcul de ma quotité disponible >></a></p>*/
/* 	</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
