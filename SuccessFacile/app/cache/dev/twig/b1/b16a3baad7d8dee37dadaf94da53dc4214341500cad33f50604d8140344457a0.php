<?php

/* ::base.html.twig */
class __TwigTemplate_c64bb26c93a2fc323c9c72108bf52230999fe14aa39ffe2da4c7c56e936400ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35952525edb7f192bf3904757336de5ee9f94355e4933078c754ed271fb44038 = $this->env->getExtension("native_profiler");
        $__internal_35952525edb7f192bf3904757336de5ee9f94355e4933078c754ed271fb44038->enter($__internal_35952525edb7f192bf3904757336de5ee9f94355e4933078c754ed271fb44038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_35952525edb7f192bf3904757336de5ee9f94355e4933078c754ed271fb44038->leave($__internal_35952525edb7f192bf3904757336de5ee9f94355e4933078c754ed271fb44038_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d88ae93fc59b1e1e90531ab004d795fcca08f6867e77c7a19983a3e8aff83d8 = $this->env->getExtension("native_profiler");
        $__internal_7d88ae93fc59b1e1e90531ab004d795fcca08f6867e77c7a19983a3e8aff83d8->enter($__internal_7d88ae93fc59b1e1e90531ab004d795fcca08f6867e77c7a19983a3e8aff83d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7d88ae93fc59b1e1e90531ab004d795fcca08f6867e77c7a19983a3e8aff83d8->leave($__internal_7d88ae93fc59b1e1e90531ab004d795fcca08f6867e77c7a19983a3e8aff83d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0f1bd2c5ffbf6773aff804c44e287547196fe1ca8b7610e71f70a18fc46a414 = $this->env->getExtension("native_profiler");
        $__internal_c0f1bd2c5ffbf6773aff804c44e287547196fe1ca8b7610e71f70a18fc46a414->enter($__internal_c0f1bd2c5ffbf6773aff804c44e287547196fe1ca8b7610e71f70a18fc46a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c0f1bd2c5ffbf6773aff804c44e287547196fe1ca8b7610e71f70a18fc46a414->leave($__internal_c0f1bd2c5ffbf6773aff804c44e287547196fe1ca8b7610e71f70a18fc46a414_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e6510764bb8a3514e9b3558e4b14ebd9364a6b9aa1ce74f161c02b4266aaf64 = $this->env->getExtension("native_profiler");
        $__internal_4e6510764bb8a3514e9b3558e4b14ebd9364a6b9aa1ce74f161c02b4266aaf64->enter($__internal_4e6510764bb8a3514e9b3558e4b14ebd9364a6b9aa1ce74f161c02b4266aaf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e6510764bb8a3514e9b3558e4b14ebd9364a6b9aa1ce74f161c02b4266aaf64->leave($__internal_4e6510764bb8a3514e9b3558e4b14ebd9364a6b9aa1ce74f161c02b4266aaf64_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f720db9198cef762863ce194c4d37a67e8d818d4c78f29747b6953c0949e8863 = $this->env->getExtension("native_profiler");
        $__internal_f720db9198cef762863ce194c4d37a67e8d818d4c78f29747b6953c0949e8863->enter($__internal_f720db9198cef762863ce194c4d37a67e8d818d4c78f29747b6953c0949e8863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f720db9198cef762863ce194c4d37a67e8d818d4c78f29747b6953c0949e8863->leave($__internal_f720db9198cef762863ce194c4d37a67e8d818d4c78f29747b6953c0949e8863_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
