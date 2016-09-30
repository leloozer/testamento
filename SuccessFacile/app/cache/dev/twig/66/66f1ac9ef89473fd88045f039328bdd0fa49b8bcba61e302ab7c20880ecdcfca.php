<?php

/* SuccessFacileBundle:Site:resultatm_ne.html.twig */
class __TwigTemplate_6f6c6e084ec886d87da3204377395e1db7392479ec782018cf69d43563838c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatm_ne.html.twig", 1);
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
        $__internal_fa901516a10f4656bebc8c89ec95cf28fb50989a8d5b61335cb84d180aafc861 = $this->env->getExtension("native_profiler");
        $__internal_fa901516a10f4656bebc8c89ec95cf28fb50989a8d5b61335cb84d180aafc861->enter($__internal_fa901516a10f4656bebc8c89ec95cf28fb50989a8d5b61335cb84d180aafc861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatm_ne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa901516a10f4656bebc8c89ec95cf28fb50989a8d5b61335cb84d180aafc861->leave($__internal_fa901516a10f4656bebc8c89ec95cf28fb50989a8d5b61335cb84d180aafc861_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dca8c1fc198b0ac11d7c1734e64ad3a84cb2f2391163522747f6ca982b229e8d = $this->env->getExtension("native_profiler");
        $__internal_dca8c1fc198b0ac11d7c1734e64ad3a84cb2f2391163522747f6ca982b229e8d->enter($__internal_dca8c1fc198b0ac11d7c1734e64ad3a84cb2f2391163522747f6ca982b229e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.situ1", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</p>
\t<p>Vous avez ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p>";
        // line 14
        echo $this->env->getExtension('translator')->trans("result.nochild", array(), "SuccessFacileBundle");
        echo "</p>
\t<p>";
        // line 15
        echo $this->env->getExtension('translator')->trans("result.abschild", array(), "SuccessFacileBundle");
        echo "</p>
\t";
        // line 16
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) {
            // line 17
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.momtrue", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 19
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == false)) {
            // line 20
            echo "\t<p>";
            echo $this->env->getExtension('translator')->trans("result.momfalse", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 22
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true)) {
            // line 23
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.paptrue", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 25
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == false)) {
            // line 26
            echo "\t<p> ";
            echo $this->env->getExtension('translator')->trans("result.papfalse", array(), "SuccessFacileBundle");
            echo "</p>
\t";
        }
        // line 28
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
\t<h4>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.don", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h4>
\t<tr class=\"warning\">
\t\t<th>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.revenant", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.proportion", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.value", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Le conjoint survivant</td>
\t\t<td> ";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.100pat", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</td>
\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>0 euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<h4> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.notdon", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h4>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.revenant", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.proportion", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.value", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Le conjoint survivant</td>
\t\t";
        // line 96
        if ((((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) && ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            echo "\t
\t\t<td>
\t\t<td> ";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t";
        } elseif (((        // line 99
(isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) || ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            echo "\t
\t\t<td> ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.75pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t";
        } elseif (((        // line 101
(isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == false) && ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == false))) {
            echo "\t
\t\t<td> ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.100pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t";
        }
        // line 104
        echo "\t\t<td>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partM"]) ? $context["partM"] : $this->getContext($context, "partM")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>0 euros</td>
\t</tr>
\t\t";
        // line 107
        if ((((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) || ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            echo "\t

\t<tr>
\t\t<td>Part par parent survivant</td>
\t\t<td> ";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.25pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : $this->getContext($context, "partP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 113
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : $this->getContext($context, "taxeP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t\t";
        }
        // line 116
        echo "\t</tbody>
\t</table>
";
        
        $__internal_dca8c1fc198b0ac11d7c1734e64ad3a84cb2f2391163522747f6ca982b229e8d->leave($__internal_dca8c1fc198b0ac11d7c1734e64ad3a84cb2f2391163522747f6ca982b229e8d_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatm_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 116,  319 => 113,  315 => 112,  311 => 111,  304 => 107,  297 => 104,  292 => 102,  288 => 101,  284 => 100,  280 => 99,  276 => 98,  271 => 96,  262 => 90,  258 => 89,  254 => 88,  250 => 87,  243 => 83,  235 => 78,  231 => 77,  222 => 71,  218 => 70,  214 => 69,  210 => 68,  205 => 66,  198 => 62,  187 => 56,  181 => 55,  175 => 54,  169 => 53,  164 => 51,  162 => 50,  157 => 48,  155 => 47,  150 => 45,  148 => 44,  143 => 42,  141 => 41,  136 => 39,  134 => 38,  124 => 37,  119 => 35,  104 => 28,  98 => 26,  95 => 25,  89 => 23,  86 => 22,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<p>{{'result.situ1' |trans }}</p>*/
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
/* 	<h4>{{'result.don' |trans }}</h4>*/
/* 	<tr class="warning">*/
/* 		<th>{{'tab.revenant' | trans}}</th>*/
/* 		<th>{{'tab.proportion' | trans}}</th>*/
/* 		<th>{{'tab.value' |trans}}</th>*/
/* 		<th>{{'tab.taxe' |trans}}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Le conjoint survivant</td>*/
/* 		<td> {{'tab.100pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>0 euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<h4> {{'result.notdon' |trans}}</h4>*/
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
/* 		<td>Le conjoint survivant</td>*/
/* 		{%if mere == TRUE and pere == TRUE %}	*/
/* 		<td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		{% elseif mere == TRUE or pere == TRUE %}	*/
/* 		<td> {{'tab.75pat' |trans}}</td>*/
/* 		{% elseif mere == FALSE and pere == FALSE %}	*/
/* 		<td> {{'tab.100pat' |trans}}</td>*/
/* 		{%endif%}*/
/* 		<td>{{partM| number_format(2,',',' ')}} euros</td>*/
/* 		<td>0 euros</td>*/
/* 	</tr>*/
/* 		{%if mere == TRUE or pere == TRUE %}	*/
/* */
/* 	<tr>*/
/* 		<td>Part par parent survivant</td>*/
/* 		<td> {{'tab.25pat' |trans}}</td>*/
/* 		<td>{{partP| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeP| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 		{%endif%}*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
