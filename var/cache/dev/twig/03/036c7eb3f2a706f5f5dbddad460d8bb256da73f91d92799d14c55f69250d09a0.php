<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5473d1dc68a1f86a9c712de28b8e6c51c3e10773d754bb047c2b282a9996583f extends Twig_Template
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
        $__internal_91b44ccd65885a71a7a2c1285e96cff962790fe11eb12b436c68cbc3574a2206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b44ccd65885a71a7a2c1285e96cff962790fe11eb12b436c68cbc3574a2206->enter($__internal_91b44ccd65885a71a7a2c1285e96cff962790fe11eb12b436c68cbc3574a2206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_084a7c0a3677a01ecd2f3cf31494326c5d49437879063e1c999869a21ba1c21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084a7c0a3677a01ecd2f3cf31494326c5d49437879063e1c999869a21ba1c21a->enter($__internal_084a7c0a3677a01ecd2f3cf31494326c5d49437879063e1c999869a21ba1c21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_91b44ccd65885a71a7a2c1285e96cff962790fe11eb12b436c68cbc3574a2206->leave($__internal_91b44ccd65885a71a7a2c1285e96cff962790fe11eb12b436c68cbc3574a2206_prof);

        
        $__internal_084a7c0a3677a01ecd2f3cf31494326c5d49437879063e1c999869a21ba1c21a->leave($__internal_084a7c0a3677a01ecd2f3cf31494326c5d49437879063e1c999869a21ba1c21a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
