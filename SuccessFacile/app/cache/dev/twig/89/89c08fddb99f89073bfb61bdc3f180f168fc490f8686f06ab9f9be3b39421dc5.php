<?php

/* SuccessFacileBundle:Site:resultatc_ne.html.twig */
class __TwigTemplate_4f2d2ff5ffa9f52e084872e84bfdc2279dd5f43cf54cd584a11161e1138eabb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatc_ne.html.twig", 1);
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
        $__internal_070f7ea67c60ac183b47fb75b6c7317cf6150c9cb9dd6461c57cc39f8fc714d4 = $this->env->getExtension("native_profiler");
        $__internal_070f7ea67c60ac183b47fb75b6c7317cf6150c9cb9dd6461c57cc39f8fc714d4->enter($__internal_070f7ea67c60ac183b47fb75b6c7317cf6150c9cb9dd6461c57cc39f8fc714d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatc_ne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070f7ea67c60ac183b47fb75b6c7317cf6150c9cb9dd6461c57cc39f8fc714d4->leave($__internal_070f7ea67c60ac183b47fb75b6c7317cf6150c9cb9dd6461c57cc39f8fc714d4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3678f10e6d7857172727bbdf603af8311588b7ddb7128a538a22cc792882accf = $this->env->getExtension("native_profiler");
        $__internal_3678f10e6d7857172727bbdf603af8311588b7ddb7128a538a22cc792882accf->enter($__internal_3678f10e6d7857172727bbdf603af8311588b7ddb7128a538a22cc792882accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre situation</h3>
\t\t</div>
\t<p>Vous êtes célibataire</p>
\t<p>Vous avez ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p>Vous n'avez pas d'enfant</p>
\t<p>En l'absence de conjoint et d'enfants, les héritiers réservataires sont les ascendants et/ou les frères et soeurs.</p>
\t";
        // line 15
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) {
            // line 16
            echo "\t<p>Votre mère est vivante.</p>
\t";
        }
        // line 18
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == false)) {
            // line 19
            echo "\t<p>Votre mère est décédée.</p>
\t";
        }
        // line 21
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true)) {
            // line 22
            echo "\t<p>Votre père est vivant.</p>
\t";
        }
        // line 24
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == false)) {
            // line 25
            echo "\t<p>Votre père est décédé.</p>
\t";
        }
        // line 27
        echo "\t<p>Vous avez ";
        echo twig_escape_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")), "html", null, true);
        echo " frères et soeurs</p>
\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-euro\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre patrimoine</h3>
\t\t</div>
\t<p><strong>Valeur de votre résidence:</strong> ";
        // line 36
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " euros dont vous détenez ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% en 
";
        // line 37
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 38
            echo "en pleine propriété
";
        }
        // line 40
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 41
            echo "en SCI
";
        }
        // line 43
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 44
            echo "en indivision
";
        }
        // line 46
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 47
            echo "en Nue_propriété
";
        }
        // line 49
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 50
            echo "en Usufruit
";
        }
        // line 52
        echo "soit la valeur de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre épargne:</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : $this->getContext($context, "patrimoine")), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-stats\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre Rapport</h3>
