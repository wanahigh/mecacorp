<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e0e06be7be91c3f0a856c023ad1433cefee2f364924c401215ac2b6b917bc160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee7af9fcb9c9acb58ef9652c96ba53a2c31b416a1b4e6977ebd3aac99b15c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee7af9fcb9c9acb58ef9652c96ba53a2c31b416a1b4e6977ebd3aac99b15c26->enter($__internal_3ee7af9fcb9c9acb58ef9652c96ba53a2c31b416a1b4e6977ebd3aac99b15c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6875bfab2e98c54b97c2c1edf96a1fe19d39e094b0f38c721b46cd2a68f6d4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6875bfab2e98c54b97c2c1edf96a1fe19d39e094b0f38c721b46cd2a68f6d4c4->enter($__internal_6875bfab2e98c54b97c2c1edf96a1fe19d39e094b0f38c721b46cd2a68f6d4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee7af9fcb9c9acb58ef9652c96ba53a2c31b416a1b4e6977ebd3aac99b15c26->leave($__internal_3ee7af9fcb9c9acb58ef9652c96ba53a2c31b416a1b4e6977ebd3aac99b15c26_prof);

        
        $__internal_6875bfab2e98c54b97c2c1edf96a1fe19d39e094b0f38c721b46cd2a68f6d4c4->leave($__internal_6875bfab2e98c54b97c2c1edf96a1fe19d39e094b0f38c721b46cd2a68f6d4c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f7247ca15d08c4c7cca500ff557e7019f9f9033590f5a92191239ffefdcd9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7247ca15d08c4c7cca500ff557e7019f9f9033590f5a92191239ffefdcd9f4->enter($__internal_3f7247ca15d08c4c7cca500ff557e7019f9f9033590f5a92191239ffefdcd9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43ac45c17df9f67b1100e35602839f1efcd1a1b6ea79f287dbc2327cf15e73bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ac45c17df9f67b1100e35602839f1efcd1a1b6ea79f287dbc2327cf15e73bf->enter($__internal_43ac45c17df9f67b1100e35602839f1efcd1a1b6ea79f287dbc2327cf15e73bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_43ac45c17df9f67b1100e35602839f1efcd1a1b6ea79f287dbc2327cf15e73bf->leave($__internal_43ac45c17df9f67b1100e35602839f1efcd1a1b6ea79f287dbc2327cf15e73bf_prof);

        
        $__internal_3f7247ca15d08c4c7cca500ff557e7019f9f9033590f5a92191239ffefdcd9f4->leave($__internal_3f7247ca15d08c4c7cca500ff557e7019f9f9033590f5a92191239ffefdcd9f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39214c695a81216b6a4842f393d657e50317e21174ee9dc8879f47ef4ebb18d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39214c695a81216b6a4842f393d657e50317e21174ee9dc8879f47ef4ebb18d4->enter($__internal_39214c695a81216b6a4842f393d657e50317e21174ee9dc8879f47ef4ebb18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44a0d79004b53db8c385e27faf007beeced55f95fb5f4b58e7e7b7b8bd88a4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a0d79004b53db8c385e27faf007beeced55f95fb5f4b58e7e7b7b8bd88a4aa->enter($__internal_44a0d79004b53db8c385e27faf007beeced55f95fb5f4b58e7e7b7b8bd88a4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_44a0d79004b53db8c385e27faf007beeced55f95fb5f4b58e7e7b7b8bd88a4aa->leave($__internal_44a0d79004b53db8c385e27faf007beeced55f95fb5f4b58e7e7b7b8bd88a4aa_prof);

        
        $__internal_39214c695a81216b6a4842f393d657e50317e21174ee9dc8879f47ef4ebb18d4->leave($__internal_39214c695a81216b6a4842f393d657e50317e21174ee9dc8879f47ef4ebb18d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
