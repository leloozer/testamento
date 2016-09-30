<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fff23b5e1eb7665a32d93fe28e64a6fb1b93602b53146a69c7468968ebccce59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22ba73eb95a4aab5a238c3be93253f47ac5fd21ec138a816879f591affdf76a8 = $this->env->getExtension("native_profiler");
        $__internal_22ba73eb95a4aab5a238c3be93253f47ac5fd21ec138a816879f591affdf76a8->enter($__internal_22ba73eb95a4aab5a238c3be93253f47ac5fd21ec138a816879f591affdf76a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_22ba73eb95a4aab5a238c3be93253f47ac5fd21ec138a816879f591affdf76a8->leave($__internal_22ba73eb95a4aab5a238c3be93253f47ac5fd21ec138a816879f591affdf76a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
