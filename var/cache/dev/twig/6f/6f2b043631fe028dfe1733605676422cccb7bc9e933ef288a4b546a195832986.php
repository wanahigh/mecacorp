<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f6188786af38a32fa07c4f61e38bfd207b7556d7914168071e04ee4ea46a865d extends Twig_Template
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
        $__internal_70cee80ff9fd9245865e85d7bb074975172940953ceb53ed015b0f77ca4671df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cee80ff9fd9245865e85d7bb074975172940953ceb53ed015b0f77ca4671df->enter($__internal_70cee80ff9fd9245865e85d7bb074975172940953ceb53ed015b0f77ca4671df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e459b45e293d97a611905b9dee151c3534383089633899a927f86d0230abc825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e459b45e293d97a611905b9dee151c3534383089633899a927f86d0230abc825->enter($__internal_e459b45e293d97a611905b9dee151c3534383089633899a927f86d0230abc825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_70cee80ff9fd9245865e85d7bb074975172940953ceb53ed015b0f77ca4671df->leave($__internal_70cee80ff9fd9245865e85d7bb074975172940953ceb53ed015b0f77ca4671df_prof);

        
        $__internal_e459b45e293d97a611905b9dee151c3534383089633899a927f86d0230abc825->leave($__internal_e459b45e293d97a611905b9dee151c3534383089633899a927f86d0230abc825_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
