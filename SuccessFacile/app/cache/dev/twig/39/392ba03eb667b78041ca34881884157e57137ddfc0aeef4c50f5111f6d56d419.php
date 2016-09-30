<?php

/* SuccessFacileBundle:Site:formrecompose.html.twig */
class __TwigTemplate_3aef58dc4ca697172caf13ecc582347d4a0271eadb8b3f5bcd98d9ac4f2ab8bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:formrecompose.html.twig", 1);
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
        $__internal_e649d65409d0dc5f3bd5c0a35e0e89789e3acd4b4eaf0e9f1af9783aa9770974 = $this->env->getExtension("native_profiler");
        $__internal_e649d65409d0dc5f3bd5c0a35e0e89789e3acd4b4eaf0e9f1af9783aa9770974->enter($__internal_e649d65409d0dc5f3bd5c0a35e0e89789e3acd4b4eaf0e9f1af9783aa9770974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:formrecompose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e649d65409d0dc5f3bd5c0a35e0e89789e3acd4b4eaf0e9f1af9783aa9770974->leave($__internal_e649d65409d0dc5f3bd5c0a35e0e89789e3acd4b4eaf0e9f1af9783aa9770974_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a72748668e843dfefbc1c7d399bea367b69a38b986a7963a057b613e17dc42 = $this->env->getExtension("native_profiler");
        $__internal_41a72748668e843dfefbc1c7d399bea367b69a38b986a7963a057b613e17dc42->enter($__internal_41a72748668e843dfefbc1c7d399bea367b69a38b986a7963a057b613e17dc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 10%;\">
    10%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action= ";
        // line 11
        echo $this->env->getExtension('routing')->getPath("recompose");
        echo " method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recompose", array()), 'label', array("label" => "Êtes-vous une famille recomposée ?"));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recompose", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recompose", array()), 'widget');
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_41a72748668e843dfefbc1c7d399bea367b69a38b986a7963a057b613e17dc42->leave($__internal_41a72748668e843dfefbc1c7d399bea367b69a38b986a7963a057b613e17dc42_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:formrecompose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  63 => 14,  59 => 13,  55 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">*/
/*     10%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action= {{path('recompose')}} method="POST" {{form_enctype(form)}}>*/
/* 				{{form_label(form.recompose, "Êtes-vous une famille recomposée ?")}}*/
/* 	 			{{form_errors(form.recompose)}}*/
/* 				{{form_widget(form.recompose)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
