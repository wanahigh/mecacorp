<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15174511a23a9f79f0ed5932e02618b703c4e6f3fe6740c371c49a69e060f893 extends Twig_Template
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
        $__internal_d7fa8369894db57376766257c0aeb9e9d511d4b1a81fd22d5eae2db0957cb062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fa8369894db57376766257c0aeb9e9d511d4b1a81fd22d5eae2db0957cb062->enter($__internal_d7fa8369894db57376766257c0aeb9e9d511d4b1a81fd22d5eae2db0957cb062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_20575ffb9b470831a21bdee51b33478bcc6e7619d8a71e6e86187d96c9d28c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20575ffb9b470831a21bdee51b33478bcc6e7619d8a71e6e86187d96c9d28c87->enter($__internal_20575ffb9b470831a21bdee51b33478bcc6e7619d8a71e6e86187d96c9d28c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d7fa8369894db57376766257c0aeb9e9d511d4b1a81fd22d5eae2db0957cb062->leave($__internal_d7fa8369894db57376766257c0aeb9e9d511d4b1a81fd22d5eae2db0957cb062_prof);

        
        $__internal_20575ffb9b470831a21bdee51b33478bcc6e7619d8a71e6e86187d96c9d28c87->leave($__internal_20575ffb9b470831a21bdee51b33478bcc6e7619d8a71e6e86187d96c9d28c87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
