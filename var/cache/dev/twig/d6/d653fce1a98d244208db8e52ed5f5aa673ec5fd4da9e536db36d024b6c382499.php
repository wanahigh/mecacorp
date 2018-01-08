<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3489a631f7bb192ed43585930b05c71acc70b1ae896f0f676525d3497d015984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfcd69106a3574844d04a7fa67811e6c70d025e6f4f05ac581921d26e2d3da0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcd69106a3574844d04a7fa67811e6c70d025e6f4f05ac581921d26e2d3da0a->enter($__internal_cfcd69106a3574844d04a7fa67811e6c70d025e6f4f05ac581921d26e2d3da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7c5bb9d5fa2ccecf2d03101e44b0574779eceb3f2c3f903c5f82d5e6c58df31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5bb9d5fa2ccecf2d03101e44b0574779eceb3f2c3f903c5f82d5e6c58df31f->enter($__internal_7c5bb9d5fa2ccecf2d03101e44b0574779eceb3f2c3f903c5f82d5e6c58df31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcd69106a3574844d04a7fa67811e6c70d025e6f4f05ac581921d26e2d3da0a->leave($__internal_cfcd69106a3574844d04a7fa67811e6c70d025e6f4f05ac581921d26e2d3da0a_prof);

        
        $__internal_7c5bb9d5fa2ccecf2d03101e44b0574779eceb3f2c3f903c5f82d5e6c58df31f->leave($__internal_7c5bb9d5fa2ccecf2d03101e44b0574779eceb3f2c3f903c5f82d5e6c58df31f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9c7e830f4222e89942b01a590c235c5fb8fa9f58889078637190ec420cf8998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c7e830f4222e89942b01a590c235c5fb8fa9f58889078637190ec420cf8998->enter($__internal_d9c7e830f4222e89942b01a590c235c5fb8fa9f58889078637190ec420cf8998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87de86f06ae3b2abade5953008d39c461afcbcac4275861b8bfb7e0c7eeda08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87de86f06ae3b2abade5953008d39c461afcbcac4275861b8bfb7e0c7eeda08a->enter($__internal_87de86f06ae3b2abade5953008d39c461afcbcac4275861b8bfb7e0c7eeda08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_87de86f06ae3b2abade5953008d39c461afcbcac4275861b8bfb7e0c7eeda08a->leave($__internal_87de86f06ae3b2abade5953008d39c461afcbcac4275861b8bfb7e0c7eeda08a_prof);

        
        $__internal_d9c7e830f4222e89942b01a590c235c5fb8fa9f58889078637190ec420cf8998->leave($__internal_d9c7e830f4222e89942b01a590c235c5fb8fa9f58889078637190ec420cf8998_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_935c2530be49fb20730a7791f82a6eb850c3e5839c6aed6475fe54a36100110a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935c2530be49fb20730a7791f82a6eb850c3e5839c6aed6475fe54a36100110a->enter($__internal_935c2530be49fb20730a7791f82a6eb850c3e5839c6aed6475fe54a36100110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0701e4fcd6ae57266e1e78fb897a912894e12d7d230ace2c993abd6fbf5a51e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0701e4fcd6ae57266e1e78fb897a912894e12d7d230ace2c993abd6fbf5a51e9->enter($__internal_0701e4fcd6ae57266e1e78fb897a912894e12d7d230ace2c993abd6fbf5a51e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_0701e4fcd6ae57266e1e78fb897a912894e12d7d230ace2c993abd6fbf5a51e9->leave($__internal_0701e4fcd6ae57266e1e78fb897a912894e12d7d230ace2c993abd6fbf5a51e9_prof);

        
        $__internal_935c2530be49fb20730a7791f82a6eb850c3e5839c6aed6475fe54a36100110a->leave($__internal_935c2530be49fb20730a7791f82a6eb850c3e5839c6aed6475fe54a36100110a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
