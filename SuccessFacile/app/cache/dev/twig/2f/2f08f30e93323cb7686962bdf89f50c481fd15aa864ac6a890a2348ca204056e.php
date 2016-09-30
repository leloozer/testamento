<?php

/* SuccessFacileBundle:Combien:form.html.twig */
class __TwigTemplate_c5bdb0db00e1037f6b2ddbc441d0d0e66f225dc34d7ea23f4c36844f4cf03289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Combien:form.html.twig", 1);
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
        $__internal_cdaaebd216532dfb6efaf61075dc7ca1762a75e3d692ff3c8ab566fedad0bafb = $this->env->getExtension("native_profiler");
        $__internal_cdaaebd216532dfb6efaf61075dc7ca1762a75e3d692ff3c8ab566fedad0bafb->enter($__internal_cdaaebd216532dfb6efaf61075dc7ca1762a75e3d692ff3c8ab566fedad0bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Combien:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdaaebd216532dfb6efaf61075dc7ca1762a75e3d692ff3c8ab566fedad0bafb->leave($__internal_cdaaebd216532dfb6efaf61075dc7ca1762a75e3d692ff3c8ab566fedad0bafb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_06e39ec1584619ed6bff36499f30e0a0db4b1af8072c16dc29f661aef21d1956 = $this->env->getExtension("native_profiler");
        $__internal_06e39ec1584619ed6bff36499f30e0a0db4b1af8072c16dc29f661aef21d1956->enter($__internal_06e39ec1584619ed6bff36499f30e0a0db4b1af8072c16dc29f661aef21d1956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"form-group\">
\t\t<form method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "somme", array()), 'label', array("label" => "Somme de votre héritage (en euros)"));
        echo "
\t \t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "somme", array()), 'errors');
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "somme", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handicap", array()), 'label', array("label" => "Êtes vous handicapé(e)?"));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handicap", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "handicap", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'label', array("label" => "Quel est votre lien avec le défunt?"));
        echo "
\t \t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'errors');
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'widget');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_06e39ec1584619ed6bff36499f30e0a0db4b1af8072c16dc29f661aef21d1956->leave($__internal_06e39ec1584619ed6bff36499f30e0a0db4b1af8072c16dc29f661aef21d1956_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Combien:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  87 => 18,  83 => 17,  79 => 16,  74 => 14,  70 => 13,  66 => 12,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="form-group">*/
/* 		<form method="POST" {{form_enctype(form)}}>*/
/* 			{{form_errors(form)}}*/
/* 			<div>*/
/* 				{{form_label(form.somme, "Somme de votre héritage (en euros)")}}*/
/* 	 			{{form_errors(form.somme)}}*/
/* 				{{form_widget(form.somme)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form.handicap, "Êtes vous handicapé(e)?")}}*/
/* 	 			{{form_errors(form.handicap)}}*/
/* 				{{form_widget(form.handicap)}}*/
/* 			</div>*/
/* 				{{form_label(form.lien, "Quel est votre lien avec le défunt?")}}*/
/* 	 			{{form_errors(form.lien)}}*/
/* 				{{form_widget(form.lien)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
