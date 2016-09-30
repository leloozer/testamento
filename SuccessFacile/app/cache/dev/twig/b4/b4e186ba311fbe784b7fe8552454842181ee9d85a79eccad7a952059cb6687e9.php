<?php

/* SuccessFacileBundle:Site:situation.html.twig */
class __TwigTemplate_bc477be71731e127116450eb896edd9c1595901303fdc1fdc216a8e760a55e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:situation.html.twig", 1);
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
        $__internal_c8c394130877e482eb5262533c256893b5c00402e65cbeff3703e8a446385837 = $this->env->getExtension("native_profiler");
        $__internal_c8c394130877e482eb5262533c256893b5c00402e65cbeff3703e8a446385837->enter($__internal_c8c394130877e482eb5262533c256893b5c00402e65cbeff3703e8a446385837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:situation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c394130877e482eb5262533c256893b5c00402e65cbeff3703e8a446385837->leave($__internal_c8c394130877e482eb5262533c256893b5c00402e65cbeff3703e8a446385837_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c697fd778a668d1cd8abce11f6e1a52ad857a497192f9043dc39094f79584ff = $this->env->getExtension("native_profiler");
        $__internal_9c697fd778a668d1cd8abce11f6e1a52ad857a497192f9043dc39094f79584ff->enter($__internal_9c697fd778a668d1cd8abce11f6e1a52ad857a497192f9043dc39094f79584ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h5>Progression:<h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"min-width: 2em;\">
    0%
  </div>
</div>
<div class=\"form-group\">
\t\t<form method=\"POST\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situ", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.situation", array(), "SuccessFacileBundle")) ? array() : array("label" => $_label_)));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situ", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situ", array()), 'widget');
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_9c697fd778a668d1cd8abce11f6e1a52ad857a497192f9043dc39094f79584ff->leave($__internal_9c697fd778a668d1cd8abce11f6e1a52ad857a497192f9043dc39094f79584ff_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:situation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* {% block body %}*/
/* <h5>Progression:<h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">*/
/*     0%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form method="POST" {{form_enctype(form)}}>*/
/* 				{{form_label(form.situ, 'form.situation' | trans)}}*/
/* 	 			{{form_errors(form.situ)}}*/
/* 				{{form_widget(form.situ)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