\t\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"warning\">
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Cout Droit de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 73
        if ((((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) || ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            // line 74
            echo "\t<tr>
\t\t<td>Part par parent vivant</td>
\t\t ";
            // line 76
            if (((((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0) && ((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) && ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
                // line 77
                echo "\t\t<td> 100% du patrimoine total</td>
\t\t ";
            } elseif ((            // line 78
(isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0)) {
                // line 79
                echo "\t\t<td> 50% du patrimoine total</td>
\t\t";
            }
            // line 81
            echo "\t\t ";
            if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
                // line 82
                echo "\t\t<td> 25% du patrimoine total</td>
\t\t";
            }
            // line 84
            echo "\t\t<td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : $this->getContext($context, "partP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : $this->getContext($context, "taxeP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 88
        echo "\t\t ";
        if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
            // line 89
            echo "\t<tr>
\t\t<td>Part par frère et soeur</td>
\t\t<td> ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["pourcentE"]) ? $context["pourcentE"] : $this->getContext($context, "pourcentE")), "html", null, true);
            echo "% du patrimoine total</td>
\t\t<td>";
            // line 92
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partE"]) ? $context["partE"] : $this->getContext($context, "partE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeE"]) ? $context["taxeE"] : $this->getContext($context, "taxeE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t\t";
        }
        // line 96
        echo "\t</tbody>
\t</table>
\t</div>
";
        
        $__internal_3678f10e6d7857172727bbdf603af8311588b7ddb7128a538a22cc792882accf->leave($__internal_3678f10e6d7857172727bbdf603af8311588b7ddb7128a538a22cc792882accf_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatc_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 96,  217 => 93,  213 => 92,  209 => 91,  205 => 89,  202 => 88,  196 => 85,  191 => 84,  187 => 82,  184 => 81,  180 => 79,  178 => 78,  175 => 77,  173 => 76,  169 => 74,  167 => 73,  146 => 55,  142 => 54,  138 => 53,  133 => 52,  129 => 50,  127 => 49,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  111 => 41,  109 => 40,  105 => 38,  103 => 37,  97 => 36,  84 => 27,  80 => 25,  77 => 24,  73 => 22,  70 => 21,  66 => 19,  63 => 18,  59 => 16,  57 => 15,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
/* 	<p>Vous êtes célibataire</p>*/
/* 	<p>Vous avez {{age}} ans</p>*/
/* 	<p>Vous n'avez pas d'enfant</p>*/
/* 	<p>En l'absence de conjoint et d'enfants, les héritiers réservataires sont les ascendants et/ou les frères et soeurs.</p>*/
/* 	{% if mere == TRUE %}*/
/* 	<p>Votre mère est vivante.</p>*/
/* 	{% endif %}*/
/* 	{% if mere == FALSE %}*/
/* 	<p>Votre mère est décédée.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == TRUE %}*/
/* 	<p>Votre père est vivant.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == FALSE %}*/
/* 	<p>Votre père est décédé.</p>*/
/* 	{% endif %}*/
/* 	<p>Vous avez {{siblings}} frères et soeurs</p>*/
/* 	</div>*/
/* 	</div>*/
/* 	<div class="col-lg-6">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-euro" style="font-size:300%;"></span>*/
/* 		<h3>Votre patrimoine</h3>*/
/* 		</div>*/
/* 	<p><strong>Valeur de votre résidence:</strong> {{residencetotal| number_format(2, ',',' ')}} euros dont vous détenez {{pourcent_residence}}% en */
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
/* 		<h3>Votre Rapport</h3>*/
/* 		</div>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="warning">*/
/* 		<th>Revenant</th>*/
/* 		<th>Proportion</th>*/
/* 		<th>Valeur</th>*/
/* 		<th>Cout Droit de succession</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	{% if mere == TRUE or pere == TRUE%}*/
/* 	<tr>*/
/* 		<td>Part par parent vivant</td>*/
/* 		 {% if siblings == 0 and mere == TRUE and pere == TRUE %}*/
/* 		<td> 100% du patrimoine total</td>*/
/* 		 {% elseif siblings == 0 %}*/
/* 		<td> 50% du patrimoine total</td>*/
/* 		{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 		<td> 25% du patrimoine total</td>*/
/* 		{% endif %}*/
/* 		<td>{{partP| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeP| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	{% endif %}*/
/* 		 {% if siblings != 0 %}*/
/* 	<tr>*/
/* 		<td>Part par frère et soeur</td>*/
/* 		<td> {{pourcentE}}% du patrimoine total</td>*/
/* 		<td>{{partE| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeE| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</div>*/
/* {%endblock%}*/
/* */
/* */
