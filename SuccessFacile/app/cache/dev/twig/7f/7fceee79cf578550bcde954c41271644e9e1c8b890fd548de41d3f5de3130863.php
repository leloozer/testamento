<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ae726f4899c92fa0472e71f23c86adfa59ed2d19c3f7155e5d70307cab225a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f6bb31d7a4523fdc4fc494f012c33df68935ea91ce1e20a777883d8303b854dc = $this->env->getExtension("native_profiler");
        $__internal_f6bb31d7a4523fdc4fc494f012c33df68935ea91ce1e20a777883d8303b854dc->enter($__internal_f6bb31d7a4523fdc4fc494f012c33df68935ea91ce1e20a777883d8303b854dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6bb31d7a4523fdc4fc494f012c33df68935ea91ce1e20a777883d8303b854dc->leave($__internal_f6bb31d7a4523fdc4fc494f012c33df68935ea91ce1e20a777883d8303b854dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75058e0bdbf3d8b091c529f40743e7a6392e7a883dae881618fa6666e2b2b462 = $this->env->getExtension("native_profiler");
        $__internal_75058e0bdbf3d8b091c529f40743e7a6392e7a883dae881618fa6666e2b2b462->enter($__internal_75058e0bdbf3d8b091c529f40743e7a6392e7a883dae881618fa6666e2b2b462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_75058e0bdbf3d8b091c529f40743e7a6392e7a883dae881618fa6666e2b2b462->leave($__internal_75058e0bdbf3d8b091c529f40743e7a6392e7a883dae881618fa6666e2b2b462_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc1969ae8f0a76ad820ceaa4217a84dad024c90eb6b069da0b9a41ce61ad759f = $this->env->getExtension("native_profiler");
        $__internal_cc1969ae8f0a76ad820ceaa4217a84dad024c90eb6b069da0b9a41ce61ad759f->enter($__internal_cc1969ae8f0a76ad820ceaa4217a84dad024c90eb6b069da0b9a41ce61ad759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cc1969ae8f0a76ad820ceaa4217a84dad024c90eb6b069da0b9a41ce61ad759f->leave($__internal_cc1969ae8f0a76ad820ceaa4217a84dad024c90eb6b069da0b9a41ce61ad759f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3826a4d99b18355c52f8c1acbff5d59ec679801e2160429dcf95655113f65cd = $this->env->getExtension("native_profiler");
        $__internal_a3826a4d99b18355c52f8c1acbff5d59ec679801e2160429dcf95655113f65cd->enter($__internal_a3826a4d99b18355c52f8c1acbff5d59ec679801e2160429dcf95655113f65cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a3826a4d99b18355c52f8c1acbff5d59ec679801e2160429dcf95655113f65cd->leave($__internal_a3826a4d99b18355c52f8c1acbff5d59ec679801e2160429dcf95655113f65cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
