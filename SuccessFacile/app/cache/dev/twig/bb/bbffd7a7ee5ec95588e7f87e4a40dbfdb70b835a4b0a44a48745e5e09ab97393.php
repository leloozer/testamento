<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3da6b46b2318ad6aee96dd3d239ac45ff98fee785f574a95bac5b313ce11ae0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e90ccab5734bf436edf11326592a7e4f7fcaf2c14a55f5b4ce6a1894d21889 = $this->env->getExtension("native_profiler");
        $__internal_c3e90ccab5734bf436edf11326592a7e4f7fcaf2c14a55f5b4ce6a1894d21889->enter($__internal_c3e90ccab5734bf436edf11326592a7e4f7fcaf2c14a55f5b4ce6a1894d21889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e90ccab5734bf436edf11326592a7e4f7fcaf2c14a55f5b4ce6a1894d21889->leave($__internal_c3e90ccab5734bf436edf11326592a7e4f7fcaf2c14a55f5b4ce6a1894d21889_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ff6f49086958846e5509bf0042ec6ce31795edbed0b2c104c337fbe459dab08 = $this->env->getExtension("native_profiler");
        $__internal_5ff6f49086958846e5509bf0042ec6ce31795edbed0b2c104c337fbe459dab08->enter($__internal_5ff6f49086958846e5509bf0042ec6ce31795edbed0b2c104c337fbe459dab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ff6f49086958846e5509bf0042ec6ce31795edbed0b2c104c337fbe459dab08->leave($__internal_5ff6f49086958846e5509bf0042ec6ce31795edbed0b2c104c337fbe459dab08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_720f6fcfd31a1817fd79917ef608be088eee5e8b85ffd0d9ecd5b5ffc5b7659b = $this->env->getExtension("native_profiler");
        $__internal_720f6fcfd31a1817fd79917ef608be088eee5e8b85ffd0d9ecd5b5ffc5b7659b->enter($__internal_720f6fcfd31a1817fd79917ef608be088eee5e8b85ffd0d9ecd5b5ffc5b7659b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_720f6fcfd31a1817fd79917ef608be088eee5e8b85ffd0d9ecd5b5ffc5b7659b->leave($__internal_720f6fcfd31a1817fd79917ef608be088eee5e8b85ffd0d9ecd5b5ffc5b7659b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49e710023f2a0e3093d1bd40da8edae1e5ee3d064748fbef0459a366ad98c62a = $this->env->getExtension("native_profiler");
        $__internal_49e710023f2a0e3093d1bd40da8edae1e5ee3d064748fbef0459a366ad98c62a->enter($__internal_49e710023f2a0e3093d1bd40da8edae1e5ee3d064748fbef0459a366ad98c62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_49e710023f2a0e3093d1bd40da8edae1e5ee3d064748fbef0459a366ad98c62a->leave($__internal_49e710023f2a0e3093d1bd40da8edae1e5ee3d064748fbef0459a366ad98c62a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
