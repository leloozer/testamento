<?php

/* SuccessFacileBundle:Site:resultatd_ne.html.twig */
class __TwigTemplate_e45b56df3dbe7bba5c109d79347d26bc7a4971b5ecdc6db6ca981b9f18d22e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:resultatd_ne.html.twig", 1);
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
        $__internal_8ac06333eeeeca5bdc9c14d1aae7a2967467daa40552518526d4fa3d543cf248 = $this->env->getExtension("native_profiler");
        $__internal_8ac06333eeeeca5bdc9c14d1aae7a2967467daa40552518526d4fa3d543cf248->enter($__internal_8ac06333eeeeca5bdc9c14d1aae7a2967467daa40552518526d4fa3d543cf248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:resultatd_ne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac06333eeeeca5bdc9c14d1aae7a2967467daa40552518526d4fa3d543cf248->leave($__internal_8ac06333eeeeca5bdc9c14d1aae7a2967467daa40552518526d4fa3d543cf248_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_41b3ad79a47fa5211855235434788f19becbdeac2059aa4e064747100b663bd0 = $this->env->getExtension("native_profiler");
        $__internal_41b3ad79a47fa5211855235434788f19becbdeac2059aa4e064747100b663bd0->enter($__internal_41b3ad79a47fa5211855235434788f19becbdeac2059aa4e064747100b663bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h2>Votre Situation:</h2>
\t<p><h5>Vous etes divorce et sans enfant</h5></p>
\t<p><strong>Vous avez</strong> ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : $this->getContext($context, "age")), "html", null, true);
        echo " ans</p>
\t<p><strong>Vous avez</strong> ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["enfant"]) ? $context["enfant"] : $this->getContext($context, "enfant")), "html", null, true);
        echo " enfant(s)</p>
\t<p><strong>Valeur de votre residence:</strong> ";
        // line 7
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencetotal"]) ? $context["residencetotal"] : $this->getContext($context, "residencetotal")), 2, ",", " "), "html", null, true);
        echo " euros dont vous detenez ";
        echo twig_escape_filter($this->env, (isset($context["pourcent_residence"]) ? $context["pourcent_residence"] : $this->getContext($context, "pourcent_residence")), "html", null, true);
        echo "% en 
";
        // line 8
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 0)) {
            // line 9
            echo "en pleine propriete
";
        }
        // line 11
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 1)) {
            // line 12
            echo "en SCI
";
        }
        // line 14
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 2)) {
            // line 15
            echo "en indivision
";
        }
        // line 17
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 3)) {
            // line 18
            echo "en Nue_propriete
";
        }
        // line 20
        if (((isset($context["opt_residence"]) ? $context["opt_residence"] : $this->getContext($context, "opt_residence")) == 4)) {
            // line 21
            echo "en Usufruit
";
        }
        // line 23
        echo "soit la valeur de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["residencefinal"]) ? $context["residencefinal"] : $this->getContext($context, "residencefinal")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Montant de votre epargne:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["epargne"]) ? $context["epargne"] : $this->getContext($context, "epargne")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Autre:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p><strong>Soit un patrimoine de</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : $this->getContext($context, "patrimoine")), 2, ",", " "), "html", null, true);
        echo " euros.</p>
\t<h2>Votre Bilan:</h2>
\t<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>
\t";
        // line 29
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) {
            // line 30
            echo "\t<p>Votre mere est vivante.</p>
\t";
        }
        // line 32
        echo "\t";
        if (((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == false)) {
            // line 33
            echo "\t<p>Votre mere est decede.</p>
\t";
        }
        // line 35
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true)) {
            // line 36
            echo "\t<p>Votre pere est vivante.</p>
\t";
        }
        // line 38
        echo "\t";
        if (((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == false)) {
            // line 39
            echo "\t<p>Votre pere est decede.</p>
\t";
        }
        // line 41
        echo "\t<p>Vous avez ";
        echo twig_escape_filter($this->env, (isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")), "html", null, true);
        echo " freres et soeurs</p>
\t<h2>Vos solutions</h2>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr>
\t\t<th>Revenant</th>
\t\t<th>Proportion</th>
\t\t<th>Valeur</th>
\t\t<th>Cout Droit de succession</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 53
        if ((((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true) || ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
            // line 54
            echo "\t<tr>
\t\t<td>Part par parent vivant</td>
\t\t ";
            // line 56
            if (((((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0) && ((isset($context["mere"]) ? $context["mere"] : $this->getContext($context, "mere")) == true)) && ((isset($context["pere"]) ? $context["pere"] : $this->getContext($context, "pere")) == true))) {
                // line 57
                echo "\t\t<td> 100% du patrimoine total</td>
\t\t ";
            } elseif ((            // line 58
(isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) == 0)) {
                // line 59
                echo "\t\t<td> 50% du patrimoine total</td>
\t\t";
            }
            // line 61
            echo "\t\t ";
            if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
                // line 62
                echo "\t\t<td> 25% du patrimoine total</td>
\t\t";
            }
            // line 64
            echo "\t\t<td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partP"]) ? $context["partP"] : $this->getContext($context, "partP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeP"]) ? $context["taxeP"] : $this->getContext($context, "taxeP")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t";
        }
        // line 68
        echo "\t\t ";
        if (((isset($context["siblings"]) ? $context["siblings"] : $this->getContext($context, "siblings")) != 0)) {
            // line 69
            echo "\t<tr>
\t\t<td>Part par frere et soeurs</td>
\t\t<td> ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["pourcentE"]) ? $context["pourcentE"] : $this->getContext($context, "pourcentE")), "html", null, true);
            echo "% du patrimoine total</td>
