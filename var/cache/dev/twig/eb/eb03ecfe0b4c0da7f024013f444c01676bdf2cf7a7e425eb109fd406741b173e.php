<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_54f115082813ce110c94012e8a681356a7bed2cf914e5be21ddf1c78136e2f21 extends Twig_Template
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
        $__internal_546be1ca1de52b8ffddc2c0cdae85357f7f487d939ab518c54c947a5ccab607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546be1ca1de52b8ffddc2c0cdae85357f7f487d939ab518c54c947a5ccab607d->enter($__internal_546be1ca1de52b8ffddc2c0cdae85357f7f487d939ab518c54c947a5ccab607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e4a39eca1290946aaf50ebec631a87acbb96a2151ae92c69d7e5cb74e12a7ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a39eca1290946aaf50ebec631a87acbb96a2151ae92c69d7e5cb74e12a7ae3->enter($__internal_e4a39eca1290946aaf50ebec631a87acbb96a2151ae92c69d7e5cb74e12a7ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_546be1ca1de52b8ffddc2c0cdae85357f7f487d939ab518c54c947a5ccab607d->leave($__internal_546be1ca1de52b8ffddc2c0cdae85357f7f487d939ab518c54c947a5ccab607d_prof);

        
        $__internal_e4a39eca1290946aaf50ebec631a87acbb96a2151ae92c69d7e5cb74e12a7ae3->leave($__internal_e4a39eca1290946aaf50ebec631a87acbb96a2151ae92c69d7e5cb74e12a7ae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
