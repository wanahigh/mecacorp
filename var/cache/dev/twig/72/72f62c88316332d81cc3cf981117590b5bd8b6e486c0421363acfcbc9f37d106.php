<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e1ebc63062072db415a23df4e1bff8208584b367ceb6c17bbb4a2535c1a7cd31 extends Twig_Template
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
        $__internal_f634d165ca2180ff16ec6ac29ca9d6d06f4e71180eb3e98dc4b14fc6191e39ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f634d165ca2180ff16ec6ac29ca9d6d06f4e71180eb3e98dc4b14fc6191e39ef->enter($__internal_f634d165ca2180ff16ec6ac29ca9d6d06f4e71180eb3e98dc4b14fc6191e39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b3a209d39e730f7ea2d2fb3109193b836250497766f91eaa83569d0d11fe7495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a209d39e730f7ea2d2fb3109193b836250497766f91eaa83569d0d11fe7495->enter($__internal_b3a209d39e730f7ea2d2fb3109193b836250497766f91eaa83569d0d11fe7495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f634d165ca2180ff16ec6ac29ca9d6d06f4e71180eb3e98dc4b14fc6191e39ef->leave($__internal_f634d165ca2180ff16ec6ac29ca9d6d06f4e71180eb3e98dc4b14fc6191e39ef_prof);

        
        $__internal_b3a209d39e730f7ea2d2fb3109193b836250497766f91eaa83569d0d11fe7495->leave($__internal_b3a209d39e730f7ea2d2fb3109193b836250497766f91eaa83569d0d11fe7495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
