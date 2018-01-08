<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_002904efe35d597efe02093cfbe385aefa95158f625b464b17f194502647b654 extends Twig_Template
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
        $__internal_eebce7718141b1b15f737d05c17899cbec0f34fbe146b9574174f3af58a44054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebce7718141b1b15f737d05c17899cbec0f34fbe146b9574174f3af58a44054->enter($__internal_eebce7718141b1b15f737d05c17899cbec0f34fbe146b9574174f3af58a44054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_98743bd2cefbf76320f8ad907cc75cec7b9129fb33106dccc5753f616c532007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98743bd2cefbf76320f8ad907cc75cec7b9129fb33106dccc5753f616c532007->enter($__internal_98743bd2cefbf76320f8ad907cc75cec7b9129fb33106dccc5753f616c532007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_eebce7718141b1b15f737d05c17899cbec0f34fbe146b9574174f3af58a44054->leave($__internal_eebce7718141b1b15f737d05c17899cbec0f34fbe146b9574174f3af58a44054_prof);

        
        $__internal_98743bd2cefbf76320f8ad907cc75cec7b9129fb33106dccc5753f616c532007->leave($__internal_98743bd2cefbf76320f8ad907cc75cec7b9129fb33106dccc5753f616c532007_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
