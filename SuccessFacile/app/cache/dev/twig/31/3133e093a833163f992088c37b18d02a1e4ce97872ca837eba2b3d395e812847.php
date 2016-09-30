<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_757c8668c0ed415790a875d117d70bbed27bb0bea5e2452a57c8e6e7fd7c3d43 extends Twig_Template
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
        $__internal_0f299c85e14de67d95b3415b6e4da311b8ae383a61ebedf68b4b234530c67576 = $this->env->getExtension("native_profiler");
        $__internal_0f299c85e14de67d95b3415b6e4da311b8ae383a61ebedf68b4b234530c67576->enter($__internal_0f299c85e14de67d95b3415b6e4da311b8ae383a61ebedf68b4b234530c67576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f299c85e14de67d95b3415b6e4da311b8ae383a61ebedf68b4b234530c67576->leave($__internal_0f299c85e14de67d95b3415b6e4da311b8ae383a61ebedf68b4b234530c67576_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
