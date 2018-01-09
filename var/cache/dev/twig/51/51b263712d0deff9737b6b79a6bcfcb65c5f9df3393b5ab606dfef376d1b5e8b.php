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
        $__internal_4885c2c82777cc5901b03074b656fbf3cb0cf46bfdd136c66e334bf24fa729df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4885c2c82777cc5901b03074b656fbf3cb0cf46bfdd136c66e334bf24fa729df->enter($__internal_4885c2c82777cc5901b03074b656fbf3cb0cf46bfdd136c66e334bf24fa729df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b0162310a4dadb95c75a4096e3cf747a56240b4f3053125ef792da3b0b065b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0162310a4dadb95c75a4096e3cf747a56240b4f3053125ef792da3b0b065b02->enter($__internal_b0162310a4dadb95c75a4096e3cf747a56240b4f3053125ef792da3b0b065b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4885c2c82777cc5901b03074b656fbf3cb0cf46bfdd136c66e334bf24fa729df->leave($__internal_4885c2c82777cc5901b03074b656fbf3cb0cf46bfdd136c66e334bf24fa729df_prof);

        
        $__internal_b0162310a4dadb95c75a4096e3cf747a56240b4f3053125ef792da3b0b065b02->leave($__internal_b0162310a4dadb95c75a4096e3cf747a56240b4f3053125ef792da3b0b065b02_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
