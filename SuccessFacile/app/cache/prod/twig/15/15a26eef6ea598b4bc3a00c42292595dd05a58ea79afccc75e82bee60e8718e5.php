<?php

/* SuccessFacileBundle:Site:formnochild.html.twig */
class __TwigTemplate_2945fd9755ed451f2be7882223004e2379c3b38056be2c6cd0c98051a0820821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:formnochild.html.twig", 1);
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
        echo "\t<h2>Vous n avez pas d enfant. </h2></br>
<div class=\"well\">
\t\t<form action=";
        // line 5
        echo $this->env->getExtension('routing')->getPath("Nochild");
        echo " method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "maman", array()), 'label', array("label" => "Votre mere est"));
        echo "
\t \t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "maman", array()), 'errors');
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "maman", array()), 'widget');
        echo "
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "papa", array()), 'label', array("label" => "Votre pere est"));
        echo "
\t \t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "papa", array()), 'errors');
        echo "
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "papa", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siblings", array()), 'label', array("label" => "Nombre de Frere et soeur"));
        echo "
\t \t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siblings", array()), 'errors');
        echo "
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "siblings", array()), 'widget');
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn\">
\t\t</form>
</div>\t
";
    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:formnochild.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  75 => 16,  71 => 15,  67 => 14,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h2>Vous n avez pas d enfant. </h2></br>*/
/* <div class="well">*/
/* 		<form action={{path('Nochild')}} method="POST" {{form_enctype(form)}}>*/
/* 			<div>*/
/* 				{{form_label(form.maman, "Votre mere est")}}*/
/* 	 			{{form_errors(form.maman)}}*/
/* 				{{form_widget(form.maman)}}*/
/* 				{{form_label(form.papa, "Votre pere est")}}*/
/* 	 			{{form_errors(form.papa)}}*/
/* 				{{form_widget(form.papa)}}*/
/* 			</div>*/
/* 				{{form_label(form.siblings, "Nombre de Frere et soeur")}}*/
/* 	 			{{form_errors(form.siblings)}}*/
/* 				{{form_widget(form.siblings)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
