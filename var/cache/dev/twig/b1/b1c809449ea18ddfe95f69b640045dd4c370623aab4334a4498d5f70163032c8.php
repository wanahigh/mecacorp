<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_1c4e28e50b4e7e590fe9f5a67c84fedd3a8869846af2b4ae4e48d03657db361d extends Twig_Template
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
        $__internal_fdad71a05aa21c6825cd57223f84e53ccb1563023cc6976a0e9a5ccbc9b668e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdad71a05aa21c6825cd57223f84e53ccb1563023cc6976a0e9a5ccbc9b668e8->enter($__internal_fdad71a05aa21c6825cd57223f84e53ccb1563023cc6976a0e9a5ccbc9b668e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_7a3216c85f7f3dac58980e7d17ab8c9840e4a398ba10d52355451bfb54c18fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3216c85f7f3dac58980e7d17ab8c9840e4a398ba10d52355451bfb54c18fe4->enter($__internal_7a3216c85f7f3dac58980e7d17ab8c9840e4a398ba10d52355451bfb54c18fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_fdad71a05aa21c6825cd57223f84e53ccb1563023cc6976a0e9a5ccbc9b668e8->leave($__internal_fdad71a05aa21c6825cd57223f84e53ccb1563023cc6976a0e9a5ccbc9b668e8_prof);

        
        $__internal_7a3216c85f7f3dac58980e7d17ab8c9840e4a398ba10d52355451bfb54c18fe4->leave($__internal_7a3216c85f7f3dac58980e7d17ab8c9840e4a398ba10d52355451bfb54c18fe4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
