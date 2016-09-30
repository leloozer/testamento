<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f2ff96978227e10ba1fde625c4aa692f401c460dac5e33e30eddde01c406cb2b extends Twig_Template
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
        $__internal_82a6588a8a58d8b7138e2d790958ce40eeecb3cde4c01fd857bd63090d47fdc1 = $this->env->getExtension("native_profiler");
        $__internal_82a6588a8a58d8b7138e2d790958ce40eeecb3cde4c01fd857bd63090d47fdc1->enter($__internal_82a6588a8a58d8b7138e2d790958ce40eeecb3cde4c01fd857bd63090d47fdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_82a6588a8a58d8b7138e2d790958ce40eeecb3cde4c01fd857bd63090d47fdc1->leave($__internal_82a6588a8a58d8b7138e2d790958ce40eeecb3cde4c01fd857bd63090d47fdc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
