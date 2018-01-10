<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_34e99009582291607115d5764258520022d6b9db4f8973514c50e8eea510fcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52bf1520d55a5a802b6912b710653fc423146abc85109599f6e8bd8aabaf55e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bf1520d55a5a802b6912b710653fc423146abc85109599f6e8bd8aabaf55e7->enter($__internal_52bf1520d55a5a802b6912b710653fc423146abc85109599f6e8bd8aabaf55e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_f3cdf0322c87224d65859a044d74ca7ab3251edd5a074abcb90465693c2d0860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cdf0322c87224d65859a044d74ca7ab3251edd5a074abcb90465693c2d0860->enter($__internal_f3cdf0322c87224d65859a044d74ca7ab3251edd5a074abcb90465693c2d0860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bf1520d55a5a802b6912b710653fc423146abc85109599f6e8bd8aabaf55e7->leave($__internal_52bf1520d55a5a802b6912b710653fc423146abc85109599f6e8bd8aabaf55e7_prof);

        
        $__internal_f3cdf0322c87224d65859a044d74ca7ab3251edd5a074abcb90465693c2d0860->leave($__internal_f3cdf0322c87224d65859a044d74ca7ab3251edd5a074abcb90465693c2d0860_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e96ff2275ea0569f5f688f8d11190b9015de29ed6cd1cf451834113f5c89456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e96ff2275ea0569f5f688f8d11190b9015de29ed6cd1cf451834113f5c89456->enter($__internal_0e96ff2275ea0569f5f688f8d11190b9015de29ed6cd1cf451834113f5c89456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_665cd33b03792ecd3e1ab987980d53d118c112f0224598541f781fe7765ce235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665cd33b03792ecd3e1ab987980d53d118c112f0224598541f781fe7765ce235->enter($__internal_665cd33b03792ecd3e1ab987980d53d118c112f0224598541f781fe7765ce235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_665cd33b03792ecd3e1ab987980d53d118c112f0224598541f781fe7765ce235->leave($__internal_665cd33b03792ecd3e1ab987980d53d118c112f0224598541f781fe7765ce235_prof);

        
        $__internal_0e96ff2275ea0569f5f688f8d11190b9015de29ed6cd1cf451834113f5c89456->leave($__internal_0e96ff2275ea0569f5f688f8d11190b9015de29ed6cd1cf451834113f5c89456_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
