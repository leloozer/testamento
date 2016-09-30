<?php

/* SuccessFacileBundle:Site:resultatgp.html.twig */
class __TwigTemplate_638ff25e8e76cb8defbfa10640925fac316d7db62d1fc4b854468d0259161b31 extends Twig_Template
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
        $__internal_1b0d7088ff507de43122e0c670fb357929217424caafc41fcbc158e7d511842b = $this->env->getExtension("native_profiler");
        $__internal_1b0d7088ff507de43122e0c670fb357929217424caafc41fcbc158e7d511842b->enter($__internal_1b0d7088ff507de43122e0c670fb357929217424caafc41fcbc158e7d511842b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatgp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b0d7088ff507de43122e0c670fb357929217424caafc41fcbc158e7d511842b->leave($__internal_1b0d7088ff507de43122e0c670fb357929217424caafc41fcbc158e7d511842b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f8bf3c40ceedc37f8025f3907e67d036c68f05e4d1169d39f56f86653469fc = $this->env->getExtension("native_profiler");
        $__internal_66f8bf3c40ceedc37f8025f3907e67d036c68f05e4d1169d39f56f86653469fc->enter($__internal_66f8bf3c40ceedc37f8025f3907e67d036c68f05e4d1169d39f56f86653469fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.noparent", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</p>
\t<p>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.nosibling", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</p>
\t";
        // line 31
        if (((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == true)) {
            // line 32
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.gppaterneltrue", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 34
        echo "\t";
        if (((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == false)) {
            // line 35
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.gppaternelfalse", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 37
        echo "\t";
        if (((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == true)) {
            // line 38
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.gpmaterneltrue", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 40
        echo "\t";
        if (((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == false)) {
            // line 41
            echo "\t<p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.gpmaternelfalse", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</p>
\t";
        }
        // line 43
        echo "\t</div>
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
\t</div>
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
        if ((((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == true) && ((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == true))) {
            // line 89
            echo "\t<tr>
\t\t<td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.part2gp", array(), "SuccessFacileBundle"), "html", null, true);
            echo "Part par grand-parent vivant</td>
\t\t<td> ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 96
        echo "\t";
        if ((((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == false) && ((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == false))) {
            // line 97
            echo "\t<tr>
\t\t<td>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.partmaternel", array(), "SuccessFacileBundle"), "html", null, true);
            echo "Part famille maternel</td>
\t\t<td> ";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 100
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe++", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t</tr>
\t<tr>
\t\t<td>";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.partpaternel", array(), "SuccessFacileBundle"), "html", null, true);
            echo "Part famille paternel</td>
\t\t<td> ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 106
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td> ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe++", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 110
        echo "\t";
        if (((((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == false) && ((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == true)) || (((isset($context["gpm"]) ? $context["gpm"] : $this->getContext($context, "gpm")) == false) && ((isset($context["gpp"]) ? $context["gpp"] : $this->getContext($context, "gpp")) == true)))) {
            // line 111
            echo "\t<tr>
\t\t<td>";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.part2gp", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe"]) ? $context["taxe"] : $this->getContext($context, "taxe")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t<tr>
\t\t<td>Part pour l'autre famille</td>
\t\t<td> ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.50pat", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 120
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["part"]) ? $context["part"] : $this->getContext($context, "part")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td> ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("tab.taxe++", array(), "SuccessFacileBundle"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        // line 124
        echo "\t</tbody>
\t</table>
\t</div>
";
        
        $__internal_66f8bf3c40ceedc37f8025f3907e67d036c68f05e4d1169d39f56f86653469fc->leave($__internal_66f8bf3c40ceedc37f8025f3907e67d036c68f05e4d1169d39f56f86653469fc_prof);

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
        return array (  367 => 124,  361 => 121,  357 => 120,  353 => 119,  346 => 115,  342 => 114,  338 => 113,  334 => 112,  331 => 111,  328 => 110,  322 => 107,  318 => 106,  314 => 105,  310 => 104,  304 => 101,  300 => 100,  296 => 99,  292 => 98,  289 => 97,  286 => 96,  280 => 93,  276 => 92,  272 => 91,  268 => 90,  265 => 89,  263 => 88,  256 => 84,  252 => 83,  248 => 82,  244 => 81,  236 => 76,  225 => 70,  219 => 69,  213 => 68,  207 => 67,  202 => 65,  200 => 64,  195 => 62,  193 => 61,  188 => 59,  186 => 58,  181 => 56,  179 => 55,  174 => 53,  172 => 52,  162 => 51,  157 => 49,  149 => 43,  143 => 41,  140 => 40,  134 => 38,  131 => 37,  125 => 35,  122 => 34,  116 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 27,  91 => 25,  88 => 24,  82 => 22,  79 => 21,  73 => 19,  70 => 18,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<p>{{ 'result.noparent' |trans }}</p>*/
/* 	<p>{{ 'result.nosibling' |trans}}</p>*/
/* 	{% if gpp == TRUE %}*/
/* 	<p>{{ 'result.gppaterneltrue' |trans}}</p>*/
/* 	{% endif %}*/
/* 	{% if gpp == FALSE %}*/
/* 	<p>{{ 'result.gppaternelfalse' |trans}}</p>*/
/* 	{% endif %}*/
/* 	{% if gpm == TRUE %}*/
/* 	<p>{{ 'result.gpmaterneltrue' |trans}}</p>*/
/* 	{% endif %}*/
/* 	{% if gpm == FALSE %}*/
/* 	<p>{{ 'result.gpmaternelfalse' |trans}}</p>*/
/* 	{% endif %}*/
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
/* 	</div>*/
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
/* 	{% if gpp == TRUE and gpm == TRUE %}*/
/* 	<tr>*/
/* 		<td>{{'tab.part2gp' | trans}}Part par grand-parent vivant</td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe | number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	{% if gpp == FALSE and gpm == FALSE %}*/
/* 	<tr>*/
/* 		<td>{{'tab.partmaternel' | trans}}Part famille maternel</td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{'tab.taxe++' |trans}}</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>{{'tab.partpaternel' |trans}}Part famille paternel</td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td> {{'tab.taxe++' |trans}}</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	{% if (gpp == FALSE and gpm == TRUE) or (gpm == FALSE and gpp == TRUE) %}*/
/* 	<tr>*/
/* 		<td>{{'tab.part2gp' |trans}}</td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe | number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part pour l'autre famille</td>*/
/* 		<td> {{'tab.50pat' |trans}}</td>*/
/* 		<td>{{part| number_format(2,',',' ')}} euros</td>*/
/* 		<td> {{'tab.taxe++' |trans}}</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* {%endblock%}*/
/* */
/* */
