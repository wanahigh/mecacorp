<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_10da21dc3e2df62ebe184b9a34f80e8b1097341097fc2f1e3c074d0de79ed98c extends Twig_Template
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
        $__internal_df1d48493f940ca5aede4960c403e0c980040018f3930946b3e87581c9add3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1d48493f940ca5aede4960c403e0c980040018f3930946b3e87581c9add3b2->enter($__internal_df1d48493f940ca5aede4960c403e0c980040018f3930946b3e87581c9add3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6ef6b5945aa38e42914361189801772d4d567293b83bd1f47702105c2c3759aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef6b5945aa38e42914361189801772d4d567293b83bd1f47702105c2c3759aa->enter($__internal_6ef6b5945aa38e42914361189801772d4d567293b83bd1f47702105c2c3759aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_df1d48493f940ca5aede4960c403e0c980040018f3930946b3e87581c9add3b2->leave($__internal_df1d48493f940ca5aede4960c403e0c980040018f3930946b3e87581c9add3b2_prof);

        
        $__internal_6ef6b5945aa38e42914361189801772d4d567293b83bd1f47702105c2c3759aa->leave($__internal_6ef6b5945aa38e42914361189801772d4d567293b83bd1f47702105c2c3759aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
