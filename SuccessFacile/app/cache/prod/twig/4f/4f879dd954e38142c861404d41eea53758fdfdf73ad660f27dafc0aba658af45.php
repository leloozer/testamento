<?php

/* SuccessFacileBundle:Site:form_p_r.html.twig */
class __TwigTemplate_77e1debeff29019ea2c2b0b26a24eab429af81e3e3795d53e5508a5fac3128bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:form_p_r.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<h3>Option Pacs et Famille recomposee</h3></br>
<div class=\"well\">
\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("P_R");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "age", array()), 'label', array("label" => "Age au deces (ans)"));
        echo "
\t \t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "age", array()), 'errors');
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "age", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<h5>Descendants:</h5>
\t\t\t<div>
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant", array()), 'label', array("label" => "Nombre d'enfants du couple"));
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant", array()), 'errors');
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_conjoint", array()), 'label', array("label" => "Nombre d'enfants du conjoint"));
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_conjoint", array()), 'errors');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_conjoint", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_perso", array()), 'label', array("label" => "Nombre d'enfants a vous"));
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_perso", array()), 'errors');
        echo "
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant_perso", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<h5>Patrimoine:</h5>
\t\t\t<div>
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'label', array("label" => "Residence principale (en euros)"));
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'errors');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'label', array("label" => "Epargne (en euros)"));
        echo "
\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'errors');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'label', array("label" => "Mobilier, vehicules et autres (en euros)"));
        echo "
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'errors');
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn\">
\t\t</form>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:form_p_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  136 => 41,  132 => 40,  128 => 39,  122 => 36,  118 => 35,  114 => 34,  108 => 31,  104 => 30,  100 => 29,  93 => 25,  89 => 24,  85 => 23,  79 => 20,  75 => 19,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h3>Option Pacs et Famille recomposee</h3></br>*/
/* <div class="well">*/
/* 		<form action="{{path('P_R')}}" method="POST" {{form_enctype(form1)}}>*/
/* 			<div>*/
/* 				{{form_label(form1.age, "Age au deces (ans)")}}*/
/* 	 			{{form_errors(form1.age)}}*/
/* 				{{form_widget(form1.age)}}*/
/* 			</div>*/
/* 			<h5>Descendants:</h5>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant, "Nombre d'enfants du couple")}}*/
/* 				{{form_errors(form1.enfant)}}*/
/* 				{{form_widget(form1.enfant)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant_conjoint, "Nombre d'enfants du conjoint")}}*/
/* 				{{form_errors(form1.enfant_conjoint)}}*/
/* 				{{form_widget(form1.enfant_conjoint)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant_perso, "Nombre d'enfants a vous")}}*/
/* 				{{form_errors(form1.enfant_perso)}}*/
/* 				{{form_widget(form1.enfant_perso)}}*/
/* 			</div>*/
/* 			<h5>Patrimoine:</h5>*/
/* 			<div>*/
/* 				{{form_label(form1.residence, "Residence principale (en euros)")}}*/
/* 				{{form_errors(form1.residence)}}*/
/* 				{{form_widget(form1.residence)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.epargne, "Epargne (en euros)")}}*/
/* 				{{form_errors(form1.epargne)}}*/
/* 				{{form_widget(form1.epargne)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.autre, "Mobilier, vehicules et autres (en euros)")}}*/
/* 				{{form_errors(form1.autre)}}*/
/* 				{{form_widget(form1.autre)}}*/
/* 			</div>*/
/* 				{{form_rest(form1)}}*/
/* 			<input type="submit" id="formok" class= "btn btn">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
