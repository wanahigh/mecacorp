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
        $__internal_22e3b024a26aa80aca7cc63c6778aacac76b40056122ec109a3a01aecba88f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e3b024a26aa80aca7cc63c6778aacac76b40056122ec109a3a01aecba88f3e->enter($__internal_22e3b024a26aa80aca7cc63c6778aacac76b40056122ec109a3a01aecba88f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5540044f015cee72475396ab7d1e91ded2a3c87ef28d46e241813d9fa58712dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5540044f015cee72475396ab7d1e91ded2a3c87ef28d46e241813d9fa58712dc->enter($__internal_5540044f015cee72475396ab7d1e91ded2a3c87ef28d46e241813d9fa58712dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22e3b024a26aa80aca7cc63c6778aacac76b40056122ec109a3a01aecba88f3e->leave($__internal_22e3b024a26aa80aca7cc63c6778aacac76b40056122ec109a3a01aecba88f3e_prof);

        
        $__internal_5540044f015cee72475396ab7d1e91ded2a3c87ef28d46e241813d9fa58712dc->leave($__internal_5540044f015cee72475396ab7d1e91ded2a3c87ef28d46e241813d9fa58712dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_434cf980acbb1744ab0fc5c8c3d779ef5cb978b9a8776cd60535645696fa2ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434cf980acbb1744ab0fc5c8c3d779ef5cb978b9a8776cd60535645696fa2ffd->enter($__internal_434cf980acbb1744ab0fc5c8c3d779ef5cb978b9a8776cd60535645696fa2ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d7aafc719737ade156a59cddf57d4f53ea57a185f6d496620879037b8addf0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aafc719737ade156a59cddf57d4f53ea57a185f6d496620879037b8addf0c7->enter($__internal_d7aafc719737ade156a59cddf57d4f53ea57a185f6d496620879037b8addf0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d7aafc719737ade156a59cddf57d4f53ea57a185f6d496620879037b8addf0c7->leave($__internal_d7aafc719737ade156a59cddf57d4f53ea57a185f6d496620879037b8addf0c7_prof);

        
        $__internal_434cf980acbb1744ab0fc5c8c3d779ef5cb978b9a8776cd60535645696fa2ffd->leave($__internal_434cf980acbb1744ab0fc5c8c3d779ef5cb978b9a8776cd60535645696fa2ffd_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
