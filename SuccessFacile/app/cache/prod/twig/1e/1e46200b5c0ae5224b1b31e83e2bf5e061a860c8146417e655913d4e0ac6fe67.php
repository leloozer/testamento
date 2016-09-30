<?php

/* SuccessFacileBundle:Site:resultatm_nr.html.twig */
class __TwigTemplate_bf0c0f955928093d6027c1bcafe92aa6fa296a6ae04eba6bc628580cc4338a08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatm_nr.html.twig", 1);
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
\t<p><h5>Vous etes marie et famille non recompose avec enfant</h5></p>
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
\t<p><strong>Valeur de l'usufruit fiscal(Art. 669 CGI)</strong> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["val_usufruit"]) ? $context["val_usufruit"] : null), "html", null, true);
        echo "%</p>
\t<p><strong>Valeur de la Nue-Propriete</strong> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nue_propriete"]) ? $context["nue_propriete"] : null), "html", null, true);
        echo "%</p>
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
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["revenant"]) ? $context["revenant"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t<tr>
\t\t<td>A la succession</td>
\t\t<td>1/2 du patrimoine total</td>
\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["revenant"]) ? $context["revenant"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<h2>Vos Solutions:</h2>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Votre repartition</th>
\t\t<th>Option 1</th>
\t\t<th>Taxe option 1</th>
\t\t<th>Option 2</th>
\t\t<th>Taxe option 2</th>
\t\t<th>Option 3</th>
\t\t<th>Taxe option 3</th>
\t\t<th>Option 4</th>
\t\t<th>Taxe option 4</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Conjoint survivant</td>
\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt1"]) ? $context["conjoint_opt1"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt2"]) ? $context["conjoint_opt2"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt3"]) ? $context["conjoint_opt3"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt4"]) ? $context["conjoint_opt4"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t</tr>
\t<tr>
\t\t<td>Part par enfant</td>
\t\t<td>";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt1"]) ? $context["enfant_opt1"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 65
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt1"]) ? $context["taxe_opt1"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt2"]) ? $context["enfant_opt2"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt2"]) ? $context["taxe_opt2"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt3"]) ? $context["enfant_opt3"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt3"]) ? $context["taxe_opt3"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 70
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt4"]) ? $context["enfant_opt4"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt4"]) ? $context["taxe_opt4"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatm_nr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 65,  136 => 64,  128 => 59,  123 => 57,  118 => 55,  113 => 53,  88 => 31,  80 => 26,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes marie et famille non recompose avec enfant</h5></p>*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p><strong>Valeur de l'usufruit fiscal(Art. 669 CGI)</strong> {{val_usufruit}}%</p>*/
/* 	<p><strong>Valeur de la Nue-Propriete</strong> {{nue_propriete}}%</p>*/
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
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Votre repartition</th>*/
/* 		<th>Option 1</th>*/
/* 		<th>Taxe option 1</th>*/
/* 		<th>Option 2</th>*/
/* 		<th>Taxe option 2</th>*/
/* 		<th>Option 3</th>*/
/* 		<th>Taxe option 3</th>*/
/* 		<th>Option 4</th>*/
/* 		<th>Taxe option 4</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Conjoint survivant</td>*/
/* 		<td>{{conjoint_opt1|number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt2| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt3| number_format(2, ',',' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt4| number_format(2,',',' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part par enfant</td>*/
/* 		<td>{{enfant_opt1| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt1| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt2| number_format(2,',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt2| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt3| number_format(2,',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt3| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt4| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe_opt4| number_format(2, ',', ' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
