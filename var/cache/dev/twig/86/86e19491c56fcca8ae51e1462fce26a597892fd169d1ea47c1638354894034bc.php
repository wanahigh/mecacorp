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
        $__internal_38358779906645ff6a2c692494ca637e1d4d72e48a9852d3582b2b83bb111e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38358779906645ff6a2c692494ca637e1d4d72e48a9852d3582b2b83bb111e5b->enter($__internal_38358779906645ff6a2c692494ca637e1d4d72e48a9852d3582b2b83bb111e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e26c44f5301e58fa3a801b0eac68d34c821fdd335d921087fe26280478055e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26c44f5301e58fa3a801b0eac68d34c821fdd335d921087fe26280478055e28->enter($__internal_e26c44f5301e58fa3a801b0eac68d34c821fdd335d921087fe26280478055e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38358779906645ff6a2c692494ca637e1d4d72e48a9852d3582b2b83bb111e5b->leave($__internal_38358779906645ff6a2c692494ca637e1d4d72e48a9852d3582b2b83bb111e5b_prof);

        
        $__internal_e26c44f5301e58fa3a801b0eac68d34c821fdd335d921087fe26280478055e28->leave($__internal_e26c44f5301e58fa3a801b0eac68d34c821fdd335d921087fe26280478055e28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d81c0d3f55a61c76988a20e1557320d17c6279c992c86703d007c1bc0acbb6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81c0d3f55a61c76988a20e1557320d17c6279c992c86703d007c1bc0acbb6e9->enter($__internal_d81c0d3f55a61c76988a20e1557320d17c6279c992c86703d007c1bc0acbb6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d2e02eb19373d046c7b1d39f32be04202057fa02dec2f5bafd0109c8239f94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2e02eb19373d046c7b1d39f32be04202057fa02dec2f5bafd0109c8239f94d->enter($__internal_1d2e02eb19373d046c7b1d39f32be04202057fa02dec2f5bafd0109c8239f94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1d2e02eb19373d046c7b1d39f32be04202057fa02dec2f5bafd0109c8239f94d->leave($__internal_1d2e02eb19373d046c7b1d39f32be04202057fa02dec2f5bafd0109c8239f94d_prof);

        
        $__internal_d81c0d3f55a61c76988a20e1557320d17c6279c992c86703d007c1bc0acbb6e9->leave($__internal_d81c0d3f55a61c76988a20e1557320d17c6279c992c86703d007c1bc0acbb6e9_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
