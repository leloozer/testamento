<?php

/* SuccessFacileBundle:Site:resultatm_ne.html.twig */
class __TwigTemplate_7ec6ae744d169db4ff5c2e4e7f0ef0a1f89dbfcc52e36e374ce1e87167858368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatm_ne.html.twig", 1);
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
\t<p><h5>Vous etes marie et sans enfant</h5></p>
\t<p><strong>Age au deces</strong> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : null), "html", null, true);
        echo " enfant(s)</p>
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
\t<p>Par default, le simulateur considere que vous n avez pas fait de contrat de mariage</p>
\t";
        // line 13
        if (((isset($context["mere"]) ? $context["mere"] : null) == true)) {
            // line 14
            echo "\t<p>Votre mere est vivante</p>
\t";
        }
        // line 16
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : null) == false)) {
            // line 17
            echo "\t<p>Votre mere est decede</p>
\t";
        }
        // line 19
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : null) == true)) {
            // line 20
            echo "\t<p>Votre pere est vivante</p>
\t";
        }
        // line 22
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : null) == false)) {
            // line 23
            echo "\t<p>Votre pere est decede</p>
\t";
        }
        // line 25
        echo "\t<table class=\"table table-hover\">
\t<thead>
\t<h4>Si vous avez fait une donation entre epoux</h4>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Taxe droit de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Le conjoint survivant</td>
\t\t<td>1/2 du patrimoine total</td>
\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>0 euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<h4>Si vous n en avez pas faite</h4>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Taxe droit de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Le conjoint survivant</td>
\t\t";
        // line 57
        if ((((isset($context["mere"]) ? $context["mere"] : null) == true) && ((isset($context["pere"]) ? $context["pere"] : null) == true))) {
            echo "\t
\t\t<td>50% du patrimoine du defunt</td>
\t\t";
        } elseif (((        // line 59
(isset($context["mere"]) ? $context["mere"] : null) == true) || ((isset($context["pere"]) ? $context["pere"] : null) == true))) {
            echo "\t
\t\t<td>75% du patrimoine du defunt</td>
\t\t";
        } elseif (((        // line 61
(isset($context["mere"]) ? $context["mere"] : null) == false) && ((isset($context["pere"]) ? $context["pere"] : null) == false))) {
            echo "\t
\t\t<td>100% du patrimoine du defunt</td>
\t\t";
        }
        // line 64
        echo "\t\t<td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partM"]) ? $context["partM"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>0 euros</td>
\t</tr>
\t<tr>
\t\t<td>Part par parent survivant</td>
\t\t";
        // line 69
        if ((((isset($context["mere"]) ? $context["mere"] : null) == true) || ((isset($context["pere"]) ? $context["pere"] : null) == true))) {
            echo "\t
\t\t<td>25% du patrimoine du defunt</td>
\t\t";
        }
        // line 72
        echo "\t\t<td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatm_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  156 => 72,  150 => 69,  141 => 64,  135 => 61,  130 => 59,  125 => 57,  104 => 39,  88 => 25,  84 => 23,  81 => 22,  77 => 20,  74 => 19,  70 => 17,  67 => 16,  63 => 14,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes marie et sans enfant</h5></p>*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p>Par default, le simulateur considere que vous n avez pas fait de contrat de mariage</p>*/
/* 	{% if mere == TRUE %}*/
/* 	<p>Votre mere est vivante</p>*/
/* 	{%endif%}*/
/* 	{% if mere == FALSE %}*/
/* 	<p>Votre mere est decede</p>*/
/* 	{%endif%}*/
/* 	{% if pere == TRUE %}*/
/* 	<p>Votre pere est vivante</p>*/
/* 	{%endif%}*/
/* 	{% if pere == FALSE %}*/
/* 	<p>Votre pere est decede</p>*/
/* 	{%endif%}*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<h4>Si vous avez fait une donation entre epoux</h4>*/
/* 	<tr>*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 		<th>Taxe droit de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Le conjoint survivant</td>*/
/* 		<td>1/2 du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>0 euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<h4>Si vous n en avez pas faite</h4>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 		<th>Taxe droit de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Le conjoint survivant</td>*/
/* 		{%if mere == TRUE and pere == TRUE %}	*/
/* 		<td>50% du patrimoine du defunt</td>*/
/* 		{% elseif mere == TRUE or pere == TRUE %}	*/
/* 		<td>75% du patrimoine du defunt</td>*/
/* 		{% elseif mere == FALSE and pere == FALSE %}	*/
/* 		<td>100% du patrimoine du defunt</td>*/
/* 		{%endif%}*/
/* 		<td>{{partM| number_format(2,',',' ')}} euros</td>*/
/* 		<td>0 euros</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part par parent survivant</td>*/
/* 		{%if mere == TRUE or pere == TRUE %}	*/
/* 		<td>25% du patrimoine du defunt</td>*/
/* 		{%endif%}*/
/* 		<td>{{partP| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeP| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
