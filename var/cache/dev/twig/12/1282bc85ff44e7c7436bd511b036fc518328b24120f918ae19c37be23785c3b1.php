<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_08ab299b96e11009042207d41f87664e8c42dc9bcf2c5390f9094167451f65c9 extends Twig_Template
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
        $__internal_9743ccea2edd169568e39d6c726e52d2a28d708c7a36b8629dd1ca06ebe3e5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9743ccea2edd169568e39d6c726e52d2a28d708c7a36b8629dd1ca06ebe3e5e7->enter($__internal_9743ccea2edd169568e39d6c726e52d2a28d708c7a36b8629dd1ca06ebe3e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_2ce94bb53f72e0df7944ab6bf59590ccaa964bf38853aab248630b8ddd0f3949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce94bb53f72e0df7944ab6bf59590ccaa964bf38853aab248630b8ddd0f3949->enter($__internal_2ce94bb53f72e0df7944ab6bf59590ccaa964bf38853aab248630b8ddd0f3949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })()) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_9743ccea2edd169568e39d6c726e52d2a28d708c7a36b8629dd1ca06ebe3e5e7->leave($__internal_9743ccea2edd169568e39d6c726e52d2a28d708c7a36b8629dd1ca06ebe3e5e7_prof);

        
        $__internal_2ce94bb53f72e0df7944ab6bf59590ccaa964bf38853aab248630b8ddd0f3949->leave($__internal_2ce94bb53f72e0df7944ab6bf59590ccaa964bf38853aab248630b8ddd0f3949_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
