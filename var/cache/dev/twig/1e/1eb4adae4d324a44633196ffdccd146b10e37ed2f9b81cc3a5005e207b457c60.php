<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_f801623681d3994505c335f4853c2c3d50f7defaa9983e5a8025b1469e39db61 extends Twig_Template
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
        $__internal_2025806f40e0be18ea979d245655b174a5bb1c033bbe8b989eea6d7cb74964ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2025806f40e0be18ea979d245655b174a5bb1c033bbe8b989eea6d7cb74964ee->enter($__internal_2025806f40e0be18ea979d245655b174a5bb1c033bbe8b989eea6d7cb74964ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_144be887f68546ed86e36b5b73dd8f6d5b41a2ae8db3142aba4f0fa5e105c51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144be887f68546ed86e36b5b73dd8f6d5b41a2ae8db3142aba4f0fa5e105c51b->enter($__internal_144be887f68546ed86e36b5b73dd8f6d5b41a2ae8db3142aba4f0fa5e105c51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_2025806f40e0be18ea979d245655b174a5bb1c033bbe8b989eea6d7cb74964ee->leave($__internal_2025806f40e0be18ea979d245655b174a5bb1c033bbe8b989eea6d7cb74964ee_prof);

        
        $__internal_144be887f68546ed86e36b5b73dd8f6d5b41a2ae8db3142aba4f0fa5e105c51b->leave($__internal_144be887f68546ed86e36b5b73dd8f6d5b41a2ae8db3142aba4f0fa5e105c51b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
