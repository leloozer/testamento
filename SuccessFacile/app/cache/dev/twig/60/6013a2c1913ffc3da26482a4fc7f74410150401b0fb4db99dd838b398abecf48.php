<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_245a9fb4a374e9cd1a47b2387bc985f584163ea7806001cb26373352eb43171d extends Twig_Template
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
        $__internal_79b5bd0664d841aac61b7f5828d566e8cc8246f56d3abf348f6676c8b91bde03 = $this->env->getExtension("native_profiler");
        $__internal_79b5bd0664d841aac61b7f5828d566e8cc8246f56d3abf348f6676c8b91bde03->enter($__internal_79b5bd0664d841aac61b7f5828d566e8cc8246f56d3abf348f6676c8b91bde03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_79b5bd0664d841aac61b7f5828d566e8cc8246f56d3abf348f6676c8b91bde03->leave($__internal_79b5bd0664d841aac61b7f5828d566e8cc8246f56d3abf348f6676c8b91bde03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
