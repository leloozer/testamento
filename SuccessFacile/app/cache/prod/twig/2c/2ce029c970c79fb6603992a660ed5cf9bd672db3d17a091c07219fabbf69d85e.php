<?php

/* SuccessFacileBundle:Combien:form.html.twig */
class __TwigTemplate_e1a6a956371f3cd8c8fecdf17dc321011e6b6a1ef15832f8df71ed8bde2223d1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>Combien vais-je payer?</h2></br>
<div class=\"well\">
\t\t<form method=\"POST\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "somme", array()), 'label', array("label" => "Somme de votre heritage (en euros)"));
        echo "
\t \t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "somme", array()), 'errors');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "somme", array()), 'widget');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "handicap", array()), 'label', array("label" => "Etes vous handicape ?"));
        echo "
\t \t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "handicap", array()), 'errors');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "handicap", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lien", array()), 'label', array("label" => "Quel est votre lien avec le defunt ?"));
        echo "
\t \t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lien", array()), 'errors');
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lien", array()), 'widget');
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn\">
\t\t</form>
</div>\t
";
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
        return array (  81 => 18,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h2>Combien vais-je payer?</h2></br>*/
/* <div class="well">*/
/* 		<form method="POST" {{form_enctype(form)}}>*/
/* 			{{form_errors(form)}}*/
/* 			<div>*/
/* 				{{form_label(form.somme, "Somme de votre heritage (en euros)")}}*/
/* 	 			{{form_errors(form.somme)}}*/
/* 				{{form_widget(form.somme)}}*/
/* 				{{form_label(form.handicap, "Etes vous handicape ?")}}*/
/* 	 			{{form_errors(form.handicap)}}*/
/* 				{{form_widget(form.handicap)}}*/
/* 			</div>*/
/* 				{{form_label(form.lien, "Quel est votre lien avec le defunt ?")}}*/
/* 	 			{{form_errors(form.lien)}}*/
/* 				{{form_widget(form.lien)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
