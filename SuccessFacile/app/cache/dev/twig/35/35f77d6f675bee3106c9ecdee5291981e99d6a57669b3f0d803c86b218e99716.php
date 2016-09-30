<?php

/* SuccessFacileBundle:Site:droitdesuccess.html.twig */
class __TwigTemplate_9c893585e09e2a1b522eea943a3d9abfdbc4af31f24aab24cc09169159e6b449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:droitdesuccess.html.twig", 1);
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
        $__internal_7949cbcc9ee30bc792fef96ffb52f96120e22aac0853a04ddddffe2542156466 = $this->env->getExtension("native_profiler");
        $__internal_7949cbcc9ee30bc792fef96ffb52f96120e22aac0853a04ddddffe2542156466->enter($__internal_7949cbcc9ee30bc792fef96ffb52f96120e22aac0853a04ddddffe2542156466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:droitdesuccess.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7949cbcc9ee30bc792fef96ffb52f96120e22aac0853a04ddddffe2542156466->leave($__internal_7949cbcc9ee30bc792fef96ffb52f96120e22aac0853a04ddddffe2542156466_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf95fe8f4c330ef340567f7238132b2cc8a044601d1daf93f6c53c65ee2478b0 = $this->env->getExtension("native_profiler");
        $__internal_cf95fe8f4c330ef340567f7238132b2cc8a044601d1daf93f6c53c65ee2478b0->enter($__internal_cf95fe8f4c330ef340567f7238132b2cc8a044601d1daf93f6c53c65ee2478b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-lg-4\">
\t\t<h2>";
        // line 7
        echo $this->env->getExtension('translator')->trans("index.gras1", array(), "SuccessFacileBundle");
        echo "</h2>
\t\t<p>Je calcule les droits de succession à payer  pour mes héritiers.</p>
\t\t<p><a class=\"btn btn-danger\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("Simulateur");
        echo "\" role=\"button\">Calculateur >></a></p>
\t\t</div>
\t\t<div class=\"col-lg-4\">
\t\t<h2>";
        // line 12
        echo $this->env->getExtension('translator')->trans("index.gras2", array(), "SuccessFacileBundle");
        echo "</h2>
        <p>Je calcule les frais  de succession  à payer<p>
\t\t<p><a class=\"btn btn-success\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("Combien");
        echo "\" role=\"button\">Calculateur >></a></p> </div>
\t</div>
</div>
";
        
        $__internal_cf95fe8f4c330ef340567f7238132b2cc8a044601d1daf93f6c53c65ee2478b0->leave($__internal_cf95fe8f4c330ef340567f7238132b2cc8a044601d1daf93f6c53c65ee2478b0_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:droitdesuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  56 => 12,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* {% block body %}*/
/* <div class="container">*/
/* 	<div class="row">*/
/* 		<div class="col-lg-4">*/
/* 		<h2>{{'index.gras1' |trans | raw}}</h2>*/
/* 		<p>Je calcule les droits de succession à payer  pour mes héritiers.</p>*/
/* 		<p><a class="btn btn-danger" href="{{path('Simulateur')}}" role="button">Calculateur >></a></p>*/
/* 		</div>*/
/* 		<div class="col-lg-4">*/
/* 		<h2>{{'index.gras2' |trans | raw}}</h2>*/
/*         <p>Je calcule les frais  de succession  à payer<p>*/
/* 		<p><a class="btn btn-success" href="{{path('Combien')}}" role="button">Calculateur >></a></p> </div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
