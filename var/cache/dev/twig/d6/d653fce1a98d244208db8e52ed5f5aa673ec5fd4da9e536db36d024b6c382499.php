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
        $__internal_020eb2b5204daeb68a0100d03cda88aef81f002e66255dff366a2b74e685e97e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_020eb2b5204daeb68a0100d03cda88aef81f002e66255dff366a2b74e685e97e->enter($__internal_020eb2b5204daeb68a0100d03cda88aef81f002e66255dff366a2b74e685e97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e375c5a230f4aa66ce4bb95bcf0f3b5a167db55692ef78467456e6e023980c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e375c5a230f4aa66ce4bb95bcf0f3b5a167db55692ef78467456e6e023980c00->enter($__internal_e375c5a230f4aa66ce4bb95bcf0f3b5a167db55692ef78467456e6e023980c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_020eb2b5204daeb68a0100d03cda88aef81f002e66255dff366a2b74e685e97e->leave($__internal_020eb2b5204daeb68a0100d03cda88aef81f002e66255dff366a2b74e685e97e_prof);

        
        $__internal_e375c5a230f4aa66ce4bb95bcf0f3b5a167db55692ef78467456e6e023980c00->leave($__internal_e375c5a230f4aa66ce4bb95bcf0f3b5a167db55692ef78467456e6e023980c00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb08fe47baffa3690981cd82d5212302b95cc050574ed20aea088a560738cf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb08fe47baffa3690981cd82d5212302b95cc050574ed20aea088a560738cf03->enter($__internal_fb08fe47baffa3690981cd82d5212302b95cc050574ed20aea088a560738cf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f799542818f940493749db6788633f7076a323d3e16284aa28ba585e43c95835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f799542818f940493749db6788633f7076a323d3e16284aa28ba585e43c95835->enter($__internal_f799542818f940493749db6788633f7076a323d3e16284aa28ba585e43c95835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f799542818f940493749db6788633f7076a323d3e16284aa28ba585e43c95835->leave($__internal_f799542818f940493749db6788633f7076a323d3e16284aa28ba585e43c95835_prof);

        
        $__internal_fb08fe47baffa3690981cd82d5212302b95cc050574ed20aea088a560738cf03->leave($__internal_fb08fe47baffa3690981cd82d5212302b95cc050574ed20aea088a560738cf03_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_430f13806bb610964fd50f5ade643811a1db670efcc0545fac4a13e87daddf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430f13806bb610964fd50f5ade643811a1db670efcc0545fac4a13e87daddf1c->enter($__internal_430f13806bb610964fd50f5ade643811a1db670efcc0545fac4a13e87daddf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d43e50155372c34a2117873693602a2bdf5eeb64e65e21e8d1ac80b7fa71d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d43e50155372c34a2117873693602a2bdf5eeb64e65e21e8d1ac80b7fa71d0d->enter($__internal_2d43e50155372c34a2117873693602a2bdf5eeb64e65e21e8d1ac80b7fa71d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d43e50155372c34a2117873693602a2bdf5eeb64e65e21e8d1ac80b7fa71d0d->leave($__internal_2d43e50155372c34a2117873693602a2bdf5eeb64e65e21e8d1ac80b7fa71d0d_prof);

        
        $__internal_430f13806bb610964fd50f5ade643811a1db670efcc0545fac4a13e87daddf1c->leave($__internal_430f13806bb610964fd50f5ade643811a1db670efcc0545fac4a13e87daddf1c_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
