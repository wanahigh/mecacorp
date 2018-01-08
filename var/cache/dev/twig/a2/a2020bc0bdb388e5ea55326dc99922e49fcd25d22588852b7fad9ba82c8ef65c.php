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
        $__internal_71bc138e7bc00249cf6763e53ea63fb672b8bbf66d33448da77de6722b248f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bc138e7bc00249cf6763e53ea63fb672b8bbf66d33448da77de6722b248f28->enter($__internal_71bc138e7bc00249cf6763e53ea63fb672b8bbf66d33448da77de6722b248f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a1b7d5edf6c6a7e21baf7cd0a111bf8c1d6c6c5b7c15780877a2d9fb7e87d2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b7d5edf6c6a7e21baf7cd0a111bf8c1d6c6c5b7c15780877a2d9fb7e87d2c1->enter($__internal_a1b7d5edf6c6a7e21baf7cd0a111bf8c1d6c6c5b7c15780877a2d9fb7e87d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_71bc138e7bc00249cf6763e53ea63fb672b8bbf66d33448da77de6722b248f28->leave($__internal_71bc138e7bc00249cf6763e53ea63fb672b8bbf66d33448da77de6722b248f28_prof);

        
        $__internal_a1b7d5edf6c6a7e21baf7cd0a111bf8c1d6c6c5b7c15780877a2d9fb7e87d2c1->leave($__internal_a1b7d5edf6c6a7e21baf7cd0a111bf8c1d6c6c5b7c15780877a2d9fb7e87d2c1_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
