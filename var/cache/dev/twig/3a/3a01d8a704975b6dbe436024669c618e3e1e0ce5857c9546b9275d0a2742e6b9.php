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
        $__internal_45e12de7094869b727d80ebda0a240036810d2056218cc38f465aea533f4b9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e12de7094869b727d80ebda0a240036810d2056218cc38f465aea533f4b9f8->enter($__internal_45e12de7094869b727d80ebda0a240036810d2056218cc38f465aea533f4b9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_599ce6adfcc49ac21ed3c84e0742d3ed6eee67def616407541d2e9bd648035c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599ce6adfcc49ac21ed3c84e0742d3ed6eee67def616407541d2e9bd648035c8->enter($__internal_599ce6adfcc49ac21ed3c84e0742d3ed6eee67def616407541d2e9bd648035c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_45e12de7094869b727d80ebda0a240036810d2056218cc38f465aea533f4b9f8->leave($__internal_45e12de7094869b727d80ebda0a240036810d2056218cc38f465aea533f4b9f8_prof);

        
        $__internal_599ce6adfcc49ac21ed3c84e0742d3ed6eee67def616407541d2e9bd648035c8->leave($__internal_599ce6adfcc49ac21ed3c84e0742d3ed6eee67def616407541d2e9bd648035c8_prof);

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
", "@Framework/Form/submit_widget.html.php", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
