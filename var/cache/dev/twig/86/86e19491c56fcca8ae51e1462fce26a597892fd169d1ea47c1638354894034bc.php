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
        $__internal_53657e249ac95e7f35e79b083fc3dfdfb388f39914c5e120f902b0ece1c56187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53657e249ac95e7f35e79b083fc3dfdfb388f39914c5e120f902b0ece1c56187->enter($__internal_53657e249ac95e7f35e79b083fc3dfdfb388f39914c5e120f902b0ece1c56187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_31ef593f5c7f835d51391e9139c95f171bb6643baf0bc40db8476da36b1c6594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ef593f5c7f835d51391e9139c95f171bb6643baf0bc40db8476da36b1c6594->enter($__internal_31ef593f5c7f835d51391e9139c95f171bb6643baf0bc40db8476da36b1c6594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53657e249ac95e7f35e79b083fc3dfdfb388f39914c5e120f902b0ece1c56187->leave($__internal_53657e249ac95e7f35e79b083fc3dfdfb388f39914c5e120f902b0ece1c56187_prof);

        
        $__internal_31ef593f5c7f835d51391e9139c95f171bb6643baf0bc40db8476da36b1c6594->leave($__internal_31ef593f5c7f835d51391e9139c95f171bb6643baf0bc40db8476da36b1c6594_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01afbe3d02f24060f21d52868e4e418948cf0f15ac563e322bab2ebd328378c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01afbe3d02f24060f21d52868e4e418948cf0f15ac563e322bab2ebd328378c9->enter($__internal_01afbe3d02f24060f21d52868e4e418948cf0f15ac563e322bab2ebd328378c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c86796a207d50c04f3b33795d90c0425bc1c0f607dc733af50ee9e1c3e7845c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c86796a207d50c04f3b33795d90c0425bc1c0f607dc733af50ee9e1c3e7845c->enter($__internal_5c86796a207d50c04f3b33795d90c0425bc1c0f607dc733af50ee9e1c3e7845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5c86796a207d50c04f3b33795d90c0425bc1c0f607dc733af50ee9e1c3e7845c->leave($__internal_5c86796a207d50c04f3b33795d90c0425bc1c0f607dc733af50ee9e1c3e7845c_prof);

        
        $__internal_01afbe3d02f24060f21d52868e4e418948cf0f15ac563e322bab2ebd328378c9->leave($__internal_01afbe3d02f24060f21d52868e4e418948cf0f15ac563e322bab2ebd328378c9_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/fabien/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
