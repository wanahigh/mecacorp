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
        $__internal_f77c41c747cae5370b885edac57e95b71fb0ae3826ea6b3dfb0bde6e7e3c82fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77c41c747cae5370b885edac57e95b71fb0ae3826ea6b3dfb0bde6e7e3c82fa->enter($__internal_f77c41c747cae5370b885edac57e95b71fb0ae3826ea6b3dfb0bde6e7e3c82fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8ad1eb8ea39a6606bca4a6b3ef4882fa803b99cd676c9a95e539bf48a3353420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad1eb8ea39a6606bca4a6b3ef4882fa803b99cd676c9a95e539bf48a3353420->enter($__internal_8ad1eb8ea39a6606bca4a6b3ef4882fa803b99cd676c9a95e539bf48a3353420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77c41c747cae5370b885edac57e95b71fb0ae3826ea6b3dfb0bde6e7e3c82fa->leave($__internal_f77c41c747cae5370b885edac57e95b71fb0ae3826ea6b3dfb0bde6e7e3c82fa_prof);

        
        $__internal_8ad1eb8ea39a6606bca4a6b3ef4882fa803b99cd676c9a95e539bf48a3353420->leave($__internal_8ad1eb8ea39a6606bca4a6b3ef4882fa803b99cd676c9a95e539bf48a3353420_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a50b50d0e885bcdf8c7be8d4f937861a5aff1b933bc04102fd03e3b197f0927d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50b50d0e885bcdf8c7be8d4f937861a5aff1b933bc04102fd03e3b197f0927d->enter($__internal_a50b50d0e885bcdf8c7be8d4f937861a5aff1b933bc04102fd03e3b197f0927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_187105b12cd067fa367ae8c5dbca273a6c883a144f35d1ebc3856c6e4b429233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187105b12cd067fa367ae8c5dbca273a6c883a144f35d1ebc3856c6e4b429233->enter($__internal_187105b12cd067fa367ae8c5dbca273a6c883a144f35d1ebc3856c6e4b429233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_187105b12cd067fa367ae8c5dbca273a6c883a144f35d1ebc3856c6e4b429233->leave($__internal_187105b12cd067fa367ae8c5dbca273a6c883a144f35d1ebc3856c6e4b429233_prof);

        
        $__internal_a50b50d0e885bcdf8c7be8d4f937861a5aff1b933bc04102fd03e3b197f0927d->leave($__internal_a50b50d0e885bcdf8c7be8d4f937861a5aff1b933bc04102fd03e3b197f0927d_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/fabien/Modèles/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
