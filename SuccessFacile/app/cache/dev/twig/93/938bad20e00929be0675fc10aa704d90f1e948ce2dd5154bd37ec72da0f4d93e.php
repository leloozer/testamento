<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_119efd1d5b074ca4ee7c1d49863da76c11a856f5492f14276852e28a42bab62b extends Twig_Template
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
        $__internal_9abcf1f322820885faea034351bc3e45a206c2799a5c60ce1540abfa7fd57468 = $this->env->getExtension("native_profiler");
        $__internal_9abcf1f322820885faea034351bc3e45a206c2799a5c60ce1540abfa7fd57468->enter($__internal_9abcf1f322820885faea034351bc3e45a206c2799a5c60ce1540abfa7fd57468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9abcf1f322820885faea034351bc3e45a206c2799a5c60ce1540abfa7fd57468->leave($__internal_9abcf1f322820885faea034351bc3e45a206c2799a5c60ce1540abfa7fd57468_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
