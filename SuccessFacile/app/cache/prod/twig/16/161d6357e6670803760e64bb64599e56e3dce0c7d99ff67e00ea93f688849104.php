<?php

/* SuccessFacileBundle:Site:resultatm_r.html.twig */
class __TwigTemplate_91127d8c8ebd1815c211134a011843f4241d4e89852804180c86b0f97e90d83a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatm_r.html.twig", 1);
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
\t<p><h5>Vous etes marie et recompose avec enfant</h5></p>
\t<p><strong>Age au deces</strong> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["enfant_all"]) ? $context["enfant_all"] : null), "html", null, true);
        echo " enfant(s) dont ";
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : null), "html", null, true);
        echo " commun, ";
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : null), "html", null, true);
        echo " de votre conjoint et ";
        echo twig_escape_filter($this->env, (isset($context["enfant_perso"]) ? $context["enfant_perso"] : null), "html", null, true);
        echo "</p>
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
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Au conjoint survivant</td>
\t\t<td>1/2 du patrimoine total</td>
\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["revenant"]) ? $context["revenant"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t<tr>
\t\t<td>A la succession</td>
\t\t<td>1/2 du patrimoine total</td>
\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["revenant"]) ? $context["revenant"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<h2>Vos Solutions:</h2>
\t<p>Les ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : null), "html", null, true);
        echo " enfants de votre conjoint n'ont pas de succession</p>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Votre repartition</th>
\t\t<th>Valeur recu</th>
\t\t<th>Cout taxe de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Conjoint survivant</td>
\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt2"]) ? $context["conjoint_opt2"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe de succession</td>
\t</tr>
\t<tr>
\t\t<td>Part par enfant</td>
\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt2"]) ? $context["enfant_opt2"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatm_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 52,  117 => 51,  109 => 46,  94 => 34,  86 => 29,  78 => 24,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes marie et recompose avec enfant</h5></p>*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant_all}} enfant(s) dont {{enfant}} commun, {{enfant_conjoint}} de votre conjoint et {{enfant_perso}}</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Au conjoint survivant</td>*/
/* 		<td>1/2 du patrimoine total</td>*/
/* 		<td>{{revenant| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>A la succession</td>*/
/* 		<td>1/2 du patrimoine total</td>*/
/* 		<td>{{revenant| number_format(2,',', ' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<h2>Vos Solutions:</h2>*/
/* 	<p>Les {{enfant_conjoint}} enfants de votre conjoint n'ont pas de succession</p>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Votre repartition</th>*/
/* 		<th>Valeur recu</th>*/
/* 		<th>Cout taxe de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Conjoint survivant</td>*/
/* 		<td>{{conjoint_opt2| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>Pas de taxe de succession</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part par enfant</td>*/
/* 		<td>{{enfant_opt2| number_format(2,',', ' ')}} euros</td>*/
/* 		<td>{{taxe| number_format(2,',', ' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
