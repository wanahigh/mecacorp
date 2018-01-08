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
        $__internal_d7f46198f6e6a97d70565b84375d3bafa8cea755f6f85769c482611bc571b784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f46198f6e6a97d70565b84375d3bafa8cea755f6f85769c482611bc571b784->enter($__internal_d7f46198f6e6a97d70565b84375d3bafa8cea755f6f85769c482611bc571b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_14f68fcdd5d0509dc2d0204bc433fc116cbb16531652509436b8c4de4a61ddc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f68fcdd5d0509dc2d0204bc433fc116cbb16531652509436b8c4de4a61ddc4->enter($__internal_14f68fcdd5d0509dc2d0204bc433fc116cbb16531652509436b8c4de4a61ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d7f46198f6e6a97d70565b84375d3bafa8cea755f6f85769c482611bc571b784->leave($__internal_d7f46198f6e6a97d70565b84375d3bafa8cea755f6f85769c482611bc571b784_prof);

        
        $__internal_14f68fcdd5d0509dc2d0204bc433fc116cbb16531652509436b8c4de4a61ddc4->leave($__internal_14f68fcdd5d0509dc2d0204bc433fc116cbb16531652509436b8c4de4a61ddc4_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
