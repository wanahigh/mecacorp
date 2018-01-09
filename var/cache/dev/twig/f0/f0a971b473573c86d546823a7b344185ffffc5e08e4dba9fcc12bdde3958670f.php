<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_892e173bbbfbda4148cbdaeecaea488bb1a2c793025def1951fdf98d937dbf14 extends Twig_Template
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
        $__internal_532e49c990b83077a5b2ede14d9756f45ad04c1e6c1a7770109f557182726f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532e49c990b83077a5b2ede14d9756f45ad04c1e6c1a7770109f557182726f8d->enter($__internal_532e49c990b83077a5b2ede14d9756f45ad04c1e6c1a7770109f557182726f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f9ab0e908d0bdb0fa0fe298491dafa389a599960e329cb901fe8600b880c0c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ab0e908d0bdb0fa0fe298491dafa389a599960e329cb901fe8600b880c0c94->enter($__internal_f9ab0e908d0bdb0fa0fe298491dafa389a599960e329cb901fe8600b880c0c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_532e49c990b83077a5b2ede14d9756f45ad04c1e6c1a7770109f557182726f8d->leave($__internal_532e49c990b83077a5b2ede14d9756f45ad04c1e6c1a7770109f557182726f8d_prof);

        
        $__internal_f9ab0e908d0bdb0fa0fe298491dafa389a599960e329cb901fe8600b880c0c94->leave($__internal_f9ab0e908d0bdb0fa0fe298491dafa389a599960e329cb901fe8600b880c0c94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
