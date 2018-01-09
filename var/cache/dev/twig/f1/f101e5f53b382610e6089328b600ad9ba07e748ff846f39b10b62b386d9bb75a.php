<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_22f5431c383bec2fbfb3276008024d2904473e302062fa3d5f87e18451c5f376 extends Twig_Template
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
        $__internal_882378bb6b3802b797f11efdb7b75ae644cefe065af491af4b2b621532affa07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882378bb6b3802b797f11efdb7b75ae644cefe065af491af4b2b621532affa07->enter($__internal_882378bb6b3802b797f11efdb7b75ae644cefe065af491af4b2b621532affa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_acd8e48256650830a7cb5f7f2dfe12abfd415eaa8a0551018ac7134b24320daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd8e48256650830a7cb5f7f2dfe12abfd415eaa8a0551018ac7134b24320daa->enter($__internal_acd8e48256650830a7cb5f7f2dfe12abfd415eaa8a0551018ac7134b24320daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_882378bb6b3802b797f11efdb7b75ae644cefe065af491af4b2b621532affa07->leave($__internal_882378bb6b3802b797f11efdb7b75ae644cefe065af491af4b2b621532affa07_prof);

        
        $__internal_acd8e48256650830a7cb5f7f2dfe12abfd415eaa8a0551018ac7134b24320daa->leave($__internal_acd8e48256650830a7cb5f7f2dfe12abfd415eaa8a0551018ac7134b24320daa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
