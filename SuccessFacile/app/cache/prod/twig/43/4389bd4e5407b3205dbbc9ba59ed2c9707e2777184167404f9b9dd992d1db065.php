<?php

/* SuccessFacileBundle:Site:resultatgp.html.twig */
class __TwigTemplate_74cd35d691bf81944e8dd28f95908a984e4639ce8659640cd735b9fa76b333b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatgp.html.twig", 1);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 0)) {
            // line 5
            echo "\t<p><h5>Vous etes celibataire et sans enfant</h5></p>
\t";
        }
        // line 7
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 2)) {
            // line 8
            echo "\t<p><h5>Vous etes veuf et sans enfant</h5></p>
\t";
        }
        // line 10
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 3)) {
            // line 11
            echo "\t<p><h5>Vous etes divorce et sans enfant</h5></p>
\t";
        }
        // line 13
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 4)) {
            // line 14
            echo "\t<p><h5>Vous etes separe et sans enfant</h5></p>
\t";
        }
        // line 16
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 5)) {
            // line 17
            echo "\t<p><h5>Vous etes pacse et sans enfant</h5></p>
\t";
        }
        // line 19
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "situ"), "method") == 6)) {
            // line 20
            echo "\t<p><h5>Vous etes en concubinage et sans enfant</h5></p>
\t";
        }
        // line 22
        echo "\t<p><strong>Age au deces</strong> ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : null), "html", null, true);
        echo " enfant(s)</p>
\t<p><strong>Valeur de votre residence:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residence"]) ? $context["residence"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre epargne:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : null), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : null), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t<h2>Votre Bilan:</h2>
\t<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>
\t<p>Votre mere est decede.</p>
\t<p>Votre pere est decede.</p>
\t<p>Vous avez n avez pas de freres et soeurs</p>
\t";
        // line 33
        if (((isset($context["gpp"]) ? $context["gpp"] : null) == true)) {
            // line 34
            echo "\tVos grands parents paternels sont vivants.
\t";
        }
        // line 36
        echo "\t";
        if (((isset($context["gpp"]) ? $context["gpp"] : null) == false)) {
            // line 37
            echo "\tVos grands parents paternels sont decedes.
\t";
        }
        // line 39
        echo "\t";
        if (((isset($context["gpm"]) ? $context["gpm"] : null) == true)) {
            // line 40
            echo "\tVos grands parents maternels sont vivants.
\t";
        }
        // line 42
        echo "\t";
        if (((isset($context["gpm"]) ? $context["gpm"] : null) == false)) {
            // line 43
            echo "\tVos grands parents maternels sont decedes.
\t";
        }
        // line 45
        echo "\t<h2>Vos solutions</h2>
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
        // line 56
        if ((((isset($context["gpp"]) ? $context["gpp"] : null) == true) && ((isset($context["gpm"]) ? $context["gpm"] : null) == true))) {
            // line 57
            echo "\t<tr>
\t\t<td>Part par grand-parent vivant</td>
\t\t<td> 50% du patrimoine total</td>
\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 64
        echo "\t";
        if ((((isset($context["gpp"]) ? $context["gpp"] : null) == false) && ((isset($context["gpm"]) ? $context["gpm"] : null) == false))) {
            // line 65
            echo "\t<tr>
\t\t<td>Part famille maternel</td>
\t\t<td> 50% du patrimoine total</td>
\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td> la taxe est calcule en fonction de votre degre avec le defunt</td>
\t</tr>
\t<tr>
\t\t<td>Part famille paternel</td>
\t\t<td> 50% du patrimoine total</td>
\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td> la taxe est calcule en fonction de votre degre avec le defunt</td>
\t</tr>
\t";
        }
        // line 78
        echo "\t";
        if (((((isset($context["gpp"]) ? $context["gpp"] : null) == false) && ((isset($context["gpm"]) ? $context["gpm"] : null) == true)) || (((isset($context["gpm"]) ? $context["gpm"] : null) == false) && ((isset($context["gpp"]) ? $context["gpp"] : null) == true)))) {
            // line 79
            echo "\t<tr>
\t\t<td>Part par grand-parent vivant</td>
\t\t<td> 50% du patrimoine total</td>
\t\t<td>";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t<tr>
\t\t<td>Part pour l autre famille</td>
\t\t<td> 50% du patrimoine total</td>
\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : null), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td> la taxe est calcule en fonction de votre degre avec le defunt</td>
\t</tr>
\t";
        }
        // line 92
        echo "\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatgp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 92,  206 => 88,  198 => 83,  194 => 82,  189 => 79,  186 => 78,  179 => 74,  170 => 68,  165 => 65,  162 => 64,  156 => 61,  152 => 60,  147 => 57,  145 => 56,  132 => 45,  128 => 43,  125 => 42,  121 => 40,  118 => 39,  114 => 37,  111 => 36,  107 => 34,  105 => 33,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  75 => 22,  71 => 20,  68 => 19,  64 => 17,  61 => 16,  57 => 14,  54 => 13,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	{% if app.session.get('situ') == 0 %}*/
/* 	<p><h5>Vous etes celibataire et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 2 %}*/
/* 	<p><h5>Vous etes veuf et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 3 %}*/
/* 	<p><h5>Vous etes divorce et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 4 %}*/
/* 	<p><h5>Vous etes separe et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 5 %}*/
/* 	<p><h5>Vous etes pacse et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 6 %}*/
/* 	<p><h5>Vous etes en concubinage et sans enfant</h5></p>*/
/* 	{% endif %}*/
/* 	<p><strong>Age au deces</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residence| number_format(2, ',',' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>*/
/* 	<p>Votre mere est decede.</p>*/
/* 	<p>Votre pere est decede.</p>*/
/* 	<p>Vous avez n avez pas de freres et soeurs</p>*/
/* 	{% if gpp == TRUE %}*/
/* 	Vos grands parents paternels sont vivants.*/
/* 	{% endif %}*/
/* 	{% if gpp == FALSE %}*/
/* 	Vos grands parents paternels sont decedes.*/
/* 	{% endif %}*/
/* 	{% if gpm == TRUE %}*/
/* 	Vos grands parents maternels sont vivants.*/
/* 	{% endif %}*/
/* 	{% if gpm == FALSE %}*/
/* 	Vos grands parents maternels sont decedes.*/
/* 	{% endif %}*/
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
/* 	{% if gpp == TRUE and gpm == TRUE %}*/
/* 	<tr>*/
/* 		<td>Part par grand-parent vivant</td>*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe | number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	{% if gpp == FALSE and gpm == FALSE %}*/
/* 	<tr>*/
/* 		<td>Part famille maternel</td>*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td> la taxe est calcule en fonction de votre degre avec le defunt</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part famille paternel</td>*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td> la taxe est calcule en fonction de votre degre avec le defunt</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	{% if (gpp == FALSE and gpm == TRUE) or (gpm == FALSE and gpp == TRUE) %}*/
/* 	<tr>*/
/* 		<td>Part par grand-parent vivant</td>*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe | number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part pour l autre famille</td>*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td> la taxe est calcule en fonction de votre degre avec le defunt</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
