<?php

/* SuccessFacileBundle:Quotite:form.html.twig */
class __TwigTemplate_1955b9ad49dcfb1edaad07c59b87e9f25850a23fe5b0309304d18c18caf2ff17 extends Twig_Template
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
        $__internal_5e6dcf7b9e72ba29c29a61b40093d20de9591bd7963a7b9070ed722bfa402905 = $this->env->getExtension("native_profiler");
        $__internal_5e6dcf7b9e72ba29c29a61b40093d20de9591bd7963a7b9070ed722bfa402905->enter($__internal_5e6dcf7b9e72ba29c29a61b40093d20de9591bd7963a7b9070ed722bfa402905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Quotite:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e6dcf7b9e72ba29c29a61b40093d20de9591bd7963a7b9070ed722bfa402905->leave($__internal_5e6dcf7b9e72ba29c29a61b40093d20de9591bd7963a7b9070ed722bfa402905_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2b40afb0ad6945842eebfedd7e59c4332d45141f41b2a5e4d9cdb9fbab392dc = $this->env->getExtension("native_profiler");
        $__internal_c2b40afb0ad6945842eebfedd7e59c4332d45141f41b2a5e4d9cdb9fbab392dc->enter($__internal_c2b40afb0ad6945842eebfedd7e59c4332d45141f41b2a5e4d9cdb9fbab392dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"form-group\">
\t\t<form method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patrimoine", array()), 'label', array("label" => "Montant de votre patrimoine (en euros)"));
        echo "
\t \t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patrimoine", array()), 'errors');
        echo "
\t\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patrimoine", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marie", array()), 'label', array("label" => "Etes vous marié(e)?"));
        echo "
\t \t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marie", array()), 'errors');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "child", array()), 'label', array("label" => "Combien avez-vous d'enfant?"));
        echo "
\t \t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "child", array()), 'errors');
        echo "
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "child", array()), 'widget');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t<input type=\"submit\" id=\"formok\" class= \"btn btn-primary\">
\t\t</form>
</div>\t
";
        
        $__internal_c2b40afb0ad6945842eebfedd7e59c4332d45141f41b2a5e4d9cdb9fbab392dc->leave($__internal_c2b40afb0ad6945842eebfedd7e59c4332d45141f41b2a5e4d9cdb9fbab392dc_prof);

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
        return array (  91 => 19,  87 => 18,  83 => 17,  79 => 16,  74 => 14,  70 => 13,  66 => 12,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* <div class="form-group">*/
/* 		<form method="POST" {{form_enctype(form)}}>*/
/* 			{{form_errors(form)}}*/
/* 			<div>*/
/* 				{{form_label(form.patrimoine, "Montant de votre patrimoine (en euros)")}}*/
/* 	 			{{form_errors(form.patrimoine)}}*/
/* 				{{form_widget(form.patrimoine)}}*/
/* 			</div>*/
/* 			<div>*/
/* 				{{form_label(form.marie, "Etes vous marié(e)?")}}*/
/* 	 			{{form_errors(form.marie)}}*/
/* 				{{form_widget(form.marie)}}*/
/* 			</div>*/
/* 				{{form_label(form.child, "Combien avez-vous d'enfant?")}}*/
/* 	 			{{form_errors(form.child)}}*/
/* 				{{form_widget(form.child)}}*/
/* 				{{form_rest(form)}}*/
/* 			<input type="submit" id="formok" class= "btn btn-primary">*/
/* 		</form>*/
/* </div>	*/
/* {% endblock %}*/
/* */
