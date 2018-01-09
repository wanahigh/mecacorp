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
        $__internal_147b5c20101d1cfdd5838dd33f7a3885308ff59909f8a3274ecbdf4460514b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147b5c20101d1cfdd5838dd33f7a3885308ff59909f8a3274ecbdf4460514b05->enter($__internal_147b5c20101d1cfdd5838dd33f7a3885308ff59909f8a3274ecbdf4460514b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bd9c1f84eba23af3eeb9c0919b3de6d51e9188b2e532f0ef925dbb8bacfa3354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9c1f84eba23af3eeb9c0919b3de6d51e9188b2e532f0ef925dbb8bacfa3354->enter($__internal_bd9c1f84eba23af3eeb9c0919b3de6d51e9188b2e532f0ef925dbb8bacfa3354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_147b5c20101d1cfdd5838dd33f7a3885308ff59909f8a3274ecbdf4460514b05->leave($__internal_147b5c20101d1cfdd5838dd33f7a3885308ff59909f8a3274ecbdf4460514b05_prof);

        
        $__internal_bd9c1f84eba23af3eeb9c0919b3de6d51e9188b2e532f0ef925dbb8bacfa3354->leave($__internal_bd9c1f84eba23af3eeb9c0919b3de6d51e9188b2e532f0ef925dbb8bacfa3354_prof);

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
", "@Framework/Form/password_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
