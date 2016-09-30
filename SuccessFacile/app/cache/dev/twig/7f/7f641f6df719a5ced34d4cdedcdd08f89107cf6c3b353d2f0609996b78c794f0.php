<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_66d4e43961a3a8bc57b591cb8c4aebbe7e7843606a2133deaf56bca7ddcb345f extends Twig_Template
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
        $__internal_7ba252738d9c3ec516df847815b0b87cd2e0f24324f8fe30cb5492e477cd4058 = $this->env->getExtension("native_profiler");
        $__internal_7ba252738d9c3ec516df847815b0b87cd2e0f24324f8fe30cb5492e477cd4058->enter($__internal_7ba252738d9c3ec516df847815b0b87cd2e0f24324f8fe30cb5492e477cd4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7ba252738d9c3ec516df847815b0b87cd2e0f24324f8fe30cb5492e477cd4058->leave($__internal_7ba252738d9c3ec516df847815b0b87cd2e0f24324f8fe30cb5492e477cd4058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
