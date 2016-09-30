<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cc8a6a7ac3c87adb5ca28e8bcf6b0d0b3dec140c5fab58f36f0a0c190d440bbd extends Twig_Template
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
        $__internal_3c048b2214d87da54eaefb63df2ac2a25358503c75bfca3d520cb66a2e02f384 = $this->env->getExtension("native_profiler");
        $__internal_3c048b2214d87da54eaefb63df2ac2a25358503c75bfca3d520cb66a2e02f384->enter($__internal_3c048b2214d87da54eaefb63df2ac2a25358503c75bfca3d520cb66a2e02f384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3c048b2214d87da54eaefb63df2ac2a25358503c75bfca3d520cb66a2e02f384->leave($__internal_3c048b2214d87da54eaefb63df2ac2a25358503c75bfca3d520cb66a2e02f384_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
