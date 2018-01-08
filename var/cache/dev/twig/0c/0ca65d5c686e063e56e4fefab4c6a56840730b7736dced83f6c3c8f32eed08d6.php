<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15174511a23a9f79f0ed5932e02618b703c4e6f3fe6740c371c49a69e060f893 extends Twig_Template
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
        $__internal_fedea3518f3114260fb446dad64bbaff41e9221b56e12dfc01b66ac0f5aa6b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedea3518f3114260fb446dad64bbaff41e9221b56e12dfc01b66ac0f5aa6b00->enter($__internal_fedea3518f3114260fb446dad64bbaff41e9221b56e12dfc01b66ac0f5aa6b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5ab622d50fd574a2a610a29419420c6f9f229f672c862dff985cd853e05f770d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab622d50fd574a2a610a29419420c6f9f229f672c862dff985cd853e05f770d->enter($__internal_5ab622d50fd574a2a610a29419420c6f9f229f672c862dff985cd853e05f770d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fedea3518f3114260fb446dad64bbaff41e9221b56e12dfc01b66ac0f5aa6b00->leave($__internal_fedea3518f3114260fb446dad64bbaff41e9221b56e12dfc01b66ac0f5aa6b00_prof);

        
        $__internal_5ab622d50fd574a2a610a29419420c6f9f229f672c862dff985cd853e05f770d->leave($__internal_5ab622d50fd574a2a610a29419420c6f9f229f672c862dff985cd853e05f770d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
