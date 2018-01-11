<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_b86e40f7682e1061f15cf54351234b4ef28288d301b320cef6603d3e6ae6fb76 extends Twig_Template
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
        $__internal_1ee7d916626fde243b2dd8091a7f37312cf83279cfd9ee42195b600422f218c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee7d916626fde243b2dd8091a7f37312cf83279cfd9ee42195b600422f218c5->enter($__internal_1ee7d916626fde243b2dd8091a7f37312cf83279cfd9ee42195b600422f218c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_fb43af571078bb864a15022cae4306203b8b4767678f42cc50faf1387a31e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb43af571078bb864a15022cae4306203b8b4767678f42cc50faf1387a31e8ae->enter($__internal_fb43af571078bb864a15022cae4306203b8b4767678f42cc50faf1387a31e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_1ee7d916626fde243b2dd8091a7f37312cf83279cfd9ee42195b600422f218c5->leave($__internal_1ee7d916626fde243b2dd8091a7f37312cf83279cfd9ee42195b600422f218c5_prof);

        
        $__internal_fb43af571078bb864a15022cae4306203b8b4767678f42cc50faf1387a31e8ae->leave($__internal_fb43af571078bb864a15022cae4306203b8b4767678f42cc50faf1387a31e8ae_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
