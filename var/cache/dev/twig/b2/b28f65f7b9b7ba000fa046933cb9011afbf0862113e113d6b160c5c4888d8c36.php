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
        $__internal_15bda2a2579a02d102af33474b29b6d9850e8eafd1fafa2525aba7f8bacca44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bda2a2579a02d102af33474b29b6d9850e8eafd1fafa2525aba7f8bacca44e->enter($__internal_15bda2a2579a02d102af33474b29b6d9850e8eafd1fafa2525aba7f8bacca44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d71c42cf6b4081bf901a4e61eb91e2a76aa671ab1c5efb32651bd4578a079a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71c42cf6b4081bf901a4e61eb91e2a76aa671ab1c5efb32651bd4578a079a59->enter($__internal_d71c42cf6b4081bf901a4e61eb91e2a76aa671ab1c5efb32651bd4578a079a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_15bda2a2579a02d102af33474b29b6d9850e8eafd1fafa2525aba7f8bacca44e->leave($__internal_15bda2a2579a02d102af33474b29b6d9850e8eafd1fafa2525aba7f8bacca44e_prof);

        
        $__internal_d71c42cf6b4081bf901a4e61eb91e2a76aa671ab1c5efb32651bd4578a079a59->leave($__internal_d71c42cf6b4081bf901a4e61eb91e2a76aa671ab1c5efb32651bd4578a079a59_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
