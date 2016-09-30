<?php

/* SuccessFacileBundle:Site:resultatbase_ne.html.twig */
class __TwigTemplate_9ca0f61372352342ca6e5094a1357414661ec37e6e73c69370b7c530af6bee49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatbase_ne.html.twig", 1);
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
        $__internal_b26ed78860e3e3f312e901f122df2efbd42db4c674dfc4e6b2712d8ecea0de4e = $this->env->getExtension("native_profiler");
        $__internal_b26ed78860e3e3f312e901f122df2efbd42db4c674dfc4e6b2712d8ecea0de4e->enter($__internal_b26ed78860e3e3f312e901f122df2efbd42db4c674dfc4e6b2712d8ecea0de4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatbase_ne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b26ed78860e3e3f312e901f122df2efbd42db4c674dfc4e6b2712d8ecea0de4e->leave($__internal_b26ed78860e3e3f312e901f122df2efbd42db4c674dfc4e6b2712d8ecea0de4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5602c14c30432d1a7675fe8d3306da13d5f6d1850e2c414eb22c49c6f61b3ad2 = $this->env->getExtension("native_profiler");
        $__internal_5602c14c30432d1a7675fe8d3306da13d5f6d1850e2c414eb22c49c6f61b3ad2->enter($__internal_5602c14c30432d1a7675fe8d3306da13d5f6d1850e2c414eb22c49c6f61b3ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\t<p>Vous avez ";
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p>";
        // line 28
        echo $this->env->getExtension('translator')->trans("result.nochild", array(), "SuccessFacileBundle");
        echo "</p>
\t<p>";
        // line 29
        echo $this->env->getExtension('translator')->trans("result.abschild", array(), "SuccessFacileBundle");
        echo "</p>
\t";
        // line 30
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) {
            // line 31
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.momtrue", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 33
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == false)) {
            // line 34
            echo "\t<p>";
            echo $this->env->getExtension('translator')->trans("result.momfalse", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 36
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true)) {
            // line 37
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.paptrue", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 39
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == false)) {
            // line 40
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.papfalse", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 42
        echo "\t<p> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.nbsibling1", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.nbsibling2", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.patrimoinetitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<p><strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence1", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence2", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% 
";
        // line 52
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence0", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 55
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence1", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 58
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence2", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 61
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence3", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 64
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence4", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence3", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valepargne", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.autre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 70
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
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.rapporttitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.revenant", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.proportion", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.value", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 88
        if ((((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) || ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            // line 89
            echo "\t<tr>
\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.parenttrue", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t ";
            // line 91
            if (((((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0) && ((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) && ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
                // line 92
                echo "\t\t<td> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.100pat", array(), "SuccessFacileBundle"), "html", null, true);
                echo "</td>
\t\t ";
            } elseif ((            // line 93
(isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0)) {
                // line 94
                echo "\t\t<td> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
                echo "</td>
\t\t";
            }
            // line 96
            echo "\t\t ";
            if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
                // line 97
                echo "\t\t<td> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.25pat", array(), "SuccessFacileBundle"), "html", null, true);
                echo "</td>
\t\t";
            }
            // line 99
            echo "\t\t<td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : $this->getContext($context, "partP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : $this->getContext($context, "taxeP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 103
        echo "\t\t ";
        if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
            // line 104
            echo "\t<tr>
\t\t<td>";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.sibling", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["pourcentE"]) ? $context["pourcentE"] : $this->getContext($context, "pourcentE")), "html", null, true);
            echo "% ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.patall", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partE"]) ? $context["partE"] : $this->getContext($context, "partE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeE"]) ? $context["taxeE"] : $this->getContext($context, "taxeE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t\t";
        }
        // line 111
        echo "\t</tbody>
\t</table>
\t</div>
\t<div class=\"container\">
\t<div class=\"col-lg-5\">
\t<div class = \"row\">
\t<div class=\"success\">
<p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.apropos", array(), "SuccessFacileBundle"), "html", null, true);
        echo " <a href=\"https://testamento.fr/fr\">ici.</a></p>
</div>
</div>
</div>
</div>
<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>
";
        
        $__internal_5602c14c30432d1a7675fe8d3306da13d5f6d1850e2c414eb22c49c6f61b3ad2->leave($__internal_5602c14c30432d1a7675fe8d3306da13d5f6d1850e2c414eb22c49c6f61b3ad2_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatbase_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 118,  336 => 111,  330 => 108,  326 => 107,  320 => 106,  316 => 105,  313 => 104,  310 => 103,  304 => 100,  299 => 99,  293 => 97,  290 => 96,  284 => 94,  282 => 93,  277 => 92,  275 => 91,  271 => 90,  268 => 89,  266 => 88,  259 => 84,  255 => 83,  251 => 82,  247 => 81,  239 => 76,  228 => 70,  222 => 69,  216 => 68,  210 => 67,  205 => 65,  203 => 64,  198 => 62,  196 => 61,  191 => 59,  189 => 58,  184 => 56,  182 => 55,  177 => 53,  175 => 52,  165 => 51,  160 => 49,  145 => 42,  139 => 40,  136 => 39,  130 => 37,  127 => 36,  121 => 34,  118 => 33,  112 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 27,  91 => 25,  88 => 24,  82 => 22,  79 => 21,  73 => 19,  70 => 18,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<p>Vous avez {{age}} ans</p>*/
/* 	<p>{{ 'result.nochild' |trans | raw }}</p>*/
/* 	<p>{{ 'result.abschild' |trans | raw }}</p>*/
/* 	{% if mere == TRUE %}*/
/* 	<p> {{ 'result.momtrue' |trans |raw }}</p>*/
/* 	{% endif %}*/
/* 	{% if mere == FALSE %}*/
/* 	<p>{{ 'result.momfalse' |trans |raw }}</p>*/
/* 	{% endif %}*/
/* 	{% if pere == TRUE %}*/
/* 	<p> {{ 'result.paptrue' |trans |raw }}</p>*/
/* 	{% endif %}*/
/* 	{% if pere == FALSE %}*/
/* 	<p> {{ 'result.papfalse' |trans |raw }}</p>*/
/* 	{% endif %}*/
/* 	<p> {{ 'result.nbsibling1' | trans}} {{siblings}} {{ 'result.nbsibling2' |trans}}</p>*/
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
/* 	{% if mere == TRUE or pere == TRUE%}*/
/* 	<tr>*/
/* 		<td>{{'tab.parenttrue' |trans}}</td>*/
/* 		 {% if siblings == 0 and mere == TRUE and pere == TRUE %}*/
/* 		<td> {{'tab.100pat' |trans}}</td>*/
/* 		 {% elseif siblings == 0 %}*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 		<td> {{'tab.25pat' |trans}}</td>*/
/* 		{% endif %}*/
/* 		<td>{{partP| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeP| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 	<tr>*/
/* 		<td>{{'tab.sibling' |trans}}</td>*/
/* 		<td> {{pourcentE}}% {{'tab.patall' | trans}}</td>*/
/* 		<td>{{partE| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeE| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	<div class="col-lg-5">*/
/* 	<div class = "row">*/
/* 	<div class="success">*/
/* <p>{{'result.apropos' | trans}} <a href="https://testamento.fr/fr">ici.</a></p>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>*/
/* {%endblock%}*/
/* */
/* */
