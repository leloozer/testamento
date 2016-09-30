<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b57877d67b43bba80f88385723a9b50b14ea4a497d6e5bdda76f2c5c295eaeac extends Twig_Template
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
        $__internal_da3ca7938def75e7448482806cabcf88e578f0ac5b638943cc80e75f33f228cd = $this->env->getExtension("native_profiler");
        $__internal_da3ca7938def75e7448482806cabcf88e578f0ac5b638943cc80e75f33f228cd->enter($__internal_da3ca7938def75e7448482806cabcf88e578f0ac5b638943cc80e75f33f228cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_da3ca7938def75e7448482806cabcf88e578f0ac5b638943cc80e75f33f228cd->leave($__internal_da3ca7938def75e7448482806cabcf88e578f0ac5b638943cc80e75f33f228cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
