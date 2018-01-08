<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_eb85859d660f457db2ca6ff0d415cf82642a53ff97816e086d0490e765ce39ad extends Twig_Template
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
        $__internal_5ca75011021b6c165339c5ae13aaa9b71000b8dfc3ebed051687770845b239dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca75011021b6c165339c5ae13aaa9b71000b8dfc3ebed051687770845b239dd->enter($__internal_5ca75011021b6c165339c5ae13aaa9b71000b8dfc3ebed051687770845b239dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_e415bccb767154aef7b623cc1bb596a7e7f3509001012c941fb1e2606f14ab2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e415bccb767154aef7b623cc1bb596a7e7f3509001012c941fb1e2606f14ab2e->enter($__internal_e415bccb767154aef7b623cc1bb596a7e7f3509001012c941fb1e2606f14ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 2, $this->getSourceContext()); })()), "format", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_5ca75011021b6c165339c5ae13aaa9b71000b8dfc3ebed051687770845b239dd->leave($__internal_5ca75011021b6c165339c5ae13aaa9b71000b8dfc3ebed051687770845b239dd_prof);

        
        $__internal_e415bccb767154aef7b623cc1bb596a7e7f3509001012c941fb1e2606f14ab2e->leave($__internal_e415bccb767154aef7b623cc1bb596a7e7f3509001012c941fb1e2606f14ab2e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
