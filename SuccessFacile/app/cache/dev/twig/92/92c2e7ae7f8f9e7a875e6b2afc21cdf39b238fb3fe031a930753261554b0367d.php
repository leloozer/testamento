<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_87c27866b27e66de3cce146160398dc9487f86f2b198948648de54f1d61458a9 extends Twig_Template
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
        $__internal_3d02269eda61e630c54d4b91a96dba83d24d9e0a804a8c09aa304d680d4e56ec = $this->env->getExtension("native_profiler");
        $__internal_3d02269eda61e630c54d4b91a96dba83d24d9e0a804a8c09aa304d680d4e56ec->enter($__internal_3d02269eda61e630c54d4b91a96dba83d24d9e0a804a8c09aa304d680d4e56ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3d02269eda61e630c54d4b91a96dba83d24d9e0a804a8c09aa304d680d4e56ec->leave($__internal_3d02269eda61e630c54d4b91a96dba83d24d9e0a804a8c09aa304d680d4e56ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
