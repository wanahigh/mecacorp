<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_898e96a95ffc1d5bd4ecb915a11ddd516798b1a22a6154b90d7ad0690aa49263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21f809c487911a23863f96b1a5a9a6a2db69c3c741b43d9941eef29aa5c45dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f809c487911a23863f96b1a5a9a6a2db69c3c741b43d9941eef29aa5c45dea->enter($__internal_21f809c487911a23863f96b1a5a9a6a2db69c3c741b43d9941eef29aa5c45dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_37b7956ed105cc36c11916925353c42e8b18c5335a70345fbbf8a53cf474d2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b7956ed105cc36c11916925353c42e8b18c5335a70345fbbf8a53cf474d2b1->enter($__internal_37b7956ed105cc36c11916925353c42e8b18c5335a70345fbbf8a53cf474d2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_21f809c487911a23863f96b1a5a9a6a2db69c3c741b43d9941eef29aa5c45dea->leave($__internal_21f809c487911a23863f96b1a5a9a6a2db69c3c741b43d9941eef29aa5c45dea_prof);

        
        $__internal_37b7956ed105cc36c11916925353c42e8b18c5335a70345fbbf8a53cf474d2b1->leave($__internal_37b7956ed105cc36c11916925353c42e8b18c5335a70345fbbf8a53cf474d2b1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_26d5f308852d2bc7c5f5aa82b818eb9b4b7b1a32ec35d6ee117ba382d40048c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d5f308852d2bc7c5f5aa82b818eb9b4b7b1a32ec35d6ee117ba382d40048c3->enter($__internal_26d5f308852d2bc7c5f5aa82b818eb9b4b7b1a32ec35d6ee117ba382d40048c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7ed0930877c030d7f142206b08884baad5ef0629e0c92c621637c3632ebe790a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed0930877c030d7f142206b08884baad5ef0629e0c92c621637c3632ebe790a->enter($__internal_7ed0930877c030d7f142206b08884baad5ef0629e0c92c621637c3632ebe790a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_7ed0930877c030d7f142206b08884baad5ef0629e0c92c621637c3632ebe790a->leave($__internal_7ed0930877c030d7f142206b08884baad5ef0629e0c92c621637c3632ebe790a_prof);

        
        $__internal_26d5f308852d2bc7c5f5aa82b818eb9b4b7b1a32ec35d6ee117ba382d40048c3->leave($__internal_26d5f308852d2bc7c5f5aa82b818eb9b4b7b1a32ec35d6ee117ba382d40048c3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5f0f31d78897a641838e05a1254df0cd24ebe3e3ef09a6a1dccd44b6bc534354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0f31d78897a641838e05a1254df0cd24ebe3e3ef09a6a1dccd44b6bc534354->enter($__internal_5f0f31d78897a641838e05a1254df0cd24ebe3e3ef09a6a1dccd44b6bc534354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_caa3cc3160704404c0312a9d8e426f17f0998b53ca736ada45f8a8a3840e22a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa3cc3160704404c0312a9d8e426f17f0998b53ca736ada45f8a8a3840e22a4->enter($__internal_caa3cc3160704404c0312a9d8e426f17f0998b53ca736ada45f8a8a3840e22a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_caa3cc3160704404c0312a9d8e426f17f0998b53ca736ada45f8a8a3840e22a4->leave($__internal_caa3cc3160704404c0312a9d8e426f17f0998b53ca736ada45f8a8a3840e22a4_prof);

        
        $__internal_5f0f31d78897a641838e05a1254df0cd24ebe3e3ef09a6a1dccd44b6bc534354->leave($__internal_5f0f31d78897a641838e05a1254df0cd24ebe3e3ef09a6a1dccd44b6bc534354_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0247680db5bf7839db4ef192ebe3ccaeb71efdff50d35deb936bc8ccd00a9a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0247680db5bf7839db4ef192ebe3ccaeb71efdff50d35deb936bc8ccd00a9a29->enter($__internal_0247680db5bf7839db4ef192ebe3ccaeb71efdff50d35deb936bc8ccd00a9a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dbf14643d79d2be4566287ea374a1407b9ed8e63276a6f22183f15ee14f7c536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf14643d79d2be4566287ea374a1407b9ed8e63276a6f22183f15ee14f7c536->enter($__internal_dbf14643d79d2be4566287ea374a1407b9ed8e63276a6f22183f15ee14f7c536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dbf14643d79d2be4566287ea374a1407b9ed8e63276a6f22183f15ee14f7c536->leave($__internal_dbf14643d79d2be4566287ea374a1407b9ed8e63276a6f22183f15ee14f7c536_prof);

        
        $__internal_0247680db5bf7839db4ef192ebe3ccaeb71efdff50d35deb936bc8ccd00a9a29->leave($__internal_0247680db5bf7839db4ef192ebe3ccaeb71efdff50d35deb936bc8ccd00a9a29_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
