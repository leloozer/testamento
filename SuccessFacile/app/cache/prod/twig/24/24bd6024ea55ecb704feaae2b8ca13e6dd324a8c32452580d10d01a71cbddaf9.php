<?php

/* SuccessFacileBundle:Quotite:result.html.twig */
class __TwigTemplate_d40653d04857625f1c48d2ff3d9a8f4d6ab14e1bb76861a8c3bafa21a0865748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Quotite:result.html.twig", 1);
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
        echo "\t<h2>Votre Situation:</h2>
\t";
        // line 4
        if (((isset($context["marie"]) ? $context["marie"] : null) == true)) {
            // line 5
            echo "\t\t<p>Vous etes marie.</p>
\t";
        }
        // line 7
        echo "\t";
        if (((isset($context["marie"]) ? $context["marie"] : null) == false)) {
            // line 8
            echo "\t\t<p>Vous n'etes pas marie.</p>
\t";
        }
        // line 10
        echo "\t<p>Vous avez un patrimoine personnel de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p>Vous avez ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : null), "html", null, true);
        echo " enfant(s).
\t<h2>Votre Bilan:</h2>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Quotite disponible (en %)</th>
\t\t<th>Quotite disponible (en euros)</th>
\t\t<th>Heritage restant sans la quotite disponible</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["pourcentQD"]) ? $context["pourcentQD"] : null), "html", null, true);
        echo " %</td>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["QD"]) ? $context["QD"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["reste"]) ? $context["reste"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Quotite:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 24,  67 => 23,  52 => 11,  47 => 10,  43 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	{% if marie == TRUE %}*/
/* 		<p>Vous etes marie.</p>*/
/* 	{% endif %}*/
/* 	{% if marie == FALSE %}*/
/* 		<p>Vous n'etes pas marie.</p>*/
/* 	{% endif %}*/
/* 	<p>Vous avez un patrimoine personnel de {{patrimoine| number_format(2,',', ' ')}} euros</p>*/
/* 	<p>Vous avez {{child}} enfant(s).*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Quotite disponible (en %)</th>*/
/* 		<th>Quotite disponible (en euros)</th>*/
/* 		<th>Heritage restant sans la quotite disponible</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{{ pourcentQD}} %</td>*/
/* 		<td>{{QD| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{reste| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
