<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9937a5da4509c473119ce9de814f4cdda64284fbc3839da57df5538ef218aba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_5642db1df5d3d9b3d4e72bc80112c84a979b3bd3884fd8647dfca58a0336578b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5642db1df5d3d9b3d4e72bc80112c84a979b3bd3884fd8647dfca58a0336578b->enter($__internal_5642db1df5d3d9b3d4e72bc80112c84a979b3bd3884fd8647dfca58a0336578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4b6234e05443d9cca6f53f62bc3967b6003ead95a1e7b6bd9a8882bd611a995d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6234e05443d9cca6f53f62bc3967b6003ead95a1e7b6bd9a8882bd611a995d->enter($__internal_4b6234e05443d9cca6f53f62bc3967b6003ead95a1e7b6bd9a8882bd611a995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5642db1df5d3d9b3d4e72bc80112c84a979b3bd3884fd8647dfca58a0336578b->leave($__internal_5642db1df5d3d9b3d4e72bc80112c84a979b3bd3884fd8647dfca58a0336578b_prof);

        
        $__internal_4b6234e05443d9cca6f53f62bc3967b6003ead95a1e7b6bd9a8882bd611a995d->leave($__internal_4b6234e05443d9cca6f53f62bc3967b6003ead95a1e7b6bd9a8882bd611a995d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9eb164fadff9cb3a4f9d65a6e2dfa97b51eb8bfe996588c755062bc4bfbe7919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb164fadff9cb3a4f9d65a6e2dfa97b51eb8bfe996588c755062bc4bfbe7919->enter($__internal_9eb164fadff9cb3a4f9d65a6e2dfa97b51eb8bfe996588c755062bc4bfbe7919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b92206e014ffec7999762500b40bc09edd0ae820fe2befa1198ee339e78865b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92206e014ffec7999762500b40bc09edd0ae820fe2befa1198ee339e78865b1->enter($__internal_b92206e014ffec7999762500b40bc09edd0ae820fe2befa1198ee339e78865b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b92206e014ffec7999762500b40bc09edd0ae820fe2befa1198ee339e78865b1->leave($__internal_b92206e014ffec7999762500b40bc09edd0ae820fe2befa1198ee339e78865b1_prof);

        
        $__internal_9eb164fadff9cb3a4f9d65a6e2dfa97b51eb8bfe996588c755062bc4bfbe7919->leave($__internal_9eb164fadff9cb3a4f9d65a6e2dfa97b51eb8bfe996588c755062bc4bfbe7919_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/fabien/Modèles/mecacorp maj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
