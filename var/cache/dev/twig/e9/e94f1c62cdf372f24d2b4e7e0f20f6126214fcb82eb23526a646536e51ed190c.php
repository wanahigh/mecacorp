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
        $__internal_56fde3e2593857c8d7591e304ff49b728dde71414b6efb1ef4efadf145bfecf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56fde3e2593857c8d7591e304ff49b728dde71414b6efb1ef4efadf145bfecf7->enter($__internal_56fde3e2593857c8d7591e304ff49b728dde71414b6efb1ef4efadf145bfecf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_0e383bfe28372d4ce804a0b1ce90bee839ea850a3d7bef32d8e7e81ac7b42fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e383bfe28372d4ce804a0b1ce90bee839ea850a3d7bef32d8e7e81ac7b42fc3->enter($__internal_0e383bfe28372d4ce804a0b1ce90bee839ea850a3d7bef32d8e7e81ac7b42fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_56fde3e2593857c8d7591e304ff49b728dde71414b6efb1ef4efadf145bfecf7->leave($__internal_56fde3e2593857c8d7591e304ff49b728dde71414b6efb1ef4efadf145bfecf7_prof);

        
        $__internal_0e383bfe28372d4ce804a0b1ce90bee839ea850a3d7bef32d8e7e81ac7b42fc3->leave($__internal_0e383bfe28372d4ce804a0b1ce90bee839ea850a3d7bef32d8e7e81ac7b42fc3_prof);

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
", "EasyAdminBundle:default:field_decimal.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
