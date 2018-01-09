<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2780448b4b95799c267a6858931371062e29749910f2f2d0f10254f39ada5c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ce7d92f7824627e413212fc0bc96edb544ff616f761a7c6e78ded1a3f9d4011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce7d92f7824627e413212fc0bc96edb544ff616f761a7c6e78ded1a3f9d4011->enter($__internal_7ce7d92f7824627e413212fc0bc96edb544ff616f761a7c6e78ded1a3f9d4011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3b35cf1c789d226d01f8f7161318368a3b70434754168dc055592c607d22206d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b35cf1c789d226d01f8f7161318368a3b70434754168dc055592c607d22206d->enter($__internal_3b35cf1c789d226d01f8f7161318368a3b70434754168dc055592c607d22206d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ce7d92f7824627e413212fc0bc96edb544ff616f761a7c6e78ded1a3f9d4011->leave($__internal_7ce7d92f7824627e413212fc0bc96edb544ff616f761a7c6e78ded1a3f9d4011_prof);

        
        $__internal_3b35cf1c789d226d01f8f7161318368a3b70434754168dc055592c607d22206d->leave($__internal_3b35cf1c789d226d01f8f7161318368a3b70434754168dc055592c607d22206d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d5bf982c3c53a3b89af058dbfe11064d31a160a8e46318300ea5d13f18577740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bf982c3c53a3b89af058dbfe11064d31a160a8e46318300ea5d13f18577740->enter($__internal_d5bf982c3c53a3b89af058dbfe11064d31a160a8e46318300ea5d13f18577740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_875bb27b5c3f15dd8e93fd266756244a39e4b5cb9bce63f0227bed6aa964e217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875bb27b5c3f15dd8e93fd266756244a39e4b5cb9bce63f0227bed6aa964e217->enter($__internal_875bb27b5c3f15dd8e93fd266756244a39e4b5cb9bce63f0227bed6aa964e217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_875bb27b5c3f15dd8e93fd266756244a39e4b5cb9bce63f0227bed6aa964e217->leave($__internal_875bb27b5c3f15dd8e93fd266756244a39e4b5cb9bce63f0227bed6aa964e217_prof);

        
        $__internal_d5bf982c3c53a3b89af058dbfe11064d31a160a8e46318300ea5d13f18577740->leave($__internal_d5bf982c3c53a3b89af058dbfe11064d31a160a8e46318300ea5d13f18577740_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d36cadb2a92ba09529ae2d2df9d11f0f4a056e102c8d42f1993a5484008d35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d36cadb2a92ba09529ae2d2df9d11f0f4a056e102c8d42f1993a5484008d35c->enter($__internal_8d36cadb2a92ba09529ae2d2df9d11f0f4a056e102c8d42f1993a5484008d35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_24089396006e15bcaa03a18c5a6e6452b40e495fa1e07ab034466b10cf783573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24089396006e15bcaa03a18c5a6e6452b40e495fa1e07ab034466b10cf783573->enter($__internal_24089396006e15bcaa03a18c5a6e6452b40e495fa1e07ab034466b10cf783573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_24089396006e15bcaa03a18c5a6e6452b40e495fa1e07ab034466b10cf783573->leave($__internal_24089396006e15bcaa03a18c5a6e6452b40e495fa1e07ab034466b10cf783573_prof);

        
        $__internal_8d36cadb2a92ba09529ae2d2df9d11f0f4a056e102c8d42f1993a5484008d35c->leave($__internal_8d36cadb2a92ba09529ae2d2df9d11f0f4a056e102c8d42f1993a5484008d35c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
