<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d63e014c47c7b4145c854bb4f37b35082df3db028fcf396fd91ccd177fd35d56 extends Twig_Template
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
        $__internal_c99634209ef7d9382bed3c124b696fb1d94b2cb2ad3749375061b5dd25fbf363 = $this->env->getExtension("native_profiler");
        $__internal_c99634209ef7d9382bed3c124b696fb1d94b2cb2ad3749375061b5dd25fbf363->enter($__internal_c99634209ef7d9382bed3c124b696fb1d94b2cb2ad3749375061b5dd25fbf363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c99634209ef7d9382bed3c124b696fb1d94b2cb2ad3749375061b5dd25fbf363->leave($__internal_c99634209ef7d9382bed3c124b696fb1d94b2cb2ad3749375061b5dd25fbf363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
