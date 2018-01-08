<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_38c4471a2cdf8447a28e672e16fa0c667e22b5725c80977a9ee61d37f761a5da extends Twig_Template
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
        $__internal_b795434add11a9d4d034f5aa49bb662c48c7a0c7ddb0ff04f938c3341a11f956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b795434add11a9d4d034f5aa49bb662c48c7a0c7ddb0ff04f938c3341a11f956->enter($__internal_b795434add11a9d4d034f5aa49bb662c48c7a0c7ddb0ff04f938c3341a11f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_01222e9699298150a77e10c8af4ad9532b240fbabc5b0f5e018028b54935187d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01222e9699298150a77e10c8af4ad9532b240fbabc5b0f5e018028b54935187d->enter($__internal_01222e9699298150a77e10c8af4ad9532b240fbabc5b0f5e018028b54935187d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b795434add11a9d4d034f5aa49bb662c48c7a0c7ddb0ff04f938c3341a11f956->leave($__internal_b795434add11a9d4d034f5aa49bb662c48c7a0c7ddb0ff04f938c3341a11f956_prof);

        
        $__internal_01222e9699298150a77e10c8af4ad9532b240fbabc5b0f5e018028b54935187d->leave($__internal_01222e9699298150a77e10c8af4ad9532b240fbabc5b0f5e018028b54935187d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
