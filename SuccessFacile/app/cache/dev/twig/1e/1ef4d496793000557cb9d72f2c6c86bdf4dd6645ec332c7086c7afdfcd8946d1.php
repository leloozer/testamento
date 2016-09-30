<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_47f947c4d96c578756bf4e607400d43dd99d11e4708dfbdb7a84bb1ee37efc61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_559b82e24bb483a7152db989175c59ef6e90a1734144bcd35dc220c39bfc1098 = $this->env->getExtension("native_profiler");
        $__internal_559b82e24bb483a7152db989175c59ef6e90a1734144bcd35dc220c39bfc1098->enter($__internal_559b82e24bb483a7152db989175c59ef6e90a1734144bcd35dc220c39bfc1098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_559b82e24bb483a7152db989175c59ef6e90a1734144bcd35dc220c39bfc1098->leave($__internal_559b82e24bb483a7152db989175c59ef6e90a1734144bcd35dc220c39bfc1098_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd6d896bc42688d1770032320a5c301a05843f94e1712cf5888bb99bdee96eb4 = $this->env->getExtension("native_profiler");
        $__internal_cd6d896bc42688d1770032320a5c301a05843f94e1712cf5888bb99bdee96eb4->enter($__internal_cd6d896bc42688d1770032320a5c301a05843f94e1712cf5888bb99bdee96eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd6d896bc42688d1770032320a5c301a05843f94e1712cf5888bb99bdee96eb4->leave($__internal_cd6d896bc42688d1770032320a5c301a05843f94e1712cf5888bb99bdee96eb4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14aa81b2393fbe774a3a573ad5c4e96d7ec168db2f40b6dbb6cfbd9b93cf011d = $this->env->getExtension("native_profiler");
        $__internal_14aa81b2393fbe774a3a573ad5c4e96d7ec168db2f40b6dbb6cfbd9b93cf011d->enter($__internal_14aa81b2393fbe774a3a573ad5c4e96d7ec168db2f40b6dbb6cfbd9b93cf011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_14aa81b2393fbe774a3a573ad5c4e96d7ec168db2f40b6dbb6cfbd9b93cf011d->leave($__internal_14aa81b2393fbe774a3a573ad5c4e96d7ec168db2f40b6dbb6cfbd9b93cf011d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68c19f55c899fc877d987c6a78d912a2b121b66b42221a1bfd8a5c0230a658ec = $this->env->getExtension("native_profiler");
        $__internal_68c19f55c899fc877d987c6a78d912a2b121b66b42221a1bfd8a5c0230a658ec->enter($__internal_68c19f55c899fc877d987c6a78d912a2b121b66b42221a1bfd8a5c0230a658ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68c19f55c899fc877d987c6a78d912a2b121b66b42221a1bfd8a5c0230a658ec->leave($__internal_68c19f55c899fc877d987c6a78d912a2b121b66b42221a1bfd8a5c0230a658ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
