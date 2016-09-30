<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6b65ad866ce1c895a859e24affd2b59846e159b102381e0c60085d72495be69b extends Twig_Template
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
        $__internal_e834c308e29920f88ad8943d08f0f99ab11857311963671b2b332c3a3899d9f3 = $this->env->getExtension("native_profiler");
        $__internal_e834c308e29920f88ad8943d08f0f99ab11857311963671b2b332c3a3899d9f3->enter($__internal_e834c308e29920f88ad8943d08f0f99ab11857311963671b2b332c3a3899d9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e834c308e29920f88ad8943d08f0f99ab11857311963671b2b332c3a3899d9f3->leave($__internal_e834c308e29920f88ad8943d08f0f99ab11857311963671b2b332c3a3899d9f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
