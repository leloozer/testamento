<?php

/* SuccessFacileBundle:Site:form_r.html.twig */
class __TwigTemplate_9e644d267e8432a6f49ec2a08990d72ff75efa450e93cf9e2c392e9c15cfd790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Site:form_r.html.twig", 1);
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
        $__internal_07101e0d37df8a6a4d1593312696954bd5aefcff186f1e83c036f2c50edea42e = $this->env->getExtension("native_profiler");
        $__internal_07101e0d37df8a6a4d1593312696954bd5aefcff186f1e83c036f2c50edea42e->enter($__internal_07101e0d37df8a6a4d1593312696954bd5aefcff186f1e83c036f2c50edea42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:form_r.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07101e0d37df8a6a4d1593312696954bd5aefcff186f1e83c036f2c50edea42e->leave($__internal_07101e0d37df8a6a4d1593312696954bd5aefcff186f1e83c036f2c50edea42e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff9a80dceef7a4f142509025d3d5ff3fb40e58e4084a17ad8d3247dbecf0906 = $this->env->getExtension("native_profiler");
        $__internal_7ff9a80dceef7a4f142509025d3d5ff3fb40e58e4084a17ad8d3247dbecf0906->enter($__internal_7ff9a80dceef7a4f142509025d3d5ff3fb40e58e4084a17ad8d3247dbecf0906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("Form_R");
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant", array()), 'label', array("label" => "Nombre d'enfants du couple"));
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
\t\t\t<div>
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_conjoint", array()), 'label', array("label" => "Nombre d'enfants du conjoint"));
        echo "
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_conjoint", array()), 'errors');
        echo "
\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_conjoint", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_perso", array()), 'label', array("label" => "Nombre d'enfants à vous"));
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_perso", array()), 'errors');
        echo "
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), "enfant_perso", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_7ff9a80dceef7a4f142509025d3d5ff3fb40e58e4084a17ad8d3247dbecf0906->leave($__internal_7ff9a80dceef7a4f142509025d3d5ff3fb40e58e4084a17ad8d3247dbecf0906_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:form_r.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 32,  106 => 30,  102 => 29,  98 => 28,  92 => 25,  88 => 24,  84 => 23,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  60 => 14,  56 => 13,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
/* 		<form action="{{path('Form_R')}}" method="POST" {{form_enctype(form1)}}>*/
/* 			<div>*/
/* 				{{form_label(form1.age, 'form.age' | trans)}}*/
/* 	 			{{form_errors(form1.age)}}*/
/* 				{{form_widget(form1.age)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant, "Nombre d'enfants du couple")}}*/
/* 				{{form_errors(form1.enfant)}}*/
/* 				{{form_widget(form1.enfant)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant_conjoint, "Nombre d'enfants du conjoint")}}*/
/* 				{{form_errors(form1.enfant_conjoint)}}*/
/* 				{{form_widget(form1.enfant_conjoint)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form1.enfant_perso, "Nombre d'enfants à vous")}}*/
/* 				{{form_errors(form1.enfant_perso)}}*/
/* 				{{form_widget(form1.enfant_perso)}}*/
/* 			</div>*/
/* 				{{form_rest(form1)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
