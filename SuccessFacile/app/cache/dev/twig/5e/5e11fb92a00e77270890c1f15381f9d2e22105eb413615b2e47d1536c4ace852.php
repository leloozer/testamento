<?php

/* SuccessFacileBundle:Combien:result.html.twig */
class __TwigTemplate_19458c2c818b6c8fadab0a02a40af86dd89e158891535c841504b5866b09e692 extends Twig_Template
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
        $__internal_09ec997e5f5133aecefdb4dc43f821ce0789ed9e8a9293ef0044026178fea756 = $this->env->getExtension("native_profiler");
        $__internal_09ec997e5f5133aecefdb4dc43f821ce0789ed9e8a9293ef0044026178fea756->enter($__internal_09ec997e5f5133aecefdb4dc43f821ce0789ed9e8a9293ef0044026178fea756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Combien:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ec997e5f5133aecefdb4dc43f821ce0789ed9e8a9293ef0044026178fea756->leave($__internal_09ec997e5f5133aecefdb4dc43f821ce0789ed9e8a9293ef0044026178fea756_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a07aef37f2ff95c3e98090b1e191ab5312571384a19cc69c709061df89bcd29 = $this->env->getExtension("native_profiler");
        $__internal_5a07aef37f2ff95c3e98090b1e191ab5312571384a19cc69c709061df89bcd29->enter($__internal_5a07aef37f2ff95c3e98090b1e191ab5312571384a19cc69c709061df89bcd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-15\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre situation</h3>
\t\t</div>
\t";
        // line 11
        if (((isset($context["handicap"]) ? $context["handicap"] : $this->getContext($context, "handicap")) == true)) {
            // line 12
            echo "\t\t<p>Vous êtes handicapé(e).</p>
\t";
        }
        // line 14
        echo "\t";
        if (((isset($context["handicap"]) ? $context["handicap"] : $this->getContext($context, "handicap")) == false)) {
            // line 15
            echo "\t\t<p>Vous n'êtes pas handicapé(e).</p>
\t";
        }
        // line 17
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 0)) {
            // line 18
            echo "\t<p>Vous êtes le mari du défunt.</p>
\t";
        }
        // line 20
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 1)) {
            // line 21
            echo "\t<p>Vous êtes un ascendant direct du défunt.</p>
\t";
        }
        // line 23
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 2)) {
            // line 24
            echo "\t<p>Vous êtes le fils ou la fille du défunt.</p>
\t";
        }
        // line 26
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 3)) {
            // line 27
            echo "\t<p>Vous êtes le petit-fils/petite-fille ou arrière-petit-fils/arrière-petite-fille du défunt.</p>
\t";
        }
        // line 29
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 4)) {
            // line 30
            echo "\t<p>Vous êtes le frère ou la soeur du défunt.</p>
\t";
        }
        // line 32
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 5)) {
            // line 33
            echo "\t<p>Vous êtes le neveu ou la nièce du défunt.</p>
\t";
        }
        // line 35
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 6)) {
            // line 36
            echo "\t<p>Vous êtes parent jusqu'au 4ème degré inclus du défunt.</p>
\t";
        }
        // line 38
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 7)) {
            // line 39
            echo "\t<p>Vous êtes sans lien de sang avec le défunt ou parent du 5ème degré minimum.</p>
\t";
        }
        // line 41
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 8)) {
            // line 42
            echo "\t<p>Vous êtes le partenaire de PACS du défunt.</p>
\t";
        }
        // line 44
        echo "\t";
        if (((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")) == 8)) {
            // line 45
            echo "\t<p>Le partenaire d'un PACS n'a pas de vocation successorale sauf dispositions testamentaires.</p>
\t";
        }
        // line 47
        echo "\t</div>
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-usd\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre Bilan</h3>
\t\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"success\">
\t\t<th>Votre héritage</th>
\t\t<th>Droits de succession à payer</th>
\t\t<th>Montant net à recevoir</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["somme"]) ? $context["somme"] : $this->getContext($context, "somme")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>
";
        
        $__internal_5a07aef37f2ff95c3e98090b1e191ab5312571384a19cc69c709061df89bcd29->leave($__internal_5a07aef37f2ff95c3e98090b1e191ab5312571384a19cc69c709061df89bcd29_prof);

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
        return array (  158 => 64,  154 => 63,  150 => 62,  133 => 47,  129 => 45,  126 => 44,  122 => 42,  119 => 41,  115 => 39,  112 => 38,  108 => 36,  105 => 35,  101 => 33,  98 => 32,  94 => 30,  91 => 29,  87 => 27,  84 => 26,  80 => 24,  77 => 23,  73 => 21,  70 => 20,  66 => 18,  63 => 17,  59 => 15,  56 => 14,  52 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 	<div class="col-lg-15">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-user" style="font-size:300%;"></span>*/
/* 		<h3>Votre situation</h3>*/
/* 		</div>*/
/* 	{% if handicap == TRUE %}*/
/* 		<p>Vous êtes handicapé(e).</p>*/
/* 	{% endif %}*/
/* 	{% if handicap == FALSE %}*/
/* 		<p>Vous n'êtes pas handicapé(e).</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 0 %}*/
/* 	<p>Vous êtes le mari du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 1 %}*/
/* 	<p>Vous êtes un ascendant direct du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 2 %}*/
/* 	<p>Vous êtes le fils ou la fille du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 3 %}*/
/* 	<p>Vous êtes le petit-fils/petite-fille ou arrière-petit-fils/arrière-petite-fille du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 4 %}*/
/* 	<p>Vous êtes le frère ou la soeur du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 5 %}*/
/* 	<p>Vous êtes le neveu ou la nièce du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 6 %}*/
/* 	<p>Vous êtes parent jusqu'au 4ème degré inclus du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 7 %}*/
/* 	<p>Vous êtes sans lien de sang avec le défunt ou parent du 5ème degré minimum.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 8 %}*/
/* 	<p>Vous êtes le partenaire de PACS du défunt.</p>*/
/* 	{% endif %}*/
/* 	{% if lien == 8 %}*/
/* 	<p>Le partenaire d'un PACS n'a pas de vocation successorale sauf dispositions testamentaires.</p>*/
/* 	{% endif %}*/
/* 	</div>*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-usd" style="font-size:300%;"></span>*/
/* 		<h3>Votre Bilan</h3>*/
/* 		</div>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="success">*/
/* 		<th>Votre héritage</th>*/
/* 		<th>Droits de succession à payer</th>*/
/* 		<th>Montant net à recevoir</th>*/
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
/* 	<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>*/
/* {%endblock%}*/
/* */
/* */
