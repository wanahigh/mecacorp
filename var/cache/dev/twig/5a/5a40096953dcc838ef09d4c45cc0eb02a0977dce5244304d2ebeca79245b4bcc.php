<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7355ad611ff64c47efe91de44831e4453b487f1f8b1d8f9687b73c312a104c25 extends Twig_Template
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
        $__internal_b48b9f6087bc9b82a71fa168315dbeac1e01847f8807d3a5bc0ab7c573e2ced4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48b9f6087bc9b82a71fa168315dbeac1e01847f8807d3a5bc0ab7c573e2ced4->enter($__internal_b48b9f6087bc9b82a71fa168315dbeac1e01847f8807d3a5bc0ab7c573e2ced4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_103274dcddd85957f74ef633aa9c52fa24a9c96c9371b39af35e06faa71da5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103274dcddd85957f74ef633aa9c52fa24a9c96c9371b39af35e06faa71da5d4->enter($__internal_103274dcddd85957f74ef633aa9c52fa24a9c96c9371b39af35e06faa71da5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b48b9f6087bc9b82a71fa168315dbeac1e01847f8807d3a5bc0ab7c573e2ced4->leave($__internal_b48b9f6087bc9b82a71fa168315dbeac1e01847f8807d3a5bc0ab7c573e2ced4_prof);

        
        $__internal_103274dcddd85957f74ef633aa9c52fa24a9c96c9371b39af35e06faa71da5d4->leave($__internal_103274dcddd85957f74ef633aa9c52fa24a9c96c9371b39af35e06faa71da5d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
