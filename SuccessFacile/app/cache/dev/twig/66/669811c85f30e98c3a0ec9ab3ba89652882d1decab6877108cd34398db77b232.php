<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_abed877b649e3e225002fd31412932b06474caa4626c1f9074f18bace99e5711 extends Twig_Template
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
        $__internal_b5c3bee8da129c614f90dc97a78c819acb899a2904193e1bd9639be7849f1fa9 = $this->env->getExtension("native_profiler");
        $__internal_b5c3bee8da129c614f90dc97a78c819acb899a2904193e1bd9639be7849f1fa9->enter($__internal_b5c3bee8da129c614f90dc97a78c819acb899a2904193e1bd9639be7849f1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5c3bee8da129c614f90dc97a78c819acb899a2904193e1bd9639be7849f1fa9->leave($__internal_b5c3bee8da129c614f90dc97a78c819acb899a2904193e1bd9639be7849f1fa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
