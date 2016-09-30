<?php

/* SuccessFacileBundle:Site:formpourcent.html.twig */
class __TwigTemplate_5850f3580b62662e5aed973e7067045e96b6c68186a44bd58d137f706e75da59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:formpourcent.html.twig", 1);
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
        $__internal_b8cde3df6eea557fd2714172dc9b934a325e13de62a37ed0c0dff063d973ed2a = $this->env->getExtension("native_profiler");
        $__internal_b8cde3df6eea557fd2714172dc9b934a325e13de62a37ed0c0dff063d973ed2a->enter($__internal_b8cde3df6eea557fd2714172dc9b934a325e13de62a37ed0c0dff063d973ed2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:formpourcent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cde3df6eea557fd2714172dc9b934a325e13de62a37ed0c0dff063d973ed2a->leave($__internal_b8cde3df6eea557fd2714172dc9b934a325e13de62a37ed0c0dff063d973ed2a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fb71ca2776cc76c87d0629f6c08db3b0393b0746df9084e2f9fddec07ed344c = $this->env->getExtension("native_profiler");
        $__internal_3fb71ca2776cc76c87d0629f6c08db3b0393b0746df9084e2f9fddec07ed344c->enter($__internal_3fb71ca2776cc76c87d0629f6c08db3b0393b0746df9084e2f9fddec07ed344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">
    60%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("formpourcent");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo ">
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "pourcent_residence", array()), 'label', array("label" => "Votre degré de propriété (en %)"));
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "pourcent_residence", array()), 'errors');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "pourcent_residence", array()), 'widget');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_3fb71ca2776cc76c87d0629f6c08db3b0393b0746df9084e2f9fddec07ed344c->leave($__internal_3fb71ca2776cc76c87d0629f6c08db3b0393b0746df9084e2f9fddec07ed344c_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:formpourcent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  63 => 13,  59 => 12,  55 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">*/
/*     60%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action="{{path('formpourcent')}}" method="POST" {{form_enctype(form1)}}>*/
/* 				{{form_label(form1.pourcent_residence, "Votre degré de propriété (en %)")}}*/
/* 				{{form_errors(form1.pourcent_residence)}}*/
/* 				{{form_widget(form1.pourcent_residence)}}*/
/* 				{{form_rest(form1)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
