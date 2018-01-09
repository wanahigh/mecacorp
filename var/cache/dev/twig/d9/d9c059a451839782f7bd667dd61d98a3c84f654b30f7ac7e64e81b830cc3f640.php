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
        $__internal_5784feb8695ce85774c273e1c2fadff0d543bca6c7b310c6ea3ae9ab7dcf580b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5784feb8695ce85774c273e1c2fadff0d543bca6c7b310c6ea3ae9ab7dcf580b->enter($__internal_5784feb8695ce85774c273e1c2fadff0d543bca6c7b310c6ea3ae9ab7dcf580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4f073ba66647eef443259e5066bf4bdb2e29542a82e4dcc2a82043ebe688ccac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f073ba66647eef443259e5066bf4bdb2e29542a82e4dcc2a82043ebe688ccac->enter($__internal_4f073ba66647eef443259e5066bf4bdb2e29542a82e4dcc2a82043ebe688ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5784feb8695ce85774c273e1c2fadff0d543bca6c7b310c6ea3ae9ab7dcf580b->leave($__internal_5784feb8695ce85774c273e1c2fadff0d543bca6c7b310c6ea3ae9ab7dcf580b_prof);

        
        $__internal_4f073ba66647eef443259e5066bf4bdb2e29542a82e4dcc2a82043ebe688ccac->leave($__internal_4f073ba66647eef443259e5066bf4bdb2e29542a82e4dcc2a82043ebe688ccac_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
