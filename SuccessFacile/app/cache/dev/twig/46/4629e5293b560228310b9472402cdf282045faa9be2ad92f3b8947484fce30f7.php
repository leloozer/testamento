<?php

/* SuccessFacileBundle:Site:menu.html.twig */
class __TwigTemplate_9a3c00ccb31a6dd02f9735d4cc0bf77778e6b8ac9a87241d35d2aac2996edb4e extends Twig_Template
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
        $__internal_a0a8ed83914f7fb7fde3db6e16a6a9dddff8cb46e6a0deff134de7520e750496 = $this->env->getExtension("native_profiler");
        $__internal_a0a8ed83914f7fb7fde3db6e16a6a9dddff8cb46e6a0deff134de7520e750496->enter($__internal_a0a8ed83914f7fb7fde3db6e16a6a9dddff8cb46e6a0deff134de7520e750496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Site:menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
<div class=container>
      <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("Acceuil");
        echo "\">SuccessionFacile</a>
<ul class=\"nav navbar-nav\">
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("Quotite");
        echo "\">Quotité disponible
\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Other");
        echo "\">Calcul droit de succession</a></li>
<!--
\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("About");
        echo "\">About</a></li>
\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("Contact");
        echo "\">Contact</a></li> !-->
</ul>
</div>
</nav>
";
        
        $__internal_a0a8ed83914f7fb7fde3db6e16a6a9dddff8cb46e6a0deff134de7520e750496->leave($__internal_a0a8ed83914f7fb7fde3db6e16a6a9dddff8cb46e6a0deff134de7520e750496_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Site:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse">*/
/* <div class=container>*/
/*       <a class="navbar-brand" href="{{path('Acceuil')}}">SuccessionFacile</a>*/
/* <ul class="nav navbar-nav">*/
/* 	<li><a href="{{ path('Quotite')}}">Quotité disponible*/
/* 	<li><a href="{{ path('Other')}}">Calcul droit de succession</a></li>*/
/* <!--*/
/* 	<li><a href="{{ path('About')}}">About</a></li>*/
/* 	<li><a href="{{ path('Contact')}}">Contact</a></li> !-->*/
/* </ul>*/
/* </div>*/
/* </nav>*/
/* */
