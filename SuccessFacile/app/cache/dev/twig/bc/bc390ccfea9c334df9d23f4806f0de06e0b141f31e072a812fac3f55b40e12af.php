<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_602f636ad326fb332eb47a7ce3e7a469885467e44f2c30b54a7059b2a797c82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7fdccc7fced5e1f3dae84a9e509150b884f4850eb3a8a50bbd31d6b7e3ce274c = $this->env->getExtension("native_profiler");
        $__internal_7fdccc7fced5e1f3dae84a9e509150b884f4850eb3a8a50bbd31d6b7e3ce274c->enter($__internal_7fdccc7fced5e1f3dae84a9e509150b884f4850eb3a8a50bbd31d6b7e3ce274c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fdccc7fced5e1f3dae84a9e509150b884f4850eb3a8a50bbd31d6b7e3ce274c->leave($__internal_7fdccc7fced5e1f3dae84a9e509150b884f4850eb3a8a50bbd31d6b7e3ce274c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8789928df3a2fe9ea504c6070e4605c1ed4802be523ab53501125aa67dbe0e95 = $this->env->getExtension("native_profiler");
        $__internal_8789928df3a2fe9ea504c6070e4605c1ed4802be523ab53501125aa67dbe0e95->enter($__internal_8789928df3a2fe9ea504c6070e4605c1ed4802be523ab53501125aa67dbe0e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8789928df3a2fe9ea504c6070e4605c1ed4802be523ab53501125aa67dbe0e95->leave($__internal_8789928df3a2fe9ea504c6070e4605c1ed4802be523ab53501125aa67dbe0e95_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4b3bbb92a77cf4b45da77e66e3441fb259a1c89961098142640790e93c7d4d1 = $this->env->getExtension("native_profiler");
        $__internal_c4b3bbb92a77cf4b45da77e66e3441fb259a1c89961098142640790e93c7d4d1->enter($__internal_c4b3bbb92a77cf4b45da77e66e3441fb259a1c89961098142640790e93c7d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c4b3bbb92a77cf4b45da77e66e3441fb259a1c89961098142640790e93c7d4d1->leave($__internal_c4b3bbb92a77cf4b45da77e66e3441fb259a1c89961098142640790e93c7d4d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
