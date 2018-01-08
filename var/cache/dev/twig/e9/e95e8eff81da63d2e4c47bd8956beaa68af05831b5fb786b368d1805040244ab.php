<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_39877b5acdb3b03ecf17c752121067c99da12e025a96f7d0610d5ad2cdc2e9e2 extends Twig_Template
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
        $__internal_153cf4442b5fc09809a520887e6d7a6c65939aaba6e19b212ea9d2afe5c74733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153cf4442b5fc09809a520887e6d7a6c65939aaba6e19b212ea9d2afe5c74733->enter($__internal_153cf4442b5fc09809a520887e6d7a6c65939aaba6e19b212ea9d2afe5c74733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_8deeec59893b105b961458a77be1ee9b7a930019ea15fb32757cf7b0876e3bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8deeec59893b105b961458a77be1ee9b7a930019ea15fb32757cf7b0876e3bbc->enter($__internal_8deeec59893b105b961458a77be1ee9b7a930019ea15fb32757cf7b0876e3bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_153cf4442b5fc09809a520887e6d7a6c65939aaba6e19b212ea9d2afe5c74733->leave($__internal_153cf4442b5fc09809a520887e6d7a6c65939aaba6e19b212ea9d2afe5c74733_prof);

        
        $__internal_8deeec59893b105b961458a77be1ee9b7a930019ea15fb32757cf7b0876e3bbc->leave($__internal_8deeec59893b105b961458a77be1ee9b7a930019ea15fb32757cf7b0876e3bbc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
