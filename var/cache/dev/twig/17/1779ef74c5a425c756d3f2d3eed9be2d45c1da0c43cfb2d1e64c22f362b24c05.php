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
        $__internal_57127f3c93fde30bb9759b827520192854d777c9903cb1377c91ad0aca9d87d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57127f3c93fde30bb9759b827520192854d777c9903cb1377c91ad0aca9d87d9->enter($__internal_57127f3c93fde30bb9759b827520192854d777c9903cb1377c91ad0aca9d87d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_51009e291fad3870b8ba8bdc4b205ed8ac9a1734ea73068eaa60d47a6c16dca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51009e291fad3870b8ba8bdc4b205ed8ac9a1734ea73068eaa60d47a6c16dca5->enter($__internal_51009e291fad3870b8ba8bdc4b205ed8ac9a1734ea73068eaa60d47a6c16dca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_57127f3c93fde30bb9759b827520192854d777c9903cb1377c91ad0aca9d87d9->leave($__internal_57127f3c93fde30bb9759b827520192854d777c9903cb1377c91ad0aca9d87d9_prof);

        
        $__internal_51009e291fad3870b8ba8bdc4b205ed8ac9a1734ea73068eaa60d47a6c16dca5->leave($__internal_51009e291fad3870b8ba8bdc4b205ed8ac9a1734ea73068eaa60d47a6c16dca5_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
