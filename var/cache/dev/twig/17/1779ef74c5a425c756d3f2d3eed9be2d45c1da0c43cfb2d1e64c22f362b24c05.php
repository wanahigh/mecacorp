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
        $__internal_d3cf4ccdcbbc3f5eae734b12100b8d567d5363e24418e03c9cff9d953593c55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cf4ccdcbbc3f5eae734b12100b8d567d5363e24418e03c9cff9d953593c55f->enter($__internal_d3cf4ccdcbbc3f5eae734b12100b8d567d5363e24418e03c9cff9d953593c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_da5ab1eb3fd2a0c200bda76215b84e77a4599e52ee83ef80e95afa6b16c0e720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5ab1eb3fd2a0c200bda76215b84e77a4599e52ee83ef80e95afa6b16c0e720->enter($__internal_da5ab1eb3fd2a0c200bda76215b84e77a4599e52ee83ef80e95afa6b16c0e720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d3cf4ccdcbbc3f5eae734b12100b8d567d5363e24418e03c9cff9d953593c55f->leave($__internal_d3cf4ccdcbbc3f5eae734b12100b8d567d5363e24418e03c9cff9d953593c55f_prof);

        
        $__internal_da5ab1eb3fd2a0c200bda76215b84e77a4599e52ee83ef80e95afa6b16c0e720->leave($__internal_da5ab1eb3fd2a0c200bda76215b84e77a4599e52ee83ef80e95afa6b16c0e720_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
