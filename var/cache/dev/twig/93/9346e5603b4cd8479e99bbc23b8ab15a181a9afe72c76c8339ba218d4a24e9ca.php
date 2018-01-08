<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_bc2ce28a7412ac6307e6e2fd0b646cada2c0d816f76718f14c153d423edfb38d extends Twig_Template
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
        $__internal_48a6f06924e0bc64faf04d7e05253825dddb44ab363c36d1b68a44155ef1e549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a6f06924e0bc64faf04d7e05253825dddb44ab363c36d1b68a44155ef1e549->enter($__internal_48a6f06924e0bc64faf04d7e05253825dddb44ab363c36d1b68a44155ef1e549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_4d0060f7b0972cff1f0b45cffbfc340c2a216173d4293a5553cb3ba790ef190c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0060f7b0972cff1f0b45cffbfc340c2a216173d4293a5553cb3ba790ef190c->enter($__internal_4d0060f7b0972cff1f0b45cffbfc340c2a216173d4293a5553cb3ba790ef190c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_48a6f06924e0bc64faf04d7e05253825dddb44ab363c36d1b68a44155ef1e549->leave($__internal_48a6f06924e0bc64faf04d7e05253825dddb44ab363c36d1b68a44155ef1e549_prof);

        
        $__internal_4d0060f7b0972cff1f0b45cffbfc340c2a216173d4293a5553cb3ba790ef190c->leave($__internal_4d0060f7b0972cff1f0b45cffbfc340c2a216173d4293a5553cb3ba790ef190c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
", "EasyAdminBundle:default:field_time.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
