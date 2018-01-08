<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f7a5d2b9f086c8a79fe4d93dab60f4b3a9c5e7b70cd07131bae128eca5120a2e extends Twig_Template
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
        $__internal_3cd205429c104a841da405605dc25787162b799d101f3defb427ed37b7ff2e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd205429c104a841da405605dc25787162b799d101f3defb427ed37b7ff2e1c->enter($__internal_3cd205429c104a841da405605dc25787162b799d101f3defb427ed37b7ff2e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8512ef77926c60161cefc4c14a09844f006798e5ca956c6c6e895bebe7abd6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8512ef77926c60161cefc4c14a09844f006798e5ca956c6c6e895bebe7abd6a6->enter($__internal_8512ef77926c60161cefc4c14a09844f006798e5ca956c6c6e895bebe7abd6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3cd205429c104a841da405605dc25787162b799d101f3defb427ed37b7ff2e1c->leave($__internal_3cd205429c104a841da405605dc25787162b799d101f3defb427ed37b7ff2e1c_prof);

        
        $__internal_8512ef77926c60161cefc4c14a09844f006798e5ca956c6c6e895bebe7abd6a6->leave($__internal_8512ef77926c60161cefc4c14a09844f006798e5ca956c6c6e895bebe7abd6a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
