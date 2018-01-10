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
        $__internal_5f4e3ef4e49abbcc4b575536f6f2248180188984bbcf42b9cae3b34b15e5900e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4e3ef4e49abbcc4b575536f6f2248180188984bbcf42b9cae3b34b15e5900e->enter($__internal_5f4e3ef4e49abbcc4b575536f6f2248180188984bbcf42b9cae3b34b15e5900e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_1b7ddd5afdd055d308e78a39ea95c295a6ed6cfba1106d1e7f21df8fb9edfb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7ddd5afdd055d308e78a39ea95c295a6ed6cfba1106d1e7f21df8fb9edfb5f->enter($__internal_1b7ddd5afdd055d308e78a39ea95c295a6ed6cfba1106d1e7f21df8fb9edfb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

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
        
        $__internal_5f4e3ef4e49abbcc4b575536f6f2248180188984bbcf42b9cae3b34b15e5900e->leave($__internal_5f4e3ef4e49abbcc4b575536f6f2248180188984bbcf42b9cae3b34b15e5900e_prof);

        
        $__internal_1b7ddd5afdd055d308e78a39ea95c295a6ed6cfba1106d1e7f21df8fb9edfb5f->leave($__internal_1b7ddd5afdd055d308e78a39ea95c295a6ed6cfba1106d1e7f21df8fb9edfb5f_prof);

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
