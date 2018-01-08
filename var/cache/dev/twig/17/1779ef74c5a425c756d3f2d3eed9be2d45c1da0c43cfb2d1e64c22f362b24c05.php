<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fbb18c210212ca5c9db614f26a4803f19ec552976fcc2c8917093aa36f65741d extends Twig_Template
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
        $__internal_2aee260d34756490bd476ea071d14b7900d88e060e5757d50c00c71984f29374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aee260d34756490bd476ea071d14b7900d88e060e5757d50c00c71984f29374->enter($__internal_2aee260d34756490bd476ea071d14b7900d88e060e5757d50c00c71984f29374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1464ef7e830c1484a4c85c932e3b5d15776fb22cd3c2ca2b6011fe4faf6647ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1464ef7e830c1484a4c85c932e3b5d15776fb22cd3c2ca2b6011fe4faf6647ee->enter($__internal_1464ef7e830c1484a4c85c932e3b5d15776fb22cd3c2ca2b6011fe4faf6647ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2aee260d34756490bd476ea071d14b7900d88e060e5757d50c00c71984f29374->leave($__internal_2aee260d34756490bd476ea071d14b7900d88e060e5757d50c00c71984f29374_prof);

        
        $__internal_1464ef7e830c1484a4c85c932e3b5d15776fb22cd3c2ca2b6011fe4faf6647ee->leave($__internal_1464ef7e830c1484a4c85c932e3b5d15776fb22cd3c2ca2b6011fe4faf6647ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
