<?php

/* SuccessFacileBundle:Site:resultatc_ne.html.twig */
class __TwigTemplate_6c05a960a5a2a10f58e7b6eb5e13193cd8b370ef8d0a4ccf01d2773348029d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatc_ne.html.twig", 1);
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
\t<p><h5>Vous etes celibataire et sans enfant</h5></p>
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
\t<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>
\t";
        // line 13
        if (((isset($context["mere"]) ? $context["mere"] : null) == true)) {
            // line 14
            echo "\t<p>Votre mere est vivante.</p>
\t";
        }
        // line 16
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : null) == false)) {
            // line 17
            echo "\t<p>Votre mere est decede.</p>
\t";
        }
        // line 19
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : null) == true)) {
            // line 20
            echo "\t<p>Votre pere est vivante.</p>
\t";
        }
        // line 22
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : null) == false)) {
            // line 23
            echo "\t<p>Votre pere est decede.</p>
\t";
        }
        // line 25
        echo "\t<p>Vous avez ";
        echo twig_escape_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : null), "html", null, true);
        echo " freres et soeurs</p>
\t<h2>Vos solutions</h2>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Cout Droit de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 37
        if ((((isset($context["mere"]) ? $context["mere"] : null) == true) || ((isset($context["pere"]) ? $context["pere"] : null) == true))) {
            // line 38
            echo "\t<tr>
\t\t<td>Part par parent vivant</td>
\t\t ";
            // line 40
            if (((((isset($context["siblings"]) ? $context["siblings"] : null) == 0) && ((isset($context["mere"]) ? $context["mere"] : null) == true)) && ((isset($context["pere"]) ? $context["pere"] : null) == true))) {
                // line 41
                echo "\t\t<td> 100% du patrimoine total</td>
\t\t ";
            } elseif ((            // line 42
(isset($context["siblings"]) ? $context["siblings"] : null) == 0)) {
                // line 43
                echo "\t\t<td> 50% du patrimoine total</td>
\t\t";
            }
            // line 45
            echo "\t\t ";
            if (((isset($context["siblings"]) ? $context["siblings"] : null) != 0)) {
                // line 46
                echo "\t\t<td> 25% du patrimoine total</td>
\t\t";
            }
            // line 48
            echo "\t\t<td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 52
        echo "\t\t ";
        if (((isset($context["siblings"]) ? $context["siblings"] : null) != 0)) {
            // line 53
            echo "\t<tr>
\t\t<td>Part par frere et soeurs</td>
\t\t<td> ";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["pourcentE"]) ? $context["pourcentE"] : null), "html", null, true);
            echo "% du patrimoine total</td>
\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partE"]) ? $context["partE"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeE"]) ? $context["taxeE"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t\t";
        }
        // line 60
        echo "\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatc_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  154 => 57,  150 => 56,  146 => 55,  142 => 53,  139 => 52,  133 => 49,  128 => 48,  124 => 46,  121 => 45,  117 => 43,  115 => 42,  112 => 41,  110 => 40,  106 => 38,  104 => 37,  88 => 25,  84 => 23,  81 => 22,  77 => 20,  74 => 19,  70 => 17,  67 => 16,  63 => 14,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes celibataire et sans enfant</h5></p>*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>*/
/* 	{% if mere == TRUE %}*/
/* 	<p>Votre mere est vivante.</p>*/
/* 	{% endif %}*/
/* 	{% if mere == FALSE %}*/
/* 	<p>Votre mere est decede.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == TRUE %}*/
/* 	<p>Votre pere est vivante.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == FALSE %}*/
/* 	<p>Votre pere est decede.</p>*/
/* 	{% endif %}*/
/* 	<p>Vous avez {{siblings}} freres et soeurs</p>*/
/* 	<h2>Vos solutions</h2>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 		<th>Cout Droit de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	{% if mere == TRUE or pere == TRUE%}*/
/* 	<tr>*/
/* 		<td>Part par parent vivant</td>*/
/* 		 {% if siblings == 0 and mere == TRUE and pere == TRUE %}*/
/* 		<td> 100% du patrimoine total</td>*/
/* 		 {% elseif siblings == 0 %}*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 		<td> 25% du patrimoine total</td>*/
/* 		{% endif %}*/
/* 		<td>{{partP| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeP| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 	<tr>*/
/* 		<td>Part par frere et soeurs</td>*/
/* 		<td> {{pourcentE}}% du patrimoine total</td>*/
/* 		<td>{{partE| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeE| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
