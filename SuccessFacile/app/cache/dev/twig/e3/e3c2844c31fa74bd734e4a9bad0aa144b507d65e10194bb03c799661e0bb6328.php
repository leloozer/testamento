<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3afec0c3918a8cba2da5b94a3cc034d93a5aef7890ee5a9916fb7c391e47e2f6 extends Twig_Template
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
        $__internal_ed309f32faf51a060688ae683271535694c77e00002288fd3090074016780452 = $this->env->getExtension("native_profiler");
        $__internal_ed309f32faf51a060688ae683271535694c77e00002288fd3090074016780452->enter($__internal_ed309f32faf51a060688ae683271535694c77e00002288fd3090074016780452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ed309f32faf51a060688ae683271535694c77e00002288fd3090074016780452->leave($__internal_ed309f32faf51a060688ae683271535694c77e00002288fd3090074016780452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
