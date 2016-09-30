<?php

/* SuccessFacileBundle:Site:formgp.html.twig */
class __TwigTemplate_f05e89729af84a1a2c7f8fdfe56ef63bd9dcba185c3ca02422d887cae79f6b71 extends Twig_Template
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
        $__internal_2eb8a207062cfbe624be1951642ac66e38734368b4cd3aaacd0c39b43a97ab86 = $this->env->getExtension("native_profiler");
        $__internal_2eb8a207062cfbe624be1951642ac66e38734368b4cd3aaacd0c39b43a97ab86->enter($__internal_2eb8a207062cfbe624be1951642ac66e38734368b4cd3aaacd0c39b43a97ab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:formgp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb8a207062cfbe624be1951642ac66e38734368b4cd3aaacd0c39b43a97ab86->leave($__internal_2eb8a207062cfbe624be1951642ac66e38734368b4cd3aaacd0c39b43a97ab86_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_364b7068f0658b65f57c4b1e6195d12d737cb41c8283bbcc542b5a4184043342 = $this->env->getExtension("native_profiler");
        $__internal_364b7068f0658b65f57c4b1e6195d12d737cb41c8283bbcc542b5a4184043342->enter($__internal_364b7068f0658b65f57c4b1e6195d12d737cb41c8283bbcc542b5a4184043342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%;\">
    95%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action=";
        // line 10
        echo $this->env->getExtension('routing')->getPath("gp");
        echo " method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gppaternel", array()), 'label', array("label" => "Vos grands-parents paternels sont"));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gppaternel", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gppaternel", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gpmaternel", array()), 'label', array("label" => "Vos grands-parents maternels sont"));
        echo "
\t \t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gpmaternel", array()), 'errors');
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gpmaternel", array()), 'widget');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_364b7068f0658b65f57c4b1e6195d12d737cb41c8283bbcc542b5a4184043342->leave($__internal_364b7068f0658b65f57c4b1e6195d12d737cb41c8283bbcc542b5a4184043342_prof);

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
        return array (  81 => 19,  77 => 18,  73 => 17,  69 => 16,  64 => 14,  60 => 13,  56 => 12,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">*/
/*     95%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action={{path('gp')}} method="POST" {{form_enctype(form)}}>*/
/* 			<div>*/
/* 				{{form_label(form.gppaternel, "Vos grands-parents paternels sont")}}*/
/* 	 			{{form_errors(form.gppaternel)}}*/
/* 				{{form_widget(form.gppaternel)}}*/
/* 			</div>*/
/* 				{{form_label(form.gpmaternel, "Vos grands-parents maternels sont")}}*/
/* 	 			{{form_errors(form.gpmaternel)}}*/
/* 				{{form_widget(form.gpmaternel)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
