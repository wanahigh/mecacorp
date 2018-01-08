<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_adb897730f07188844684f96d40ee8367308752fb4f5af75bca894542672ae74 extends Twig_Template
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
        $__internal_c3c922f342233419870894ca13423986c0945e0e1c4d521138cd9fd7d17e71d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c922f342233419870894ca13423986c0945e0e1c4d521138cd9fd7d17e71d8->enter($__internal_c3c922f342233419870894ca13423986c0945e0e1c4d521138cd9fd7d17e71d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7b6d456d7198effccc22d99b262d7c38d670eb04f727ba6aaf929d913973ef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6d456d7198effccc22d99b262d7c38d670eb04f727ba6aaf929d913973ef03->enter($__internal_7b6d456d7198effccc22d99b262d7c38d670eb04f727ba6aaf929d913973ef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c3c922f342233419870894ca13423986c0945e0e1c4d521138cd9fd7d17e71d8->leave($__internal_c3c922f342233419870894ca13423986c0945e0e1c4d521138cd9fd7d17e71d8_prof);

        
        $__internal_7b6d456d7198effccc22d99b262d7c38d670eb04f727ba6aaf929d913973ef03->leave($__internal_7b6d456d7198effccc22d99b262d7c38d670eb04f727ba6aaf929d913973ef03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
