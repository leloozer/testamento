<?php

/* SuccessFacileBundle:Site:resultatp_r.html.twig */
class __TwigTemplate_da637875d4649a24083d7de496bff74d754ff3a0b2343abdc045f0ca23ece67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatp_r.html.twig", 1);
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
        $__internal_243d50efea6fdc75a2add840e0290fd4e97a04a5808c0a20281e8fb85aa27bbc = $this->env->getExtension("native_profiler");
        $__internal_243d50efea6fdc75a2add840e0290fd4e97a04a5808c0a20281e8fb85aa27bbc->enter($__internal_243d50efea6fdc75a2add840e0290fd4e97a04a5808c0a20281e8fb85aa27bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatp_r.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243d50efea6fdc75a2add840e0290fd4e97a04a5808c0a20281e8fb85aa27bbc->leave($__internal_243d50efea6fdc75a2add840e0290fd4e97a04a5808c0a20281e8fb85aa27bbc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80bef0441da385bf3d3bba1e06ac1664c6a9be27e3fcf59305f00f1371524d3d = $this->env->getExtension("native_profiler");
        $__internal_80bef0441da385bf3d3bba1e06ac1664c6a9be27e3fcf59305f00f1371524d3d->enter($__internal_80bef0441da385bf3d3bba1e06ac1664c6a9be27e3fcf59305f00f1371524d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre situation</h3>
\t\t</div>
\t<p>Vous êtes pacsé(e).</p>
\t<p><strong>Vous avez</strong> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["enfant_all"]) ? $context["enfant_all"] : $this->getContext($context, "enfant_all")), "html", null, true);
        echo " enfant(s) dont ";
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " commun, ";
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : $this->getContext($context, "enfant_conjoint")), "html", null, true);
        echo " de votre conjoint et ";
        echo twig_escape_filter($this->env, (isset($context["enfant_perso"]) ? $context["enfant_perso"] : $this->getContext($context, "enfant_perso")), "html", null, true);
        echo " d'une précédente relation.</p>
\t<p>Les ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : $this->getContext($context, "enfant_conjoint")), "html", null, true);
        echo " enfant(s) de votre conjoint n'ont pas de succession</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre patrimoine</h3>
\t\t</div>
\t<p><strong>Valeur de votre residence:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " euros dont vous détenez ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% en 
";
        // line 25
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 26
            echo "en pleine propriété
";
        }
        // line 28
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 29
            echo "en SCI
";
        }
        // line 31
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 32
            echo "en indivision
";
        }
        // line 34
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 35
            echo "en Nue_propriété
";
        }
        // line 37
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 38
            echo "en Usufruit
";
        }
        // line 40
        echo "soit la valeur de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre épargne:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : $this->getContext($context, "patrimoine")), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-stats\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre Bilan</h3>
\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
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
        // line 63
        echo twig_escape_filter($this->env, (isset($context["enfant_part"]) ? $context["enfant_part"] : $this->getContext($context, "enfant_part")), "html", null, true);
        echo " du patrimoine total</td>
\t\t<td>";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 65
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<div class=\"container\">
\t<div class=\"col-lg-5\">
\t<div class = \"row\">
<p>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.apropos", array(), "SuccessFacileBundle"), "html", null, true);
        echo " <a href=\"https://testamento.fr/fr\">ici.</a></p>
</div>
</div>
</div>
<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>
";
        
        $__internal_80bef0441da385bf3d3bba1e06ac1664c6a9be27e3fcf59305f00f1371524d3d->leave($__internal_80bef0441da385bf3d3bba1e06ac1664c6a9be27e3fcf59305f00f1371524d3d_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatp_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 72,  157 => 65,  153 => 64,  149 => 63,  126 => 43,  122 => 42,  118 => 41,  113 => 40,  109 => 38,  107 => 37,  103 => 35,  101 => 34,  97 => 32,  95 => 31,  91 => 29,  89 => 28,  85 => 26,  83 => 25,  77 => 24,  65 => 15,  55 => 14,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* 	{%block body %}*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 	<div class="col-lg-6">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-user" style="font-size:300%;"></span>*/
/* 		<h3>Votre situation</h3>*/
/* 		</div>*/
/* 	<p>Vous êtes pacsé(e).</p>*/
/* 	<p><strong>Vous avez</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant_all}} enfant(s) dont {{enfant}} commun, {{enfant_conjoint}} de votre conjoint et {{enfant_perso}} d'une précédente relation.</p>*/
/* 	<p>Les {{enfant_conjoint}} enfant(s) de votre conjoint n'ont pas de succession</p>*/
/* 	</div>*/
/* 	</div>*/
/* 	<div class="col-lg-6">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-euro" style="font-size:300%;"></span>*/
/* 		<h3>Votre patrimoine</h3>*/
/* 		</div>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residencetotal| number_format(2, ',',' ')}} euros dont vous détenez {{pourcent_residence}}% en */
/* {%if opt_residence == 0 %}*/
/* en pleine propriété*/
/* {% endif %}*/
/* {%if opt_residence == 1 %}*/
/* en SCI*/
/* {% endif %}*/
/* {%if opt_residence == 2 %}*/
/* en indivision*/
/* {% endif %}*/
/* {%if opt_residence == 3 %}*/
/* en Nue_propriété*/
/* {% endif %}*/
/* {%if opt_residence == 4 %}*/
/* en Usufruit*/
/* {% endif %}*/
/* soit la valeur de {{residencefinal | number_format(2, ',', ' ')}} euros</p>*/
/* 	<p><strong>Montant de votre épargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	</div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-stats" style="font-size:300%;"></span>*/
/* 		<h3>Votre Bilan</h3>*/
/* 	</div>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="warning">*/
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
/* 	<div class="container">*/
/* 	<div class="col-lg-5">*/
/* 	<div class = "row">*/
/* <p>{{'result.apropos' | trans}} <a href="https://testamento.fr/fr">ici.</a></p>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>*/
/* {%endblock%}*/
/* */
