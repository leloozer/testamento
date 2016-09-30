<?php

/* SuccessFacileBundle:Quotite:form.html.twig */
class __TwigTemplate_bcbfbeba610a9c2bb462b548edd88544ee8117804e5e605b280c6f4acd3f97f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Quotite:form.html.twig", 1);
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
        echo "\t<h2>Combiem je peux leguer ?</h2></br>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "patrimoine", array()), 'label', array("label" => "Montant de votre patrimoine (en euros)"));
        echo "
\t \t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "patrimoine", array()), 'errors');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "patrimoine", array()), 'widget');
        echo "
\t\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marie", array()), 'label', array("label" => "Etes vous marie ?"));
        echo "
\t \t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marie", array()), 'errors');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "child", array()), 'label', array("label" => "Combien avez vous d'enfant ?"));
        echo "
\t \t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "child", array()), 'errors');
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "child", array()), 'widget');
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
        return "SuccessFacileBundle:Quotite:form.html.twig";
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
/* 	<h2>Combiem je peux leguer ?</h2></br>*/
/* <div class="well">*/
/* 		<form method="POST" {{form_enctype(form)}}>*/
/* 			{{form_errors(form)}}*/
/* 			<div>*/
/* 				{{form_label(form.patrimoine, "Montant de votre patrimoine (en euros)")}}*/
/* 	 			{{form_errors(form.patrimoine)}}*/
/* 				{{form_widget(form.patrimoine)}}*/
/* 				{{form_label(form.marie, "Etes vous marie ?")}}*/
/* 	 			{{form_errors(form.marie)}}*/
/* 				{{form_widget(form.marie)}}*/
/* 			</div>*/
/* 				{{form_label(form.child, "Combien avez vous d'enfant ?")}}*/
/* 	 			{{form_errors(form.child)}}*/
/* 				{{form_widget(form.child)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
