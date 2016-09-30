<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3cec70649e4d1e4e774ea1075396558284d28ffe292f0463db2bee858c42bd51 extends Twig_Template
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
        $__internal_d808735a0cb5c17321ac23b79c950c9aa4f80da0802fddeec0473839e5800999 = $this->env->getExtension("native_profiler");
        $__internal_d808735a0cb5c17321ac23b79c950c9aa4f80da0802fddeec0473839e5800999->enter($__internal_d808735a0cb5c17321ac23b79c950c9aa4f80da0802fddeec0473839e5800999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d808735a0cb5c17321ac23b79c950c9aa4f80da0802fddeec0473839e5800999->leave($__internal_d808735a0cb5c17321ac23b79c950c9aa4f80da0802fddeec0473839e5800999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
