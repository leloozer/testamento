<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b42e36e87a82d2b6d220577f377e9598f8c8f53e30763963aa7b18a39cc28776 extends Twig_Template
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
        $__internal_b94089569ac36cd8d345d1cb3842ecadf7246d8e1ca3b598af9b48037752d293 = $this->env->getExtension("native_profiler");
        $__internal_b94089569ac36cd8d345d1cb3842ecadf7246d8e1ca3b598af9b48037752d293->enter($__internal_b94089569ac36cd8d345d1cb3842ecadf7246d8e1ca3b598af9b48037752d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b94089569ac36cd8d345d1cb3842ecadf7246d8e1ca3b598af9b48037752d293->leave($__internal_b94089569ac36cd8d345d1cb3842ecadf7246d8e1ca3b598af9b48037752d293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
