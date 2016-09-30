<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4ca62d7a876ba894e517196219ca86cf8972c72bb71a939df81f9d61bd592ec7 extends Twig_Template
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
        $__internal_ffb3bb71693703b1d3cc52c01c472228707253eabb94cde00d0919a553204cc5 = $this->env->getExtension("native_profiler");
        $__internal_ffb3bb71693703b1d3cc52c01c472228707253eabb94cde00d0919a553204cc5->enter($__internal_ffb3bb71693703b1d3cc52c01c472228707253eabb94cde00d0919a553204cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ffb3bb71693703b1d3cc52c01c472228707253eabb94cde00d0919a553204cc5->leave($__internal_ffb3bb71693703b1d3cc52c01c472228707253eabb94cde00d0919a553204cc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
