<?php

/* SuccessFacileBundle:Site:menu.html.twig */
class __TwigTemplate_acfecad3919ce7286ad8d4bb790571610bba63ffa4a261b3bf65507c7b77d55e extends Twig_Template
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
        // line 1
        echo "<div class=\"row\">
<ul class=\"nav nav-tabs\">
\t<li class=\"col-lg-3\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("Acceuil");
        echo "\">Acceuil</a></li>
\t<li class=\"col-lg-3\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("Simulateur");
        echo "\">Simulateur</a></li>
\t<li class=\"col-lg-3\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("Combien");
        echo "\">Combien vais-je payez?</a></li>
\t<li class=\"col-lg-3\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Quotite");
        echo "\">Combien je peux leguer?</a></li>
\t<li class=\"col-lg-3\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("About");
        echo "\">About</a></li>
\t<li class=\"col-lg-3\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Contact");
        echo "\">Contact</a></li>
</ul>
</div>

";
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
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="row">*/
/* <ul class="nav nav-tabs">*/
/* 	<li class="col-lg-3"><a href="{{ path('Acceuil')}}">Acceuil</a></li>*/
/* 	<li class="col-lg-3"><a href="{{ path('Simulateur')}}">Simulateur</a></li>*/
/* 	<li class="col-lg-3"><a href="{{ path('Combien')}}">Combien vais-je payez?</a></li>*/
/* 	<li class="col-lg-3"><a href="{{ path('Quotite')}}">Combien je peux leguer?</a></li>*/
/* 	<li class="col-lg-3"><a href="{{ path('About')}}">About</a></li>*/
/* 	<li class="col-lg-3"><a href="{{ path('Contact')}}">Contact</a></li>*/
/* </ul>*/
/* </div>*/
/* */
/* */
