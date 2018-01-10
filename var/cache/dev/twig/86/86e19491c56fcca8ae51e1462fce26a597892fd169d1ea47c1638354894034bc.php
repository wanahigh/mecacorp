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
        $__internal_72e2728e8a628cb11276ed7b12f955fcb1c6d2480d7a95cfec5bad82d35d9c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e2728e8a628cb11276ed7b12f955fcb1c6d2480d7a95cfec5bad82d35d9c4a->enter($__internal_72e2728e8a628cb11276ed7b12f955fcb1c6d2480d7a95cfec5bad82d35d9c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_71926ad3f95325c50a0504b7953b581aeedea6bc276d464d1d45814006a12f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71926ad3f95325c50a0504b7953b581aeedea6bc276d464d1d45814006a12f90->enter($__internal_71926ad3f95325c50a0504b7953b581aeedea6bc276d464d1d45814006a12f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e2728e8a628cb11276ed7b12f955fcb1c6d2480d7a95cfec5bad82d35d9c4a->leave($__internal_72e2728e8a628cb11276ed7b12f955fcb1c6d2480d7a95cfec5bad82d35d9c4a_prof);

        
        $__internal_71926ad3f95325c50a0504b7953b581aeedea6bc276d464d1d45814006a12f90->leave($__internal_71926ad3f95325c50a0504b7953b581aeedea6bc276d464d1d45814006a12f90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a22b56a3c2c62215fed8ecfc1b7746c94f6a6ca904f0eaa795a5fa2bcf24e14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22b56a3c2c62215fed8ecfc1b7746c94f6a6ca904f0eaa795a5fa2bcf24e14c->enter($__internal_a22b56a3c2c62215fed8ecfc1b7746c94f6a6ca904f0eaa795a5fa2bcf24e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_210afa31239bb1879cbec99f151a637b9e9e188f3cf11acb0d3010b172c736ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210afa31239bb1879cbec99f151a637b9e9e188f3cf11acb0d3010b172c736ef->enter($__internal_210afa31239bb1879cbec99f151a637b9e9e188f3cf11acb0d3010b172c736ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_210afa31239bb1879cbec99f151a637b9e9e188f3cf11acb0d3010b172c736ef->leave($__internal_210afa31239bb1879cbec99f151a637b9e9e188f3cf11acb0d3010b172c736ef_prof);

        
        $__internal_a22b56a3c2c62215fed8ecfc1b7746c94f6a6ca904f0eaa795a5fa2bcf24e14c->leave($__internal_a22b56a3c2c62215fed8ecfc1b7746c94f6a6ca904f0eaa795a5fa2bcf24e14c_prof);

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
