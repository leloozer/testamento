<?php

/* SuccessFacileBundle:Site:form_nr.html.twig */
class __TwigTemplate_0ece08116b08d136d77c585480a9c9d7313211f001465a368b4fc914f68ca7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:form_nr.html.twig", 1);
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
        $__internal_7eeca9b18b68775fa17645f3c5fda1c864c6ecbc6a8c23650e78a47adac5fadc = $this->env->getExtension("native_profiler");
        $__internal_7eeca9b18b68775fa17645f3c5fda1c864c6ecbc6a8c23650e78a47adac5fadc->enter($__internal_7eeca9b18b68775fa17645f3c5fda1c864c6ecbc6a8c23650e78a47adac5fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:form_nr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eeca9b18b68775fa17645f3c5fda1c864c6ecbc6a8c23650e78a47adac5fadc->leave($__internal_7eeca9b18b68775fa17645f3c5fda1c864c6ecbc6a8c23650e78a47adac5fadc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cedb65b638aa0a0f81d65e3e08cc70d9c5d5af2953ac2ae566487f3809659a92 = $this->env->getExtension("native_profiler");
        $__internal_cedb65b638aa0a0f81d65e3e08cc70d9c5d5af2953ac2ae566487f3809659a92->enter($__internal_cedb65b638aa0a0f81d65e3e08cc70d9c5d5af2953ac2ae566487f3809659a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h5>Progression:</h5>
<div class=\"progress\">
  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%;\">
    20%
  </div>
</div>
<div class=\"form-group\">
\t\t<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("form_NR");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'enctype');
        echo ">
\t\t\t<div>
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "age", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.age", array(), "SuccessFacileBundle")) ? array() : array("label" => $_label_)));
        echo "
\t \t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "age", array()), 'errors');
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "age", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("form.child", array(), "SuccessFacileBundle")) ? array() : array("label" => $_label_)));
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant", array()), 'errors');
        echo "
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_cedb65b638aa0a0f81d65e3e08cc70d9c5d5af2953ac2ae566487f3809659a92->leave($__internal_cedb65b638aa0a0f81d65e3e08cc70d9c5d5af2953ac2ae566487f3809659a92_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:form_nr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  60 => 14,  56 => 13,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'SuccessFacileBundle' %}*/
/* {% block body %}*/
/* 	<h5>Progression:</h5>*/
/* <div class="progress">*/
/*   <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">*/
/*     20%*/
/*   </div>*/
/* </div>*/
/* <div class="form-group">*/
/* 		<form action="{{path('form_NR')}}" method="POST" {{form_enctype(form1)}}>*/
/* 			<div>*/
/* 				{{form_label(form1.age, 'form.age' |trans|raw)}}*/
/* 	 			{{form_errors(form1.age)}}*/
/* 				{{form_widget(form1.age)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant, 'form.child' | trans)}}*/
/* 				{{form_errors(form1.enfant)}}*/
/* 				{{form_widget(form1.enfant)}}*/
/* 			</div>*/
/* 				{{form_rest(form1)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
