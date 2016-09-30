<?php

/* SuccessFacileBundle:Site:form_d_nr.html.twig */
class __TwigTemplate_3a730b65b859f3004e5481261a58a791ebb17c810d53ad017ad947fb984a72a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:form_d_nr.html.twig", 1);
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
        echo "\t<h3>Option Divorce(e) et Famille non recomposee</h3></br>
<div class=\"well\">
\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("D_NR");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "enfant", array()), 'label', array("label" => "Nombre d'enfants"));
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
\t\t\t<h5>Patrimoine:</h5>
\t\t\t<div>
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'label', array("label" => "Residence principale (en euros)"));
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'errors');
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "residence", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'label', array("label" => "Epargne (en euros)"));
        echo "
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'errors');
        echo "
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "epargne", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'label', array("label" => "Mobilier, vehicules et autres (en euros)"));
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'errors');
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "autre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn\">
\t\t</form>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:form_d_nr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  108 => 31,  104 => 30,  100 => 29,  94 => 26,  90 => 25,  86 => 24,  80 => 21,  76 => 20,  72 => 19,  65 => 15,  61 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h3>Option Divorce(e) et Famille non recomposee</h3></br>*/
/* <div class="well">*/
/* 		<form action="{{path('D_NR')}}" method="POST" {{form_enctype(form1)}}>*/
/* 			<div>*/
/* 				{{form_label(form1.age, "Age au deces (ans)")}}*/
/* 	 			{{form_errors(form1.age)}}*/
/* 				{{form_widget(form1.age)}}*/
/* 			</div>*/
/* 			<h5>Descendants:</h5>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant, "Nombre d'enfants")}}*/
/* 				{{form_errors(form1.enfant)}}*/
/* 				{{form_widget(form1.enfant)}}*/
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
