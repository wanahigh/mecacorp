<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_bea5c15f7f5a2792315a83067f45440dd16a483c3219412691a61241f78196ff extends Twig_Template
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
        $__internal_6b76ffd9f0a33c030fe498ae5fd68550ba7d5696eabf577f250a2c1fb8c5dd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b76ffd9f0a33c030fe498ae5fd68550ba7d5696eabf577f250a2c1fb8c5dd69->enter($__internal_6b76ffd9f0a33c030fe498ae5fd68550ba7d5696eabf577f250a2c1fb8c5dd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_94bff4fe858fffa5b2e297fdca2171c1f58d70b15d344cd5335cd58bb04e5a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bff4fe858fffa5b2e297fdca2171c1f58d70b15d344cd5335cd58bb04e5a55->enter($__internal_94bff4fe858fffa5b2e297fdca2171c1f58d70b15d344cd5335cd58bb04e5a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6b76ffd9f0a33c030fe498ae5fd68550ba7d5696eabf577f250a2c1fb8c5dd69->leave($__internal_6b76ffd9f0a33c030fe498ae5fd68550ba7d5696eabf577f250a2c1fb8c5dd69_prof);

        
        $__internal_94bff4fe858fffa5b2e297fdca2171c1f58d70b15d344cd5335cd58bb04e5a55->leave($__internal_94bff4fe858fffa5b2e297fdca2171c1f58d70b15d344cd5335cd58bb04e5a55_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_date.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
