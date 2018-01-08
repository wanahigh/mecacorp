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
        $__internal_40e114cee9b5bab4759b936b93b2f91a73bb73ad81b3fdd654bdc8dca91df421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e114cee9b5bab4759b936b93b2f91a73bb73ad81b3fdd654bdc8dca91df421->enter($__internal_40e114cee9b5bab4759b936b93b2f91a73bb73ad81b3fdd654bdc8dca91df421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f819c8ca0eb96a4e3ad5dc97763d0f329efff5cf4dbb37888d33729a39f642c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819c8ca0eb96a4e3ad5dc97763d0f329efff5cf4dbb37888d33729a39f642c4->enter($__internal_f819c8ca0eb96a4e3ad5dc97763d0f329efff5cf4dbb37888d33729a39f642c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_40e114cee9b5bab4759b936b93b2f91a73bb73ad81b3fdd654bdc8dca91df421->leave($__internal_40e114cee9b5bab4759b936b93b2f91a73bb73ad81b3fdd654bdc8dca91df421_prof);

        
        $__internal_f819c8ca0eb96a4e3ad5dc97763d0f329efff5cf4dbb37888d33729a39f642c4->leave($__internal_f819c8ca0eb96a4e3ad5dc97763d0f329efff5cf4dbb37888d33729a39f642c4_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
