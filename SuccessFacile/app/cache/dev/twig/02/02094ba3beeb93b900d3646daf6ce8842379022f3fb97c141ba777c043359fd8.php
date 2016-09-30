<?php

/* SuccessFacileBundle:Site:formpatrimoine.html.twig */
class __TwigTemplate_01a548062c3d187509bc0f41d3af134616343d6dd181a88f587a23db2cdacef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:formpatrimoine.html.twig", 1);
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
        $__internal_4cf7f41aa5fd515349538cbcbd6f6a77170d3f6cf1634da48e4b5f25e803f3db = $this->env->getExtension("native_profiler");
        $__internal_4cf7f41aa5fd515349538cbcbd6f6a77170d3f6cf1634da48e4b5f25e803f3db->enter($__internal_4cf7f41aa5fd515349538cbcbd6f6a77170d3f6cf1634da48e4b5f25e803f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:formpatrimoine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf7f41aa5fd515349538cbcbd6f6a77170d3f6cf1634da48e4b5f25e803f3db->leave($__internal_4cf7f41aa5fd515349538cbcbd6f6a77170d3f6cf1634da48e4b5f25e803f3db_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_01c9aa486389e8afd551cc750919905b10e3c2355bc87fac67cf36257f7720f7 = $this->env->getExtension("native_profiler");
        $__internal_01c9aa486389e8afd551cc750919905b10e3c2355bc87fac67cf36257f7720f7->enter($__internal_01c9aa486389e8afd551cc750919905b10e3c2355bc87fac67cf36257f7720f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%;\">
    40%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("formpatrimoine");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "residence", array()), 'label', array("label" => "Résidence principale (en euros)"));
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "residence", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "residence", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "opt_residence", array()), 'label', array("label" => "Degré de propriété"));
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "opt_residence", array()), 'errors');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "opt_residence", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "epargne", array()), 'label', array("label" => "Épargne (en euros)"));
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "epargne", array()), 'errors');
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "epargne", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "autre", array()), 'label', array("label" => "Mobilier, véhicules et autres (en euros)"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "autre", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "autre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_01c9aa486389e8afd551cc750919905b10e3c2355bc87fac67cf36257f7720f7->leave($__internal_01c9aa486389e8afd551cc750919905b10e3c2355bc87fac67cf36257f7720f7_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:formpatrimoine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  106 => 29,  102 => 28,  98 => 27,  92 => 24,  88 => 23,  84 => 22,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  56 => 12,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">*/
/*     40%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action="{{path('formpatrimoine')}}" method="POST" {{form_enctype(form1)}}>*/
/* 			<div>*/
/* 				{{form_label(form1.residence, "Résidence principale (en euros)")}}*/
/* 				{{form_errors(form1.residence)}}*/
/* 				{{form_widget(form1.residence)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.opt_residence, "Degré de propriété")}}*/
/* 				{{form_errors(form1.opt_residence)}}*/
/* 				{{form_widget(form1.opt_residence)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.epargne, "Épargne (en euros)")}}*/
/* 				{{form_errors(form1.epargne)}}*/
/* 				{{form_widget(form1.epargne)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.autre, "Mobilier, véhicules et autres (en euros)")}}*/
/* 				{{form_errors(form1.autre)}}*/
/* 				{{form_widget(form1.autre)}}*/
/* 			</div>*/
/* 				{{form_rest(form1)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
