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
        $__internal_591ea0bed87896741d730defc811099225a0ccabbe68b2a0705dc2c7f4d39e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591ea0bed87896741d730defc811099225a0ccabbe68b2a0705dc2c7f4d39e27->enter($__internal_591ea0bed87896741d730defc811099225a0ccabbe68b2a0705dc2c7f4d39e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d270b4d0ac3c6655a03b715d67f57543bd181e7675766ccd276b7c0464b1e0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d270b4d0ac3c6655a03b715d67f57543bd181e7675766ccd276b7c0464b1e0cb->enter($__internal_d270b4d0ac3c6655a03b715d67f57543bd181e7675766ccd276b7c0464b1e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_591ea0bed87896741d730defc811099225a0ccabbe68b2a0705dc2c7f4d39e27->leave($__internal_591ea0bed87896741d730defc811099225a0ccabbe68b2a0705dc2c7f4d39e27_prof);

        
        $__internal_d270b4d0ac3c6655a03b715d67f57543bd181e7675766ccd276b7c0464b1e0cb->leave($__internal_d270b4d0ac3c6655a03b715d67f57543bd181e7675766ccd276b7c0464b1e0cb_prof);

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
", "@Framework/Form/form_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
