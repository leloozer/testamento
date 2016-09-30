<?php

/* SuccessFacileBundle:Combien:result.html.twig */
class __TwigTemplate_c95afea5ae5b2cbac54fcb298c099aba5c5f4ade4168b6beaa004e702ad314e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Combien:result.html.twig", 1);
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
        if (((isset($context["handicap"]) ? $context["handicap"] : null) == true)) {
            // line 5
            echo "\t\t<p>Vous etes handicape.</p>
\t";
        }
        // line 7
        echo "\t";
        if (((isset($context["handicap"]) ? $context["handicap"] : null) == false)) {
            // line 8
            echo "\t\t<p>Vous n'etes pas handicape.</p>
\t";
        }
        // line 10
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 0)) {
            // line 11
            echo "\t<p>Vous etes le mari du defunt.</p>
\t";
        }
        // line 13
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 1)) {
            // line 14
            echo "\t<p>Vous etes un ascendant direct du defunt.</p>
\t";
        }
        // line 16
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 2)) {
            // line 17
            echo "\t<p>Vous etes le fils ou la fils du defunt.</p>
\t";
        }
        // line 19
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 3)) {
            // line 20
            echo "\t<p>Vous etes le petit-fils/petite-fille ou arriere-petit-fils/arriere-petite-fille du defunt.</p>
\t";
        }
        // line 22
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 4)) {
            // line 23
            echo "\t<p>Vous etes le frere ou la soeur du defunt.</p>
\t";
        }
        // line 25
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 5)) {
            // line 26
            echo "\t<p>Vous etes le neveu ou la niece du defunt.</p>
\t";
        }
        // line 28
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 6)) {
            // line 29
            echo "\t<p>Vous etes parent jusqu'au 4eme degre inclus du defunt.</p>
\t";
        }
        // line 31
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 7)) {
            // line 32
            echo "\t<p>Vous etes sans lien de sang avec le defunt ou parent du 5eme degre minimum.</p>
\t";
        }
        // line 34
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : null) == 8)) {
            // line 35
            echo "\t<p>Vous etes le partenaire de PACS du defunt.</p>
\t";
        }
        // line 37
        echo "\t<h2>Votre Bilan:</h2>
\t";
        // line 38
        if (((isset($context["lien"]) ? $context["lien"] : null) == 8)) {
            // line 39
            echo "\t<p>Le partenaire d'un PACS n'a pas de vocation successorale sauf dispositions testamentaires.</p>
\t";
        }
        // line 41
        echo "\t<h6>Le montant de la taxe a payer</h6>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Votre heritage</th>
\t\t<th>Cout Droit de succession</th>
\t\t<th>Heritage apres payement de la taxe</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["somme"]) ? $context["somme"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["result"]) ? $context["result"] : null), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Combien:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  136 => 53,  132 => 52,  119 => 41,  115 => 39,  113 => 38,  110 => 37,  106 => 35,  103 => 34,  99 => 32,  96 => 31,  92 => 29,  89 => 28,  85 => 26,  82 => 25,  78 => 23,  75 => 22,  71 => 20,  68 => 19,  64 => 17,  61 => 16,  57 => 14,  54 => 13,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	{% if handicap == TRUE %}*/
/* 		<p>Vous etes handicape.</p>*/
/* 	{% endif %}*/
/* 	{% if handicap == FALSE %}*/
/* 		<p>Vous n'etes pas handicape.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 0 %}*/
/* 	<p>Vous etes le mari du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 1 %}*/
/* 	<p>Vous etes un ascendant direct du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 2 %}*/
/* 	<p>Vous etes le fils ou la fils du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 3 %}*/
/* 	<p>Vous etes le petit-fils/petite-fille ou arriere-petit-fils/arriere-petite-fille du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 4 %}*/
/* 	<p>Vous etes le frere ou la soeur du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 5 %}*/
/* 	<p>Vous etes le neveu ou la niece du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 6 %}*/
/* 	<p>Vous etes parent jusqu'au 4eme degre inclus du defunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 7 %}*/
/* 	<p>Vous etes sans lien de sang avec le defunt ou parent du 5eme degre minimum.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 8 %}*/
/* 	<p>Vous etes le partenaire de PACS du defunt.</p>*/
/* 	{% endif %}*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	{% if lien == 8 %}*/
/* 	<p>Le partenaire d'un PACS n'a pas de vocation successorale sauf dispositions testamentaires.</p>*/
/* 	{% endif %}*/
/* 	<h6>Le montant de la taxe a payer</h6>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>Votre heritage</th>*/
/* 		<th>Cout Droit de succession</th>*/
/* 		<th>Heritage apres payement de la taxe</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{{somme| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{result| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