\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["partE"]) ? $context["partE"] : $this->getContext($context, "partE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["taxeE"]) ? $context["taxeE"] : $this->getContext($context, "taxeE")), 2, ",", " "), "html", null, true);
            echo " euros</td>
\t</tr>
\t\t";
        }
        // line 76
        echo "\t</tbody>
\t</table>
";
        
        $__internal_41b3ad79a47fa5211855235434788f19becbdeac2059aa4e064747100b663bd0->leave($__internal_41b3ad79a47fa5211855235434788f19becbdeac2059aa4e064747100b663bd0_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:resultatd_ne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 76,  200 => 73,  196 => 72,  192 => 71,  188 => 69,  185 => 68,  179 => 65,  174 => 64,  170 => 62,  167 => 61,  163 => 59,  161 => 58,  158 => 57,  156 => 56,  152 => 54,  150 => 53,  134 => 41,  130 => 39,  127 => 38,  123 => 36,  120 => 35,  116 => 33,  113 => 32,  109 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  88 => 23,  84 => 21,  82 => 20,  78 => 18,  76 => 17,  72 => 15,  70 => 14,  66 => 12,  64 => 11,  60 => 9,  58 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<h2>Votre Situation:</h2>*/
/* 	<p><h5>Vous etes divorce et sans enfant</h5></p>*/
/* 	<p><strong>Vous avez</strong> {{age}} ans</p>*/
/* 	<p><strong>Vous avez</strong> {{enfant}} enfant(s)</p>*/
/* 	<p><strong>Valeur de votre residence:</strong> {{residencetotal| number_format(2, ',',' ')}} euros dont vous detenez {{pourcent_residence}}% en */
/* {%if opt_residence == 0 %}*/
/* en pleine propriete*/
/* {% endif %}*/
/* {%if opt_residence == 1 %}*/
/* en SCI*/
/* {% endif %}*/
/* {%if opt_residence == 2 %}*/
/* en indivision*/
/* {% endif %}*/
/* {%if opt_residence == 3 %}*/
/* en Nue_propriete*/
/* {% endif %}*/
/* {%if opt_residence == 4 %}*/
/* en Usufruit*/
/* {% endif %}*/
/* soit la valeur de {{residencefinal | number_format(2, ',', ' ')}} euros</p>*/
/* 	<p><strong>Montant de votre epargne:</strong> {{epargne| number_format(2,',', ' ')}} euros</p>*/
/* 	<p><strong>Autre:</strong> {{autre|number_format(2,',',' ')}} euros</p>*/
/* 	<p><strong>Soit un patrimoine de</strong> {{patrimoine|number_format(2,',',' ')}} euros.</p>*/
/* 	<h2>Votre Bilan:</h2>*/
/* 	<p>En l'absence de conjoint et d'enfants, les heritiers reservataires sont les ascendants et/ou les freres et soeurs.</p>*/
/* 	{% if mere == TRUE %}*/
/* 	<p>Votre mere est vivante.</p>*/
/* 	{% endif %}*/
/* 	{% if mere == FALSE %}*/
/* 	<p>Votre mere est decede.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == TRUE %}*/
/* 	<p>Votre pere est vivante.</p>*/
/* 	{% endif %}*/
/* 	{% if pere == FALSE %}*/
/* 	<p>Votre pere est decede.</p>*/
/* 	{% endif %}*/
/* 	<p>Vous avez {{siblings}} freres et soeurs</p>*/
/* 	<h2>Vos solutions</h2>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr>*/
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
/* 		<td>Part par frere et soeurs</td>*/
/* 		<td> {{pourcentE}}% du patrimoine total</td>*/
/* 		<td>{{partE| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{taxeE| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/* {%endblock%}*/
/* */
/* */
