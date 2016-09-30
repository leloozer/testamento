<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_0dc12e2d72423f223a06e7e39197c218046695e871d927beba5b2d7eb687238a extends Twig_Template
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
        $__internal_76d28f8ef89ba6ab08ecb42bf64820c25ef4d780b9ef4a390d082b0a28d38f78 = $this->env->getExtension("native_profiler");
        $__internal_76d28f8ef89ba6ab08ecb42bf64820c25ef4d780b9ef4a390d082b0a28d38f78->enter($__internal_76d28f8ef89ba6ab08ecb42bf64820c25ef4d780b9ef4a390d082b0a28d38f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_76d28f8ef89ba6ab08ecb42bf64820c25ef4d780b9ef4a390d082b0a28d38f78->leave($__internal_76d28f8ef89ba6ab08ecb42bf64820c25ef4d780b9ef4a390d082b0a28d38f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
