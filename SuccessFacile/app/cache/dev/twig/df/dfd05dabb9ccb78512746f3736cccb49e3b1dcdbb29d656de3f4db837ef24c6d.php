<?php

/* SuccessFacileBundle:Site:resultatm_nr.html.twig */
class __TwigTemplate_802d5ea599e3b963e1807adadf2ba9dc47096986effd57aefc8762e29a6267b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatm_nr.html.twig", 1);
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
        $__internal_8f8fb262db6d963c1dd30c33312fc423a1acb637f90243b8794bd498af520eb5 = $this->env->getExtension("native_profiler");
        $__internal_8f8fb262db6d963c1dd30c33312fc423a1acb637f90243b8794bd498af520eb5->enter($__internal_8f8fb262db6d963c1dd30c33312fc423a1acb637f90243b8794bd498af520eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatm_nr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8fb262db6d963c1dd30c33312fc423a1acb637f90243b8794bd498af520eb5->leave($__internal_8f8fb262db6d963c1dd30c33312fc423a1acb637f90243b8794bd498af520eb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc7fd1943b210fcc177145b91d3fdec93784e2d6ac74e910ef104f7ab3ab20e = $this->env->getExtension("native_profiler");
        $__internal_adc7fd1943b210fcc177145b91d3fdec93784e2d6ac74e910ef104f7ab3ab20e->enter($__internal_adc7fd1943b210fcc177145b91d3fdec93784e2d6ac74e910ef104f7ab3ab20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<p><strong>Vous avez</strong> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " enfant(s)</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.patrimoinetitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<p><strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence1", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence2", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% 
";
        // line 24
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence0", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 27
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence1", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 30
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence2", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 33
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence3", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 36
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.optresidence4", array(), "SuccessFacileBundle"), "html", null, true);
            echo "
";
        }
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valresidence3", array(), "SuccessFacileBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.valepargne", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.autre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>";
        // line 42
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("result.rapporttitre", array(), "SuccessFacileBundle"), "html", null, true);
        echo "</h3>
\t\t</div>
\t<p><strong>Valeur de l'usufruit fiscal(Art. 669 CGI)</strong> ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["val_usufruit"]) ? $context["val_usufruit"] : $this->getContext($context, "val_usufruit")), "html", null, true);
        echo "%</p>
\t<p><strong>Valeur de la Nue-Propriété</strong> ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["nue_propriete"]) ? $context["nue_propriete"] : $this->getContext($context, "nue_propriete")), "html", null, true);
        echo "%</p>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>Votre répartition</th>
\t\t<th>1/4 en pleine propriété</th>
\t\t<th>Taxe 1/4 en pleine propriété</th>
\t\t<th>Totalité de la succession en usufruit</th>
\t\t<th>Taxe Totalité de la succession en usufruit</th>
\t\t<th>Option 3</th>
\t\t<th>Taxe option 3</th>
\t\t<th>Quotité disponible en pleine propriété</th>
\t\t<th>Taxe Quotité disponible en pleine propriété</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>Conjoint survivant</td>
\t\t<td>";
        // line 69
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt2"]) ? $context["conjoint_opt2"] : $this->getContext($context, "conjoint_opt2")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 71
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt1"]) ? $context["conjoint_opt1"] : $this->getContext($context, "conjoint_opt1")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt3"]) ? $context["conjoint_opt3"] : $this->getContext($context, "conjoint_opt3")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t\t<td>";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["conjoint_opt4"]) ? $context["conjoint_opt4"] : $this->getContext($context, "conjoint_opt4")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>Pas de taxe au conjoint</td>
\t</tr>
\t<tr>
\t\t<td>Part par enfant</td>
\t\t<td>";
        // line 80
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt2"]) ? $context["enfant_opt2"] : $this->getContext($context, "enfant_opt2")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 81
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt2"]) ? $context["taxe_opt2"] : $this->getContext($context, "taxe_opt2")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 82
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt1"]) ? $context["enfant_opt1"] : $this->getContext($context, "enfant_opt1")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt1"]) ? $context["taxe_opt1"] : $this->getContext($context, "taxe_opt1")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 84
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt3"]) ? $context["enfant_opt3"] : $this->getContext($context, "enfant_opt3")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 85
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt3"]) ? $context["taxe_opt3"] : $this->getContext($context, "taxe_opt3")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 86
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["enfant_opt4"]) ? $context["enfant_opt4"] : $this->getContext($context, "enfant_opt4")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 87
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxe_opt4"]) ? $context["taxe_opt4"] : $this->getContext($context, "taxe_opt4")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
";
        
        $__internal_adc7fd1943b210fcc177145b91d3fdec93784e2d6ac74e910ef104f7ab3ab20e->leave($__internal_adc7fd1943b210fcc177145b91d3fdec93784e2d6ac74e910ef104f7ab3ab20e_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatm_nr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 87,  227 => 86,  223 => 85,  219 => 84,  215 => 83,  211 => 82,  207 => 81,  203 => 80,  195 => 75,  190 => 73,  185 => 71,  180 => 69,  159 => 51,  155 => 50,  150 => 48,  139 => 42,  133 => 41,  127 => 40,  121 => 39,  116 => 37,  114 => 36,  109 => 34,  107 => 33,  102 => 31,  100 => 30,  95 => 28,  93 => 27,  88 => 25,  86 => 24,  76 => 23,  71 => 21,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
/* 	<p><strong>Vous avez</strong> {{age}} ans</p>*/
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
/* 	<p><strong>Valeur de l'usufruit fiscal(Art. 669 CGI)</strong> {{val_usufruit}}%</p>*/
/* 	<p><strong>Valeur de la Nue-Propriété</strong> {{nue_propriete}}%</p>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="warning">*/
/* 		<th>Votre répartition</th>*/
/* 		<th>1/4 en pleine propriété</th>*/
/* 		<th>Taxe 1/4 en pleine propriété</th>*/
/* 		<th>Totalité de la succession en usufruit</th>*/
/* 		<th>Taxe Totalité de la succession en usufruit</th>*/
/* 		<th>Option 3</th>*/
/* 		<th>Taxe option 3</th>*/
/* 		<th>Quotité disponible en pleine propriété</th>*/
/* 		<th>Taxe Quotité disponible en pleine propriété</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>Conjoint survivant</td>*/
/* 		<td>{{conjoint_opt2| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt1|number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt3| number_format(2, ',',' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 		<td>{{conjoint_opt4| number_format(2,',',' ')}} euros</td>*/
/* 		<td>Pas de taxe au conjoint</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td>Part par enfant</td>*/
/* 		<td>{{enfant_opt2| number_format(2,',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt2| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt1| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt1| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt3| number_format(2,',', ' ')}} euros</td>*/
/* 		<td>{{taxe_opt3| number_format(2, ',', ' ')}} euros</td>*/
/* 		<td>{{enfant_opt4| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxe_opt4| number_format(2, ',', ' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
