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
        $__internal_26ea2e48fe1c9b7a1aa3650c174c9b032530ce8473c3aec26f4836a92166e798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ea2e48fe1c9b7a1aa3650c174c9b032530ce8473c3aec26f4836a92166e798->enter($__internal_26ea2e48fe1c9b7a1aa3650c174c9b032530ce8473c3aec26f4836a92166e798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_41f35390b21c0c87065ffce16481250b154d61f44c3b273b4f48eb03e575caf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f35390b21c0c87065ffce16481250b154d61f44c3b273b4f48eb03e575caf3->enter($__internal_41f35390b21c0c87065ffce16481250b154d61f44c3b273b4f48eb03e575caf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ea2e48fe1c9b7a1aa3650c174c9b032530ce8473c3aec26f4836a92166e798->leave($__internal_26ea2e48fe1c9b7a1aa3650c174c9b032530ce8473c3aec26f4836a92166e798_prof);

        
        $__internal_41f35390b21c0c87065ffce16481250b154d61f44c3b273b4f48eb03e575caf3->leave($__internal_41f35390b21c0c87065ffce16481250b154d61f44c3b273b4f48eb03e575caf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01c19647ba75b059745c7b1de9dab40b842a1c8767c9674e1bdaa676c9e756f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c19647ba75b059745c7b1de9dab40b842a1c8767c9674e1bdaa676c9e756f6->enter($__internal_01c19647ba75b059745c7b1de9dab40b842a1c8767c9674e1bdaa676c9e756f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_519c3b0ba3dbaa5e15c383ef11905b28f6f9b1a3d9235cfb5cf884e341225c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519c3b0ba3dbaa5e15c383ef11905b28f6f9b1a3d9235cfb5cf884e341225c96->enter($__internal_519c3b0ba3dbaa5e15c383ef11905b28f6f9b1a3d9235cfb5cf884e341225c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_519c3b0ba3dbaa5e15c383ef11905b28f6f9b1a3d9235cfb5cf884e341225c96->leave($__internal_519c3b0ba3dbaa5e15c383ef11905b28f6f9b1a3d9235cfb5cf884e341225c96_prof);

        
        $__internal_01c19647ba75b059745c7b1de9dab40b842a1c8767c9674e1bdaa676c9e756f6->leave($__internal_01c19647ba75b059745c7b1de9dab40b842a1c8767c9674e1bdaa676c9e756f6_prof);

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
