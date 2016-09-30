<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9639ff3adadc93948cbc9ec5c94416c50aaab6de591ced51f4dcaf06fc6f343c extends Twig_Template
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
        $__internal_4bd5c39c36bb4d606e942157f259b670674b940bc6f9e7d2a5e14412d2880a1f = $this->env->getExtension("native_profiler");
        $__internal_4bd5c39c36bb4d606e942157f259b670674b940bc6f9e7d2a5e14412d2880a1f->enter($__internal_4bd5c39c36bb4d606e942157f259b670674b940bc6f9e7d2a5e14412d2880a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4bd5c39c36bb4d606e942157f259b670674b940bc6f9e7d2a5e14412d2880a1f->leave($__internal_4bd5c39c36bb4d606e942157f259b670674b940bc6f9e7d2a5e14412d2880a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
