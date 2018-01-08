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
        $__internal_d1b40eed5e4e79cb9b4d0343fa0ec69d02b61ce068b47882e720f36d280d23e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b40eed5e4e79cb9b4d0343fa0ec69d02b61ce068b47882e720f36d280d23e5->enter($__internal_d1b40eed5e4e79cb9b4d0343fa0ec69d02b61ce068b47882e720f36d280d23e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d1c505561ce619c919704cef013eaabc96ab5549917bf31acd45f5c775e1aa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c505561ce619c919704cef013eaabc96ab5549917bf31acd45f5c775e1aa3a->enter($__internal_d1c505561ce619c919704cef013eaabc96ab5549917bf31acd45f5c775e1aa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d1b40eed5e4e79cb9b4d0343fa0ec69d02b61ce068b47882e720f36d280d23e5->leave($__internal_d1b40eed5e4e79cb9b4d0343fa0ec69d02b61ce068b47882e720f36d280d23e5_prof);

        
        $__internal_d1c505561ce619c919704cef013eaabc96ab5549917bf31acd45f5c775e1aa3a->leave($__internal_d1c505561ce619c919704cef013eaabc96ab5549917bf31acd45f5c775e1aa3a_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
