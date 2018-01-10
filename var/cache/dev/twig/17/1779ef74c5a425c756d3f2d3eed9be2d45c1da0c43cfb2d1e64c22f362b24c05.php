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
        $__internal_01961e1ebb80acc019d09280d9bf545e9b1df52e4f5d50991a9a79a380eabd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01961e1ebb80acc019d09280d9bf545e9b1df52e4f5d50991a9a79a380eabd0d->enter($__internal_01961e1ebb80acc019d09280d9bf545e9b1df52e4f5d50991a9a79a380eabd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_abee3a379fe78a24e183c886b697e755aa1d6c5bf12bd5c9b6382518dc7f1ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abee3a379fe78a24e183c886b697e755aa1d6c5bf12bd5c9b6382518dc7f1ed7->enter($__internal_abee3a379fe78a24e183c886b697e755aa1d6c5bf12bd5c9b6382518dc7f1ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_01961e1ebb80acc019d09280d9bf545e9b1df52e4f5d50991a9a79a380eabd0d->leave($__internal_01961e1ebb80acc019d09280d9bf545e9b1df52e4f5d50991a9a79a380eabd0d_prof);

        
        $__internal_abee3a379fe78a24e183c886b697e755aa1d6c5bf12bd5c9b6382518dc7f1ed7->leave($__internal_abee3a379fe78a24e183c886b697e755aa1d6c5bf12bd5c9b6382518dc7f1ed7_prof);

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
