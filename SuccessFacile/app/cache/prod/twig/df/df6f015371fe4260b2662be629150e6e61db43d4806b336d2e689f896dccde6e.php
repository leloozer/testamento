<?php

/* SuccessFacileBundle:Site:resultatv_r.html.twig */
class __TwigTemplate_27c16537c20cbc90a8d9c2bf85532a66f62669b066a9dda7a33885b1a096bad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatv_r.html.twig", 1);
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
\t<p><h5>Vous etes Veuf et famille recompose avec enfant</h5></p>
\t<p><strong>Age au deces</strong> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["enfant_all"]) ? $context["enfant_all"] : null), "html", null, true);
        echo " enfant(s) dont ";
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : null), "html", null, true);
        echo " communs, ";
        echo twig_escape_filter($this->env, (isset($context["enfant_perso"]) ? $context["enfant_perso"] : null), "html", null, true);
        echo " a vous et ";
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : null), "html", null, true);
        echo " a votre conjoint</p>
\t<p><strong>Valeur de votre residence:</strong> ";
        // line 7
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residence"]) ? $context["residence"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre epargne:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : null), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t<h2>Votre Bilan:</h2>
\t<p>Les ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : null), "html", null, true);
        echo " enfant(s) de votre conjoint n ont pas de droit de succession</p>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Cout taxe de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Part par enfant</td>
\t\t<td>1/";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["enfant_part"]) ? $context["enfant_part"] : null), "html", null, true);
        echo " du patrimoine total</td>
\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatv_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  86 => 26,  82 => 25,  66 => 12,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes Veuf et famille recompose avec enfant</h5></p>*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant_all}} enfant(s) dont {{enfant}} communs, {{enfant_perso}} a vous et {{enfant_conjoint }} a votre conjoint</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p>Les {{enfant_conjoint}} enfant(s) de votre conjoint n ont pas de droit de succession</p>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 		<th>Cout taxe de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Part par enfant</td>*/
/* 		<td>1/{{enfant_part}} du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
