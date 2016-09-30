<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_66790da2dfdc1ca313c10ad07fa841f13506037561ac4d013d04ff30b8abe46b extends Twig_Template
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
        $__internal_a4f430bfd7dd782698ff8cfe89de4f4b601bfe43ee05c81a79608d92cdf85781 = $this->env->getExtension("native_profiler");
        $__internal_a4f430bfd7dd782698ff8cfe89de4f4b601bfe43ee05c81a79608d92cdf85781->enter($__internal_a4f430bfd7dd782698ff8cfe89de4f4b601bfe43ee05c81a79608d92cdf85781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a4f430bfd7dd782698ff8cfe89de4f4b601bfe43ee05c81a79608d92cdf85781->leave($__internal_a4f430bfd7dd782698ff8cfe89de4f4b601bfe43ee05c81a79608d92cdf85781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
