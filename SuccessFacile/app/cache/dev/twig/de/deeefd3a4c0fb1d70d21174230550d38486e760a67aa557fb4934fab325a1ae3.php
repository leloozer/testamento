<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_636d4f7961c832384755d35340ee1712f66cbf1d766e344e1cc173d2b8b060b8 extends Twig_Template
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
        $__internal_8b9dc2d12990f5de92a9e662e882c38ee3fb2d9a1bfed54fff56592b95165476 = $this->env->getExtension("native_profiler");
        $__internal_8b9dc2d12990f5de92a9e662e882c38ee3fb2d9a1bfed54fff56592b95165476->enter($__internal_8b9dc2d12990f5de92a9e662e882c38ee3fb2d9a1bfed54fff56592b95165476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8b9dc2d12990f5de92a9e662e882c38ee3fb2d9a1bfed54fff56592b95165476->leave($__internal_8b9dc2d12990f5de92a9e662e882c38ee3fb2d9a1bfed54fff56592b95165476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
