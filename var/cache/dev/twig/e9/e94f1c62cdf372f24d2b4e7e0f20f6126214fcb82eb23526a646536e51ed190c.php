<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_3769cb8988c5c9e206a6b9db8d408363a89fc30ea9e980ec9a365f4c526251ec extends Twig_Template
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
        $__internal_efb9d842e5d60cb8a81ef639f90e6b3a401424c4bb3488e7b303756f49fffdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb9d842e5d60cb8a81ef639f90e6b3a401424c4bb3488e7b303756f49fffdea->enter($__internal_efb9d842e5d60cb8a81ef639f90e6b3a401424c4bb3488e7b303756f49fffdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_2620d2b0582bc7c2168153bba57a2030703c5ea1f10230c0af1942914391d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2620d2b0582bc7c2168153bba57a2030703c5ea1f10230c0af1942914391d947->enter($__internal_2620d2b0582bc7c2168153bba57a2030703c5ea1f10230c0af1942914391d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_efb9d842e5d60cb8a81ef639f90e6b3a401424c4bb3488e7b303756f49fffdea->leave($__internal_efb9d842e5d60cb8a81ef639f90e6b3a401424c4bb3488e7b303756f49fffdea_prof);

        
        $__internal_2620d2b0582bc7c2168153bba57a2030703c5ea1f10230c0af1942914391d947->leave($__internal_2620d2b0582bc7c2168153bba57a2030703c5ea1f10230c0af1942914391d947_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
