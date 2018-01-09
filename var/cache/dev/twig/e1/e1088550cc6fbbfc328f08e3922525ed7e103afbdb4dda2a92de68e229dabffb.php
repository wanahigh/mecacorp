<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_044fa6e350a05f803c848d410ae9198fe3965a4108dc0834a65cf51e0f740597 extends Twig_Template
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
        $__internal_4709c3833c62e0804f065e6bcefe482434016d8cd1b383092725867b6bfa4267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4709c3833c62e0804f065e6bcefe482434016d8cd1b383092725867b6bfa4267->enter($__internal_4709c3833c62e0804f065e6bcefe482434016d8cd1b383092725867b6bfa4267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_5201aaadf8ec4efa0af2048a587603b4f8c7a8e998332c2c71dd321548e159f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5201aaadf8ec4efa0af2048a587603b4f8c7a8e998332c2c71dd321548e159f7->enter($__internal_5201aaadf8ec4efa0af2048a587603b4f8c7a8e998332c2c71dd321548e159f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_4709c3833c62e0804f065e6bcefe482434016d8cd1b383092725867b6bfa4267->leave($__internal_4709c3833c62e0804f065e6bcefe482434016d8cd1b383092725867b6bfa4267_prof);

        
        $__internal_5201aaadf8ec4efa0af2048a587603b4f8c7a8e998332c2c71dd321548e159f7->leave($__internal_5201aaadf8ec4efa0af2048a587603b4f8c7a8e998332c2c71dd321548e159f7_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
