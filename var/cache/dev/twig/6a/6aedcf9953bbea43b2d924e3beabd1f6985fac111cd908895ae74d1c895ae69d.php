<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_83154391df8bfac8a089ca0e8b3e85adef0fe328faa58487dc40430a353a3878 extends Twig_Template
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
        $__internal_d5f5e825a092f1491dbb2aaf5e82696fbe7a39293f62a95a4436f34797be0dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f5e825a092f1491dbb2aaf5e82696fbe7a39293f62a95a4436f34797be0dae->enter($__internal_d5f5e825a092f1491dbb2aaf5e82696fbe7a39293f62a95a4436f34797be0dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d384fdef6bbdfabb760dde242b209d65c3c9040d691094dd634fd5836797d544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d384fdef6bbdfabb760dde242b209d65c3c9040d691094dd634fd5836797d544->enter($__internal_d384fdef6bbdfabb760dde242b209d65c3c9040d691094dd634fd5836797d544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d5f5e825a092f1491dbb2aaf5e82696fbe7a39293f62a95a4436f34797be0dae->leave($__internal_d5f5e825a092f1491dbb2aaf5e82696fbe7a39293f62a95a4436f34797be0dae_prof);

        
        $__internal_d384fdef6bbdfabb760dde242b209d65c3c9040d691094dd634fd5836797d544->leave($__internal_d384fdef6bbdfabb760dde242b209d65c3c9040d691094dd634fd5836797d544_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
