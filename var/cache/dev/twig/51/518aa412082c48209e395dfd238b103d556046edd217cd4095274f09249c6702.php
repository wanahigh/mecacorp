<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_36c4dff6f285563da9403ac2e006e798ab58ac70f3b501d003c045a83fb1c995 extends Twig_Template
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
        $__internal_36add12366a74186c0b253ccc1cb5aca939012ba77c50671f1abc9f46395adec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36add12366a74186c0b253ccc1cb5aca939012ba77c50671f1abc9f46395adec->enter($__internal_36add12366a74186c0b253ccc1cb5aca939012ba77c50671f1abc9f46395adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f5e565e39fe20bf819f2b1ce013b9fae42f678b6efaf7a92f70487a4b3ec5879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e565e39fe20bf819f2b1ce013b9fae42f678b6efaf7a92f70487a4b3ec5879->enter($__internal_f5e565e39fe20bf819f2b1ce013b9fae42f678b6efaf7a92f70487a4b3ec5879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_36add12366a74186c0b253ccc1cb5aca939012ba77c50671f1abc9f46395adec->leave($__internal_36add12366a74186c0b253ccc1cb5aca939012ba77c50671f1abc9f46395adec_prof);

        
        $__internal_f5e565e39fe20bf819f2b1ce013b9fae42f678b6efaf7a92f70487a4b3ec5879->leave($__internal_f5e565e39fe20bf819f2b1ce013b9fae42f678b6efaf7a92f70487a4b3ec5879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
