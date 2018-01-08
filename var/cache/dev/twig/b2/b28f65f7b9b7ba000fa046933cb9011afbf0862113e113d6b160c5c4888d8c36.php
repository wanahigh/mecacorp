<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_73917d3bc7f99887589adb0cb1210c909eb0509ebb73bb58d18491b6d1b948d3 extends Twig_Template
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
        $__internal_69e886a8d96375cc6a6240352462b38f9490835dc10c45380182f76522e69a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e886a8d96375cc6a6240352462b38f9490835dc10c45380182f76522e69a27->enter($__internal_69e886a8d96375cc6a6240352462b38f9490835dc10c45380182f76522e69a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6f5c8154580bb1128029394bf9b809b6fbb58218f15b6bd29b992b55168edfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5c8154580bb1128029394bf9b809b6fbb58218f15b6bd29b992b55168edfe7->enter($__internal_6f5c8154580bb1128029394bf9b809b6fbb58218f15b6bd29b992b55168edfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_69e886a8d96375cc6a6240352462b38f9490835dc10c45380182f76522e69a27->leave($__internal_69e886a8d96375cc6a6240352462b38f9490835dc10c45380182f76522e69a27_prof);

        
        $__internal_6f5c8154580bb1128029394bf9b809b6fbb58218f15b6bd29b992b55168edfe7->leave($__internal_6f5c8154580bb1128029394bf9b809b6fbb58218f15b6bd29b992b55168edfe7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
