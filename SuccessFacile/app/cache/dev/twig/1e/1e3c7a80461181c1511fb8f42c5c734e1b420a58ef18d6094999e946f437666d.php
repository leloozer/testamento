<?php

/* SuccessFacileBundle:Quotite:result.html.twig */
class __TwigTemplate_068580e62c3a91013b59d0642638e7095470407adaa5b011efc9de03583e2cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SuccessFacileBundle::layout.html.twig", "SuccessFacileBundle:Quotite:result.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SuccessFacileBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53310541cc63943ccbd70e404795743261f59ac5ff8a4ca1d016068cdc8c2e87 = $this->env->getExtension("native_profiler");
        $__internal_53310541cc63943ccbd70e404795743261f59ac5ff8a4ca1d016068cdc8c2e87->enter($__internal_53310541cc63943ccbd70e404795743261f59ac5ff8a4ca1d016068cdc8c2e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SuccessFacileBundle:Quotite:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53310541cc63943ccbd70e404795743261f59ac5ff8a4ca1d016068cdc8c2e87->leave($__internal_53310541cc63943ccbd70e404795743261f59ac5ff8a4ca1d016068cdc8c2e87_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4e1c30dc63935592b0095b4ed8fae608028200be5aa09973636abded17b837a = $this->env->getExtension("native_profiler");
        $__internal_a4e1c30dc63935592b0095b4ed8fae608028200be5aa09973636abded17b837a->enter($__internal_a4e1c30dc63935592b0095b4ed8fae608028200be5aa09973636abded17b837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container\">
\t<div class=\"row\">
\t<div class=\"col-lg-15\">
\t<div class=\"alert alert-info\">
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t\t<h3>Votre situation</h3>
\t\t</div>
\t";
        // line 11
        if (((isset($context["marie"]) ? $context["marie"] : $this->getContext($context, "marie")) == true)) {
            // line 12
            echo "\t\t<p>Vous êtes marié(e).</p>
\t";
        }
        // line 14
        echo "\t";
        if (((isset($context["marie"]) ? $context["marie"] : $this->getContext($context, "marie")) == false)) {
            // line 15
            echo "\t\t<p>Vous n'êtes pas marié(e).</p>
\t";
        }
        // line 17
        echo "\t<p>Vous avez un patrimoine personnel de ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["patrimoine"]) ? $context["patrimoine"] : $this->getContext($context, "patrimoine")), 2, ",", " "), "html", null, true);
        echo " euros</p>
\t<p>Vous avez ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "html", null, true);
        echo " enfant(s).
\t</div>
\t\t<div style=\"text-align:center;text-inline\">
\t\t<span class=\"glyphicon glyphicon-user\" style=\"font-size:300%;\"></span>
\t<h2>Votre Bilan</h2>
\t</div>
\t<table class=\"table table-hover\">
\t<thead>
\t<tr class=\"success\">
\t\t<th>Quotité disponible (en %)</th>
\t\t<th>Quotité disponible (en euros)</th>
\t\t<th>Héritage restant sans la quotité disponible</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["pourcentQD"]) ? $context["pourcentQD"] : $this->getContext($context, "pourcentQD")), "html", null, true);
        echo " %</td>
\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["QD"]) ? $context["QD"] : $this->getContext($context, "QD")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["reste"]) ? $context["reste"] : $this->getContext($context, "reste")), 2, ",", " "), "html", null, true);
        echo " euros</td>
\t</tr>
\t</tbody>
\t</table>
\t<div class=\"container\">
\t<div class=\"col-lg-5\">
\t<div class = \"row\">
<p>A propos :

La quotité disponible est la part de votre patrimoine dont vous pouvez librement disposer. Vous pouvez choisir vos héritiers, en fonction de votre situation familiale, grâce à un testament.
Ce calculateur gratuit vous est fourni par Testamento, inventeur du testament en ligne et primé à de multiples reprises. Testamento propose depuis 2013 une solution simple, rapide et accessible, développée avec des notaires et avocats, pour préparer un testament 100% légal et conservé par un notaire.
Pour en savoir plus sur Testamento, cliquez <a href=\"https://testamento.fr/fr\">ici.</a></p>
</div>
</div>
</div>
<p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>
";
        
        $__internal_a4e1c30dc63935592b0095b4ed8fae608028200be5aa09973636abded17b837a->leave($__internal_a4e1c30dc63935592b0095b4ed8fae608028200be5aa09973636abded17b837a_prof);

    }

    public function getTemplateName()
    {
        return "SuccessFacileBundle:Quotite:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  91 => 35,  87 => 34,  68 => 18,  63 => 17,  59 => 15,  56 => 14,  52 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* 	{% extends "SuccessFacileBundle::layout.html.twig"%}*/
/* 	{%block body %}*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* 	<div class="col-lg-15">*/
/* 	<div class="alert alert-info">*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-user" style="font-size:300%;"></span>*/
/* 		<h3>Votre situation</h3>*/
/* 		</div>*/
/* 	{% if marie == TRUE %}*/
/* 		<p>Vous êtes marié(e).</p>*/
/* 	{% endif %}*/
/* 	{% if marie == FALSE %}*/
/* 		<p>Vous n'êtes pas marié(e).</p>*/
/* 	{% endif %}*/
/* 	<p>Vous avez un patrimoine personnel de {{patrimoine| number_format(2,',', ' ')}} euros</p>*/
/* 	<p>Vous avez {{child}} enfant(s).*/
/* 	</div>*/
/* 		<div style="text-align:center;text-inline">*/
/* 		<span class="glyphicon glyphicon-user" style="font-size:300%;"></span>*/
/* 	<h2>Votre Bilan</h2>*/
/* 	</div>*/
/* 	<table class="table table-hover">*/
/* 	<thead>*/
/* 	<tr class="success">*/
/* 		<th>Quotité disponible (en %)</th>*/
/* 		<th>Quotité disponible (en euros)</th>*/
/* 		<th>Héritage restant sans la quotité disponible</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 		<td>{{ pourcentQD}} %</td>*/
/* 		<td>{{QD| number_format(2,',',' ')}} euros</td>*/
/* 		<td>{{reste| number_format(2,',',' ')}} euros</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<div class="container">*/
/* 	<div class="col-lg-5">*/
/* 	<div class = "row">*/
/* <p>A propos :*/
/* */
/* La quotité disponible est la part de votre patrimoine dont vous pouvez librement disposer. Vous pouvez choisir vos héritiers, en fonction de votre situation familiale, grâce à un testament.*/
/* Ce calculateur gratuit vous est fourni par Testamento, inventeur du testament en ligne et primé à de multiples reprises. Testamento propose depuis 2013 une solution simple, rapide et accessible, développée avec des notaires et avocats, pour préparer un testament 100% légal et conservé par un notaire.*/
/* Pour en savoir plus sur Testamento, cliquez <a href="https://testamento.fr/fr">ici.</a></p>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <p>Informations non contractuelles, calculées sur les bases du montant du patrimoine net renseigné.</p>*/
/* {%endblock%}*/
/* */
/* */
