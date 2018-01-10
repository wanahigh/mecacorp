<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_29ea1927a94c79197461b2283fb4e5bee33b92bbf0f580d1c8c523ba9d01e6cf extends Twig_Template
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
        $__internal_635445a051bb445b6d131cc1a79664ba1ba247e333cc5c2d8d30c0a4b1489e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635445a051bb445b6d131cc1a79664ba1ba247e333cc5c2d8d30c0a4b1489e9e->enter($__internal_635445a051bb445b6d131cc1a79664ba1ba247e333cc5c2d8d30c0a4b1489e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4ecae503fa32601c9bf12183ba82713d976911d2838f57533fe0c98760f5f431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecae503fa32601c9bf12183ba82713d976911d2838f57533fe0c98760f5f431->enter($__internal_4ecae503fa32601c9bf12183ba82713d976911d2838f57533fe0c98760f5f431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_635445a051bb445b6d131cc1a79664ba1ba247e333cc5c2d8d30c0a4b1489e9e->leave($__internal_635445a051bb445b6d131cc1a79664ba1ba247e333cc5c2d8d30c0a4b1489e9e_prof);

        
        $__internal_4ecae503fa32601c9bf12183ba82713d976911d2838f57533fe0c98760f5f431->leave($__internal_4ecae503fa32601c9bf12183ba82713d976911d2838f57533fe0c98760f5f431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
