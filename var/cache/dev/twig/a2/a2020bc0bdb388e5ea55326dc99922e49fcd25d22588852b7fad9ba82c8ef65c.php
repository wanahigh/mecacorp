<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_585beb331ea4ddc8c48d3c088fe70f12063fb70e3a8545800590eafd0396089e extends Twig_Template
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
        $__internal_c2240fc183e236d51cb5cd157f16e4b82565f2ca8c978f0a23c1486e8a33dccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2240fc183e236d51cb5cd157f16e4b82565f2ca8c978f0a23c1486e8a33dccd->enter($__internal_c2240fc183e236d51cb5cd157f16e4b82565f2ca8c978f0a23c1486e8a33dccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_82d07172dff12ddd2c736a032620df810fcfe2cec23feecd67f00e5781b67a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d07172dff12ddd2c736a032620df810fcfe2cec23feecd67f00e5781b67a3b->enter($__internal_82d07172dff12ddd2c736a032620df810fcfe2cec23feecd67f00e5781b67a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c2240fc183e236d51cb5cd157f16e4b82565f2ca8c978f0a23c1486e8a33dccd->leave($__internal_c2240fc183e236d51cb5cd157f16e4b82565f2ca8c978f0a23c1486e8a33dccd_prof);

        
        $__internal_82d07172dff12ddd2c736a032620df810fcfe2cec23feecd67f00e5781b67a3b->leave($__internal_82d07172dff12ddd2c736a032620df810fcfe2cec23feecd67f00e5781b67a3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
