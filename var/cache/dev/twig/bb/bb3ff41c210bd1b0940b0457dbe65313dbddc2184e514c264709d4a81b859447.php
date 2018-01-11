<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_eb58e35063f9e25502b51990a39d22a8152d4243ed55c442de1aca26ccb65fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faf5266c93ee2c1a4df943c0548c8f4b854492f3410e482671c6eef02fad2187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf5266c93ee2c1a4df943c0548c8f4b854492f3410e482671c6eef02fad2187->enter($__internal_faf5266c93ee2c1a4df943c0548c8f4b854492f3410e482671c6eef02fad2187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1a9f92404e475e7b6213927798024297dee3b9c0e01c367b09bac2084cf6e9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9f92404e475e7b6213927798024297dee3b9c0e01c367b09bac2084cf6e9bc->enter($__internal_1a9f92404e475e7b6213927798024297dee3b9c0e01c367b09bac2084cf6e9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faf5266c93ee2c1a4df943c0548c8f4b854492f3410e482671c6eef02fad2187->leave($__internal_faf5266c93ee2c1a4df943c0548c8f4b854492f3410e482671c6eef02fad2187_prof);

        
        $__internal_1a9f92404e475e7b6213927798024297dee3b9c0e01c367b09bac2084cf6e9bc->leave($__internal_1a9f92404e475e7b6213927798024297dee3b9c0e01c367b09bac2084cf6e9bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a17e1e6b85a8b91f8fba0c7ad2ae0211b36bfe62bdc1df13b2abe97dcbf091e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a17e1e6b85a8b91f8fba0c7ad2ae0211b36bfe62bdc1df13b2abe97dcbf091e->enter($__internal_5a17e1e6b85a8b91f8fba0c7ad2ae0211b36bfe62bdc1df13b2abe97dcbf091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_404cd153aacf93a2f977d282cb2099971473e1c5ca5759a88361cfe6925295c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404cd153aacf93a2f977d282cb2099971473e1c5ca5759a88361cfe6925295c5->enter($__internal_404cd153aacf93a2f977d282cb2099971473e1c5ca5759a88361cfe6925295c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_404cd153aacf93a2f977d282cb2099971473e1c5ca5759a88361cfe6925295c5->leave($__internal_404cd153aacf93a2f977d282cb2099971473e1c5ca5759a88361cfe6925295c5_prof);

        
        $__internal_5a17e1e6b85a8b91f8fba0c7ad2ae0211b36bfe62bdc1df13b2abe97dcbf091e->leave($__internal_5a17e1e6b85a8b91f8fba0c7ad2ae0211b36bfe62bdc1df13b2abe97dcbf091e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca0649dc73cd34b76c75078e47f28986ef3baedc96ad5cb44a6163e739469a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0649dc73cd34b76c75078e47f28986ef3baedc96ad5cb44a6163e739469a63->enter($__internal_ca0649dc73cd34b76c75078e47f28986ef3baedc96ad5cb44a6163e739469a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ffcb70eaee4a55752c5d92e9a515c6d2f0d6c770e58c9a69ebd1519e97568e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcb70eaee4a55752c5d92e9a515c6d2f0d6c770e58c9a69ebd1519e97568e7e->enter($__internal_ffcb70eaee4a55752c5d92e9a515c6d2f0d6c770e58c9a69ebd1519e97568e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ffcb70eaee4a55752c5d92e9a515c6d2f0d6c770e58c9a69ebd1519e97568e7e->leave($__internal_ffcb70eaee4a55752c5d92e9a515c6d2f0d6c770e58c9a69ebd1519e97568e7e_prof);

        
        $__internal_ca0649dc73cd34b76c75078e47f28986ef3baedc96ad5cb44a6163e739469a63->leave($__internal_ca0649dc73cd34b76c75078e47f28986ef3baedc96ad5cb44a6163e739469a63_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfbb4c61e41a299e1863a4830476f76a960c86fe00cf766e3b41ab8ccec28b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbb4c61e41a299e1863a4830476f76a960c86fe00cf766e3b41ab8ccec28b99->enter($__internal_dfbb4c61e41a299e1863a4830476f76a960c86fe00cf766e3b41ab8ccec28b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_454f84e70381c97758744fdfa713a6bf682a9fb80cc1693d920ed169bd079431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454f84e70381c97758744fdfa713a6bf682a9fb80cc1693d920ed169bd079431->enter($__internal_454f84e70381c97758744fdfa713a6bf682a9fb80cc1693d920ed169bd079431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_454f84e70381c97758744fdfa713a6bf682a9fb80cc1693d920ed169bd079431->leave($__internal_454f84e70381c97758744fdfa713a6bf682a9fb80cc1693d920ed169bd079431_prof);

        
        $__internal_dfbb4c61e41a299e1863a4830476f76a960c86fe00cf766e3b41ab8ccec28b99->leave($__internal_dfbb4c61e41a299e1863a4830476f76a960c86fe00cf766e3b41ab8ccec28b99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/fabien/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
