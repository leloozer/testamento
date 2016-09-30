<?php

/* SuccessFacileBundle:Site:resultatm_r.html.twig */
class __TwigTemplate_a8e2e509940055e74ba4efc70bf80dd09ee57d1f6069192cb1f524821603ecd6 extends Twig_Template
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
        $__internal_c0fcae04b3cf42080946044e882aa626157d97cf5f15601f236ec53259535306 = $this->env->getExtension("native_profiler");
        $__internal_c0fcae04b3cf42080946044e882aa626157d97cf5f15601f236ec53259535306->enter($__internal_c0fcae04b3cf42080946044e882aa626157d97cf5f15601f236ec53259535306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatm_r.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0fcae04b3cf42080946044e882aa626157d97cf5f15601f236ec53259535306->leave($__internal_c0fcae04b3cf42080946044e882aa626157d97cf5f15601f236ec53259535306_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4961f10da345a43861cc3e5feac5c105248afa00b770a4ade81e079be02dfa8 = $this->env->getExtension("native_profiler");
        $__internal_f4961f10da345a43861cc3e5feac5c105248afa00b770a4ade81e079be02dfa8->enter($__internal_f4961f10da345a43861cc3e5feac5c105248afa00b770a4ade81e079be02dfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre situation</h3>
\t\t</div>
\t<p>Vous êtes marié(e)</p>
\t<p><strong>Vous avez</strong> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["enfant_all"]) ? $context["enfant_all"] : $this->getContext($context, "enfant_all")), "html", null, true);
        echo " enfant(s) dont ";
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " commun, ";
        echo twig_escape_filter($this->env, (isset($context["enfant_conjoint"]) ? $context["enfant_conjoint"] : $this->getContext($context, "enfant_conjoint")), "html", null, true);
        echo " de votre conjoint et ";
        echo twig_escape_filter($this->env, (isset($context["enfant_perso"]) ? $context["enfant_perso"] : $this->getContext($context, "enfant_perso")), "html", null, true);
        echo " d'une précédente relation.</p>
\t<p>Les ";
        // line 14
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
        // line 23
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " euros dont vous détenez ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% en 
";
        // line 24
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 25
            echo "en pleine propriété
";
        }
        // line 27
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 28
            echo "en SCI
";
        }
        // line 30
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 31
            echo "en indivision
";
        }
        // line 33
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 34
            echo "en Nue_propriété
";
        }
        // line 36
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 37
            echo "en Usufruit
";
        }
        // line 39
        echo "soit la valeur de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre épargne:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 42
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
\t\t<th>Votre repartition</th>
\t\t<th>Valeur recu</th>
\t\t<th>Cout taxe de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Conjoint survivant</td>
\t\t<td>";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt2"]) ? $context["conjoint_opt2"] : $this->getContext($context, "conjoint_opt2")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe de succession</td>
\t</tr>
\t<tr>
\t\t<td>Part par enfant</td>
\t\t<td>";
        // line 66
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt2"]) ? $context["enfant_opt2"] : $this->getContext($context, "enfant_opt2")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
        
        $__internal_f4961f10da345a43861cc3e5feac5c105248afa00b770a4ade81e079be02dfa8->leave($__internal_f4961f10da345a43861cc3e5feac5c105248afa00b770a4ade81e079be02dfa8_prof);

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
        return array (  160 => 67,  156 => 66,  148 => 61,  126 => 42,  122 => 41,  118 => 40,  113 => 39,  109 => 37,  107 => 36,  103 => 34,  101 => 33,  97 => 31,  95 => 30,  91 => 28,  89 => 27,  85 => 25,  83 => 24,  77 => 23,  65 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 	<div class="col-lg-6">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-user" style="font-size:300%;"></span>*/
/* 		<h3>Votre situation</h3>*/
/* 		</div>*/
/* 	<p>Vous êtes marié(e)</p>*/
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
