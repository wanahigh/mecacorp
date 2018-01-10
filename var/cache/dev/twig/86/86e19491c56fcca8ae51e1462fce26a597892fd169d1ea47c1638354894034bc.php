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
        $__internal_1bf359747833340a4caf259c22542c4488eb402fa3df980a609a388047414ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf359747833340a4caf259c22542c4488eb402fa3df980a609a388047414ead->enter($__internal_1bf359747833340a4caf259c22542c4488eb402fa3df980a609a388047414ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_02f73a00486f7a845695fff152994dff00e83d4739ea33613690ce3fc85fd62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f73a00486f7a845695fff152994dff00e83d4739ea33613690ce3fc85fd62b->enter($__internal_02f73a00486f7a845695fff152994dff00e83d4739ea33613690ce3fc85fd62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf359747833340a4caf259c22542c4488eb402fa3df980a609a388047414ead->leave($__internal_1bf359747833340a4caf259c22542c4488eb402fa3df980a609a388047414ead_prof);

        
        $__internal_02f73a00486f7a845695fff152994dff00e83d4739ea33613690ce3fc85fd62b->leave($__internal_02f73a00486f7a845695fff152994dff00e83d4739ea33613690ce3fc85fd62b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_732481c8e5eb3a993363c969be56386f013fff517eac8ead4df1e4d25eea3e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732481c8e5eb3a993363c969be56386f013fff517eac8ead4df1e4d25eea3e3c->enter($__internal_732481c8e5eb3a993363c969be56386f013fff517eac8ead4df1e4d25eea3e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3beebc7a8679d74e8f88bce7cf5f2c1618d8420eea660db23e81ae3de9a4b41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beebc7a8679d74e8f88bce7cf5f2c1618d8420eea660db23e81ae3de9a4b41d->enter($__internal_3beebc7a8679d74e8f88bce7cf5f2c1618d8420eea660db23e81ae3de9a4b41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3beebc7a8679d74e8f88bce7cf5f2c1618d8420eea660db23e81ae3de9a4b41d->leave($__internal_3beebc7a8679d74e8f88bce7cf5f2c1618d8420eea660db23e81ae3de9a4b41d_prof);

        
        $__internal_732481c8e5eb3a993363c969be56386f013fff517eac8ead4df1e4d25eea3e3c->leave($__internal_732481c8e5eb3a993363c969be56386f013fff517eac8ead4df1e4d25eea3e3c_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
