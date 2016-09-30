<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0e675d720314ecbca7ef37906d1eccac72935e8a28b234517c1120b0f36da67f extends Twig_Template
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
        $__internal_7ac341abd6172f2d45198acfcd0dc319279547ed92c999a8de80510f03e4a2cf = $this->env->getExtension("native_profiler");
        $__internal_7ac341abd6172f2d45198acfcd0dc319279547ed92c999a8de80510f03e4a2cf->enter($__internal_7ac341abd6172f2d45198acfcd0dc319279547ed92c999a8de80510f03e4a2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7ac341abd6172f2d45198acfcd0dc319279547ed92c999a8de80510f03e4a2cf->leave($__internal_7ac341abd6172f2d45198acfcd0dc319279547ed92c999a8de80510f03e4a2cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
