<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_246f00935ebbdd0e55246f25a32327ea4f40d3516c8dfe705880643057a2fb7e extends Twig_Template
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
        $__internal_84c3274c8fa879e7151e9a569af753581603f79d441afe626b50e6f6d724ea17 = $this->env->getExtension("native_profiler");
        $__internal_84c3274c8fa879e7151e9a569af753581603f79d441afe626b50e6f6d724ea17->enter($__internal_84c3274c8fa879e7151e9a569af753581603f79d441afe626b50e6f6d724ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_84c3274c8fa879e7151e9a569af753581603f79d441afe626b50e6f6d724ea17->leave($__internal_84c3274c8fa879e7151e9a569af753581603f79d441afe626b50e6f6d724ea17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
