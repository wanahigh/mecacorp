<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fb08488704982bbb74ab9be334aa87c64b7578a32a20163d32cc04c8f495977b extends Twig_Template
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
        $__internal_86f0b76535cbdfffe32656eb9177b658065d41a66cf1d071605fec1b749f3c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f0b76535cbdfffe32656eb9177b658065d41a66cf1d071605fec1b749f3c1d->enter($__internal_86f0b76535cbdfffe32656eb9177b658065d41a66cf1d071605fec1b749f3c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4c81b16726a4bad7f39a5843db1ff2c99dc16d073d3c987c5ed5e7a4b399ebad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c81b16726a4bad7f39a5843db1ff2c99dc16d073d3c987c5ed5e7a4b399ebad->enter($__internal_4c81b16726a4bad7f39a5843db1ff2c99dc16d073d3c987c5ed5e7a4b399ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_86f0b76535cbdfffe32656eb9177b658065d41a66cf1d071605fec1b749f3c1d->leave($__internal_86f0b76535cbdfffe32656eb9177b658065d41a66cf1d071605fec1b749f3c1d_prof);

        
        $__internal_4c81b16726a4bad7f39a5843db1ff2c99dc16d073d3c987c5ed5e7a4b399ebad->leave($__internal_4c81b16726a4bad7f39a5843db1ff2c99dc16d073d3c987c5ed5e7a4b399ebad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
