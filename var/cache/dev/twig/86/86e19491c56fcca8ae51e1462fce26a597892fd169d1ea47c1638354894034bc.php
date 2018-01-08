<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9937a5da4509c473119ce9de814f4cdda64284fbc3839da57df5538ef218aba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df7ad05021ce70429b82ed75c064ce97fdce681ba4c7357be5624ff02f983d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7ad05021ce70429b82ed75c064ce97fdce681ba4c7357be5624ff02f983d68->enter($__internal_df7ad05021ce70429b82ed75c064ce97fdce681ba4c7357be5624ff02f983d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_d3411bef6aaf1144890f8e652c32cdf6c006e2f3d665417e67cc42bf1954de90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3411bef6aaf1144890f8e652c32cdf6c006e2f3d665417e67cc42bf1954de90->enter($__internal_d3411bef6aaf1144890f8e652c32cdf6c006e2f3d665417e67cc42bf1954de90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7ad05021ce70429b82ed75c064ce97fdce681ba4c7357be5624ff02f983d68->leave($__internal_df7ad05021ce70429b82ed75c064ce97fdce681ba4c7357be5624ff02f983d68_prof);

        
        $__internal_d3411bef6aaf1144890f8e652c32cdf6c006e2f3d665417e67cc42bf1954de90->leave($__internal_d3411bef6aaf1144890f8e652c32cdf6c006e2f3d665417e67cc42bf1954de90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a360b4e8df69c8f87366f57dd1cf88ba273888326bdc4f87444da4dddd6668d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a360b4e8df69c8f87366f57dd1cf88ba273888326bdc4f87444da4dddd6668d->enter($__internal_4a360b4e8df69c8f87366f57dd1cf88ba273888326bdc4f87444da4dddd6668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_87370a7067e3ab72ec4bafa35150ae173455504f19e9e3f4c88e925749df5cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87370a7067e3ab72ec4bafa35150ae173455504f19e9e3f4c88e925749df5cf1->enter($__internal_87370a7067e3ab72ec4bafa35150ae173455504f19e9e3f4c88e925749df5cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_87370a7067e3ab72ec4bafa35150ae173455504f19e9e3f4c88e925749df5cf1->leave($__internal_87370a7067e3ab72ec4bafa35150ae173455504f19e9e3f4c88e925749df5cf1_prof);

        
        $__internal_4a360b4e8df69c8f87366f57dd1cf88ba273888326bdc4f87444da4dddd6668d->leave($__internal_4a360b4e8df69c8f87366f57dd1cf88ba273888326bdc4f87444da4dddd6668d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
