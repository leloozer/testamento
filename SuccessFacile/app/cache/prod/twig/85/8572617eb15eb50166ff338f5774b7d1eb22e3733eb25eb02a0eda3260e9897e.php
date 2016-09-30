<?php

/* SuccessFacileBundle:Site:formgp.html.twig */
class __TwigTemplate_242cbef331eb681768d31e4a72af225181dcff77cac3b545acdda8c68cf64c30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:formgp.html.twig", 1);
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
        echo "\t<h2>Vous n avez plus vos parents et vous etes enfant unique </h2></br>
<div class=\"well\">
\t\t<form action=";
        // line 5
        echo $this->env->getExtension('routing')->getPath("gp");
        echo " method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gppaternel", array()), 'label', array("label" => "Vos grands-parents paternel sont"));
        echo "
\t \t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gppaternel", array()), 'errors');
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gppaternel", array()), 'widget');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gpmaternel", array()), 'label', array("label" => "Vos grands-parents maternel sont"));
        echo "
\t \t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gpmaternel", array()), 'errors');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "gpmaternel", array()), 'widget');
        echo "
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn\">
\t\t</form>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:formgp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h2>Vous n avez plus vos parents et vous etes enfant unique </h2></br>*/
/* <div class="well">*/
/* 		<form action={{path('gp')}} method="POST" {{form_enctype(form)}}>*/
/* 			<div>*/
/* 				{{form_label(form.gppaternel, "Vos grands-parents paternel sont")}}*/
/* 	 			{{form_errors(form.gppaternel)}}*/
/* 				{{form_widget(form.gppaternel)}}*/
/* 				{{form_label(form.gpmaternel, "Vos grands-parents maternel sont")}}*/
/* 	 			{{form_errors(form.gpmaternel)}}*/
/* 				{{form_widget(form.gpmaternel)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
