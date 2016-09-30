<?php

/* SuccessFacileBundle:Site:resultatbase_nr.html.twig */
class __TwigTemplate_fef2a6b0ccb8bae300e2c31b75822781f5594aaf8cf0bf7efe22189983217242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatbase_nr.html.twig", 1);
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
        $__internal_5a109207b08f2b2fdf653dc25c26005ef377984c7c21f18faf4eb44948e7ffa2 = $this->env->getExtension("native_profiler");
        $__internal_5a109207b08f2b2fdf653dc25c26005ef377984c7c21f18faf4eb44948e7ffa2->enter($__internal_5a109207b08f2b2fdf653dc25c26005ef377984c7c21f18faf4eb44948e7ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatbase_nr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a109207b08f2b2fdf653dc25c26005ef377984c7c21f18faf4eb44948e7ffa2->leave($__internal_5a109207b08f2b2fdf653dc25c26005ef377984c7c21f18faf4eb44948e7ffa2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adbaf74319007dc3c725e674df28f89e71ce786fa471b696baaaa47ad5176fd3 = $this->env->getExtension("native_profiler");
        $__internal_adbaf74319007dc3c725e674df28f89e71ce786fa471b696baaaa47ad5176fd3->enter($__internal_adbaf74319007dc3c725e674df28f89e71ce786fa471b696baaaa47ad5176fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "situ"), "method") == 0)) {
            // line 13
            echo "\t<p><h5>";
            echo $this->env->getExtension('translator')->trans("result.situ0", array(), "SuccessFacileBundle");
            echo "</h5></p>
\t";
        }
        // line 15
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "situ"), "method") == 2)) {
            // line 16
            echo "\t<p><h5>";
            echo $this->env->getExtension('translator')->trans("result.situ2", array(), "SuccessFacileBundle");
            echo "</h5></p>
\t";
        }
        // line 18
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "situ"), "method") == 3)) {
            // line 19
            echo "\t<p><h5>";
            echo $this->env->getExtension('translator')->trans("result.situ3", array(), "SuccessFacileBundle");
            echo "</h5></p>
\t";
        }
        // line 21
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "situ"), "method") == 5)) {
            // line 22
            echo "\t<p><h5>";
            echo $this->env->getExtension('translator')->trans("result.situ5", array(), "SuccessFacileBundle");
            echo "</h5></p>
\t";
        }
        // line 24
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "situ"), "method") == 6)) {
            // line 25
            echo "\t<p><h5>";
            echo $this->env->getExtension('translator')->trans("result.situ6", array(), "SuccessFacileBundle");
            echo "</h5></p>
\t";
        }
        // line 27
        echo "\t<p><strong>Votre &acirc;ge</strong> ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " enfant(s)</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.patrimoinetitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<p><strong>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence1", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence2", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% 
";
        // line 38
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence0", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 41
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence1", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 44
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence2", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 47
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence3", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 50
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence4", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence3", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valepargne", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.autre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 56
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
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.rapporttitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.revenant", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.proportion", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.value", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.partchild", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</td>
\t\t<td>1/";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " du patrimoine total</td>
\t\t<td>";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t</div>
<p>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.apropos", array(), "SuccessFacileBundle"), "html", null, true);
        echo " <a href=\"https://testamento.fr/fr\">ici.</a></p>
<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>
";
        
        $__internal_adbaf74319007dc3c725e674df28f89e71ce786fa471b696baaaa47ad5176fd3->leave($__internal_adbaf74319007dc3c725e674df28f89e71ce786fa471b696baaaa47ad5176fd3_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatbase_nr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 83,  231 => 78,  227 => 77,  223 => 76,  219 => 75,  211 => 70,  207 => 69,  203 => 68,  199 => 67,  191 => 62,  180 => 56,  174 => 55,  168 => 54,  162 => 53,  157 => 51,  155 => 50,  150 => 48,  148 => 47,  143 => 45,  141 => 44,  136 => 42,  134 => 41,  129 => 39,  127 => 38,  117 => 37,  112 => 35,  102 => 28,  97 => 27,  91 => 25,  88 => 24,  82 => 22,  79 => 21,  73 => 19,  70 => 18,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	{% if app.session.get('situ') == 0 %}*/
/* 	<p><h5>{{ 'result.situ0' | trans |raw }}</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 2 %}*/
/* 	<p><h5>{{ 'result.situ2' | trans |raw }}</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 3 %}*/
/* 	<p><h5>{{ 'result.situ3' | trans |raw }}</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 5 %}*/
/* 	<p><h5>{{ 'result.situ5' | trans | raw }}</h5></p>*/
/* 	{% endif %}*/
/* 	{% if app.session.get('situ') == 6 %}*/
/* 	<p><h5>{{ 'result.situ6' | trans | raw }}</h5></p>*/
/* 	{% endif %}*/
/* 	<p><strong>Votre &acirc;ge</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
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
/* 		<td>1/{{enfant}} du patrimoine total</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* <p>{{'result.apropos' | trans}} <a href="https://testamento.fr/fr">ici.</a></p>*/
/* <p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>*/
/* {%endblock%}*/
/* */
