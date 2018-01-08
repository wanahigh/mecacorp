<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8d04ce0684012f4ff1a95b103c081235fb3bd82af8ba75ffbccadadc71f3afee extends Twig_Template
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
        $__internal_facb7e07e30fe38f29c57014b0691fd8c1222b5cedbe1a82c41cfa2081c3872e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_facb7e07e30fe38f29c57014b0691fd8c1222b5cedbe1a82c41cfa2081c3872e->enter($__internal_facb7e07e30fe38f29c57014b0691fd8c1222b5cedbe1a82c41cfa2081c3872e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6e25b503f69aabf697e571e493774c4dc8876ee10ccce5f8ba9b384bde160d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e25b503f69aabf697e571e493774c4dc8876ee10ccce5f8ba9b384bde160d92->enter($__internal_6e25b503f69aabf697e571e493774c4dc8876ee10ccce5f8ba9b384bde160d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_facb7e07e30fe38f29c57014b0691fd8c1222b5cedbe1a82c41cfa2081c3872e->leave($__internal_facb7e07e30fe38f29c57014b0691fd8c1222b5cedbe1a82c41cfa2081c3872e_prof);

        
        $__internal_6e25b503f69aabf697e571e493774c4dc8876ee10ccce5f8ba9b384bde160d92->leave($__internal_6e25b503f69aabf697e571e493774c4dc8876ee10ccce5f8ba9b384bde160d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
