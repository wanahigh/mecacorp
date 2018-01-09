<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_09d5a794fc31c48479989de4a2b5f276e895d7893a9cc1f42f9c58db360f3fb1 extends Twig_Template
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
        $__internal_5fe2bf8f78c55c2dbb45066069f433521fee159b2d1afe4d2f705f062d810759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe2bf8f78c55c2dbb45066069f433521fee159b2d1afe4d2f705f062d810759->enter($__internal_5fe2bf8f78c55c2dbb45066069f433521fee159b2d1afe4d2f705f062d810759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3099c6188e3a48c0e0718ab98047f6636eedbdff82c523ea7d19ad9412f0ca2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3099c6188e3a48c0e0718ab98047f6636eedbdff82c523ea7d19ad9412f0ca2a->enter($__internal_3099c6188e3a48c0e0718ab98047f6636eedbdff82c523ea7d19ad9412f0ca2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5fe2bf8f78c55c2dbb45066069f433521fee159b2d1afe4d2f705f062d810759->leave($__internal_5fe2bf8f78c55c2dbb45066069f433521fee159b2d1afe4d2f705f062d810759_prof);

        
        $__internal_3099c6188e3a48c0e0718ab98047f6636eedbdff82c523ea7d19ad9412f0ca2a->leave($__internal_3099c6188e3a48c0e0718ab98047f6636eedbdff82c523ea7d19ad9412f0ca2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
