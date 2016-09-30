<?php

/* SuccessFacileBundle:Site:formnochild.html.twig */
class __TwigTemplate_132001252896f55de25acf1ff8891d3548e333d72a26f7bb177a854d0e25cc05 extends Twig_Template
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
        $__internal_c904029a042319eb6a168253e7c744a9fb7715d7fb86e948df57c3c306b96094 = $this->env->getExtension("native_profiler");
        $__internal_c904029a042319eb6a168253e7c744a9fb7715d7fb86e948df57c3c306b96094->enter($__internal_c904029a042319eb6a168253e7c744a9fb7715d7fb86e948df57c3c306b96094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:formnochild.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c904029a042319eb6a168253e7c744a9fb7715d7fb86e948df57c3c306b96094->leave($__internal_c904029a042319eb6a168253e7c744a9fb7715d7fb86e948df57c3c306b96094_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96cdf54394a3d247b98d01a447d598b29fa1708b1d8886c1c3790bafe55573ed = $this->env->getExtension("native_profiler");
        $__internal_96cdf54394a3d247b98d01a447d598b29fa1708b1d8886c1c3790bafe55573ed->enter($__internal_96cdf54394a3d247b98d01a447d598b29fa1708b1d8886c1c3790bafe55573ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%;\">
    75%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action=";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Nochild");
        echo " method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maman", array()), 'label', array("label" => "Votre mère est"));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maman", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maman", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papa", array()), 'label', array("label" => "Votre père est"));
        echo "
\t \t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papa", array()), 'errors');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "papa", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siblings", array()), 'label', array("label" => "Nombre de Frère et soeur"));
        echo "
\t \t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siblings", array()), 'errors');
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siblings", array()), 'widget');
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_96cdf54394a3d247b98d01a447d598b29fa1708b1d8886c1c3790bafe55573ed->leave($__internal_96cdf54394a3d247b98d01a447d598b29fa1708b1d8886c1c3790bafe55573ed_prof);

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
        return array (  95 => 24,  91 => 23,  87 => 22,  83 => 21,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  56 => 12,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">*/
/*     75%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action={{path('Nochild')}} method="POST" {{form_enctype(form)}}>*/
/* 			<div>*/
/* 				{{form_label(form.maman, "Votre mère est")}}*/
/* 	 			{{form_errors(form.maman)}}*/
/* 				{{form_widget(form.maman)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form.papa, "Votre père est")}}*/
/* 	 			{{form_errors(form.papa)}}*/
/* 				{{form_widget(form.papa)}}*/
/* 			</div>*/
/* 				{{form_label(form.siblings, "Nombre de Frère et soeur")}}*/
/* 	 			{{form_errors(form.siblings)}}*/
/* 				{{form_widget(form.siblings)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
