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
        $__internal_9ad1c0bf2e523fcf1461b8620d209f9bd7ed92a51c9274c6118414bbd56dd8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad1c0bf2e523fcf1461b8620d209f9bd7ed92a51c9274c6118414bbd56dd8ce->enter($__internal_9ad1c0bf2e523fcf1461b8620d209f9bd7ed92a51c9274c6118414bbd56dd8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_cbafda74f0584bdd8a5ae029848a2e3a5384fb1714fd5ec863262ec25ba8a88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbafda74f0584bdd8a5ae029848a2e3a5384fb1714fd5ec863262ec25ba8a88c->enter($__internal_cbafda74f0584bdd8a5ae029848a2e3a5384fb1714fd5ec863262ec25ba8a88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_9ad1c0bf2e523fcf1461b8620d209f9bd7ed92a51c9274c6118414bbd56dd8ce->leave($__internal_9ad1c0bf2e523fcf1461b8620d209f9bd7ed92a51c9274c6118414bbd56dd8ce_prof);

        
        $__internal_cbafda74f0584bdd8a5ae029848a2e3a5384fb1714fd5ec863262ec25ba8a88c->leave($__internal_cbafda74f0584bdd8a5ae029848a2e3a5384fb1714fd5ec863262ec25ba8a88c_prof);

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
", "EasyAdminBundle:default:field_integer.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
