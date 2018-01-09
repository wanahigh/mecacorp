<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_77f82fcdb397a28e57cf633558a2c6f704b12a9d8b2c3c64159d8c83c9efb0ee extends Twig_Template
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
        $__internal_1f6575983aecb3ef47a0cddbb86c5d1b5c25f82d39747c2751727dfc1d43f808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6575983aecb3ef47a0cddbb86c5d1b5c25f82d39747c2751727dfc1d43f808->enter($__internal_1f6575983aecb3ef47a0cddbb86c5d1b5c25f82d39747c2751727dfc1d43f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_b9edafa92e879e5d3f279ec53d2c4f011f1d390565c999b4771e5c1618846d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9edafa92e879e5d3f279ec53d2c4f011f1d390565c999b4771e5c1618846d1a->enter($__internal_b9edafa92e879e5d3f279ec53d2c4f011f1d390565c999b4771e5c1618846d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_1f6575983aecb3ef47a0cddbb86c5d1b5c25f82d39747c2751727dfc1d43f808->leave($__internal_1f6575983aecb3ef47a0cddbb86c5d1b5c25f82d39747c2751727dfc1d43f808_prof);

        
        $__internal_b9edafa92e879e5d3f279ec53d2c4f011f1d390565c999b4771e5c1618846d1a->leave($__internal_b9edafa92e879e5d3f279ec53d2c4f011f1d390565c999b4771e5c1618846d1a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
