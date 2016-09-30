<?php

/* SuccessFacileBundle:Site:resultatec_r.html.twig */
class __TwigTemplate_3b1585237b4d15f72fcc9811c56fd445a1613fe97ac0d7684325962f7fd8bf84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatec_r.html.twig", 1);
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
        $__internal_43f2f4bad33e8fa34ddb0ec897113f345adc67e749c60d9e32bcffa48c3275d8 = $this->env->getExtension("native_profiler");
        $__internal_43f2f4bad33e8fa34ddb0ec897113f345adc67e749c60d9e32bcffa48c3275d8->enter($__internal_43f2f4bad33e8fa34ddb0ec897113f345adc67e749c60d9e32bcffa48c3275d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatec_r.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f2f4bad33e8fa34ddb0ec897113f345adc67e749c60d9e32bcffa48c3275d8->leave($__internal_43f2f4bad33e8fa34ddb0ec897113f345adc67e749c60d9e32bcffa48c3275d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6135817f506348b593ff59cc6915d25e8df7db39721479b710ef5679d83ecfb8 = $this->env->getExtension("native_profiler");
        $__internal_6135817f506348b593ff59cc6915d25e8df7db39721479b710ef5679d83ecfb8->enter($__internal_6135817f506348b593ff59cc6915d25e8df7db39721479b710ef5679d83ecfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>";
        // line 10
        echo $this->env->getExtension('translator')->trans("result.situtitre", array(), "SuccessFacileBundle");
        echo "</h3>
\t\t</div>
\t<p><h5>";
        // line 12
        echo $this->env->getExtension('translator')->trans("result.situ6", array(), "SuccessFacileBundle");
        echo "</h5></p>
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
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.childconjoint", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.patrimoinetitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<p><strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence1", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence2", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% 
";
        // line 25
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence0", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 28
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence1", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 31
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence2", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 34
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence3", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 37
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence4", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence3", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valepargne", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.autre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.allpat", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : $this->getContext($context, "patrimoine")), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-stats\" style=\"font-size:300%;\"></span>
\t\t<h3>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.rapporttitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.revenant", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.proportion", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.value", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.partchild", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</td>
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
";
        
        $__internal_6135817f506348b593ff59cc6915d25e8df7db39721479b710ef5679d83ecfb8->leave($__internal_6135817f506348b593ff59cc6915d25e8df7db39721479b710ef5679d83ecfb8_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatec_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  198 => 64,  194 => 63,  190 => 62,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  162 => 49,  151 => 43,  145 => 42,  139 => 41,  133 => 40,  128 => 38,  126 => 37,  121 => 35,  119 => 34,  114 => 32,  112 => 31,  107 => 29,  105 => 28,  100 => 26,  98 => 25,  88 => 24,  83 => 22,  71 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 		<h3>{{ 'result.situtitre' |trans |raw}}</h3>*/
/* 		</div>*/
/* 	<p><h5>{{ 'result.situ6' | trans | raw }}</h5></p>*/
/* 	<p><strong>Vous avez</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant_all}} enfant(s) dont {{enfant}} commun, {{enfant_conjoint}} de votre conjoint et {{enfant_perso}} d'une précédente relation.</p>*/
/* 	<p>Les {{enfant_conjoint}} {{'result.childconjoint' | trans}}</p>*/
/* 	</div>*/
/* 	</div>*/
/* 	<div class="col-lg-6">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-euro" style="font-size:300%;"></span>*/
/* 		<h3> {{ 'result.patrimoinetitre' | trans }}</h3>*/
/* 		</div>*/
/* 	<p><strong>{{ 'result.valresidence1' |trans}}</strong> {{residencetotal| number_format(2, ',',' ')}} {{'result.valresidence2' |trans }} {{pourcent_residence}}% */
/* {%if opt_residence == 0 %}*/
/* {{'result.optresidence0' | trans }}*/
/* {% endif %}*/
/* {%if opt_residence == 1 %}*/
/* {{ 'result.optresidence1' | trans }}*/
/* {% endif %}*/
/* {%if opt_residence == 2 %}*/
/* {{'result.optresidence2' |trans }}*/
/* {% endif %}*/
/* {%if opt_residence == 3 %}*/
/* {{'result.optresidence3' |trans }}*/
/* {% endif %}*/
/* {%if opt_residence == 4 %}*/
/* {{'result.optresidence4' |trans }}*/
/* {% endif %}*/
/* {{'result.valresidence3' |trans }} {{residencefinal | number_format(2, ',', ' ')}} euros</p>*/
/* 	<p><strong>{{'result.valepargne' |trans }}</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>{{'result.autre' |trans }}</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>{{'result.allpat' |trans}}</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	</div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-stats" style="font-size:300%;"></span>*/
/* 		<h3>{{'result.rapporttitre' | trans}}</h3>*/
/* 		</div>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="warning">*/
/* 		<th>{{'tab.revenant' | trans}}</th>*/
/* 		<th>{{'tab.proportion' | trans}}</th>*/
/* 		<th>{{'tab.value' |trans}}</th>*/
/* 		<th>{{'tab.taxe' |trans}}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{{ 'tab.partchild' | trans}}</td>*/
/* 		<td>1/{{enfant_part}} du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
