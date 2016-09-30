<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9e4278833c4bf9399485fe79c3b18acc3114e83c44012b821d684c27d47cd2d6 extends Twig_Template
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
        $__internal_46217ae3629d2bfe7d0bfc01f8da0f63ce5c9e311f68b156427fbe667523bdfa = $this->env->getExtension("native_profiler");
        $__internal_46217ae3629d2bfe7d0bfc01f8da0f63ce5c9e311f68b156427fbe667523bdfa->enter($__internal_46217ae3629d2bfe7d0bfc01f8da0f63ce5c9e311f68b156427fbe667523bdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_46217ae3629d2bfe7d0bfc01f8da0f63ce5c9e311f68b156427fbe667523bdfa->leave($__internal_46217ae3629d2bfe7d0bfc01f8da0f63ce5c9e311f68b156427fbe667523bdfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
