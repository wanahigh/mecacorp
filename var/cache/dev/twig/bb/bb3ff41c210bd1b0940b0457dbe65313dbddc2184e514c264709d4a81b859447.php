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
        $__internal_d604b4d9aae78c858a50d1cafd606433d90bfd739a71083d525f517443a6c563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d604b4d9aae78c858a50d1cafd606433d90bfd739a71083d525f517443a6c563->enter($__internal_d604b4d9aae78c858a50d1cafd606433d90bfd739a71083d525f517443a6c563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8ea646919f10aa665f7a686640421215b551a5838b032a028347379e8c5fc218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea646919f10aa665f7a686640421215b551a5838b032a028347379e8c5fc218->enter($__internal_8ea646919f10aa665f7a686640421215b551a5838b032a028347379e8c5fc218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d604b4d9aae78c858a50d1cafd606433d90bfd739a71083d525f517443a6c563->leave($__internal_d604b4d9aae78c858a50d1cafd606433d90bfd739a71083d525f517443a6c563_prof);

        
        $__internal_8ea646919f10aa665f7a686640421215b551a5838b032a028347379e8c5fc218->leave($__internal_8ea646919f10aa665f7a686640421215b551a5838b032a028347379e8c5fc218_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00d530e3833b9d8724aac868c434a3a408e895b163685dd786b43003128f0d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d530e3833b9d8724aac868c434a3a408e895b163685dd786b43003128f0d34->enter($__internal_00d530e3833b9d8724aac868c434a3a408e895b163685dd786b43003128f0d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a1d793207949f1c1823998981874912c37ca3236fdc899f85ff5aa3d68c73056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d793207949f1c1823998981874912c37ca3236fdc899f85ff5aa3d68c73056->enter($__internal_a1d793207949f1c1823998981874912c37ca3236fdc899f85ff5aa3d68c73056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a1d793207949f1c1823998981874912c37ca3236fdc899f85ff5aa3d68c73056->leave($__internal_a1d793207949f1c1823998981874912c37ca3236fdc899f85ff5aa3d68c73056_prof);

        
        $__internal_00d530e3833b9d8724aac868c434a3a408e895b163685dd786b43003128f0d34->leave($__internal_00d530e3833b9d8724aac868c434a3a408e895b163685dd786b43003128f0d34_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05230f7f5c52e6c394f6f7c38422ff64d4f6424b5fe1f0e1a7f224806f9b25e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05230f7f5c52e6c394f6f7c38422ff64d4f6424b5fe1f0e1a7f224806f9b25e2->enter($__internal_05230f7f5c52e6c394f6f7c38422ff64d4f6424b5fe1f0e1a7f224806f9b25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d048fdf2b663e92b466612dd3c64c1658e01448de17706c95fa7bc8f2cb6157e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d048fdf2b663e92b466612dd3c64c1658e01448de17706c95fa7bc8f2cb6157e->enter($__internal_d048fdf2b663e92b466612dd3c64c1658e01448de17706c95fa7bc8f2cb6157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d048fdf2b663e92b466612dd3c64c1658e01448de17706c95fa7bc8f2cb6157e->leave($__internal_d048fdf2b663e92b466612dd3c64c1658e01448de17706c95fa7bc8f2cb6157e_prof);

        
        $__internal_05230f7f5c52e6c394f6f7c38422ff64d4f6424b5fe1f0e1a7f224806f9b25e2->leave($__internal_05230f7f5c52e6c394f6f7c38422ff64d4f6424b5fe1f0e1a7f224806f9b25e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c194b02b3d0dc19daf8fef41d1f6c3939fccd6aa50f6da5cf8a4163d54338b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c194b02b3d0dc19daf8fef41d1f6c3939fccd6aa50f6da5cf8a4163d54338b8a->enter($__internal_c194b02b3d0dc19daf8fef41d1f6c3939fccd6aa50f6da5cf8a4163d54338b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c88a3fec78df304cfc571a75497b1705d5b93eeb0d0bcea90736c91e0200649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c88a3fec78df304cfc571a75497b1705d5b93eeb0d0bcea90736c91e0200649->enter($__internal_2c88a3fec78df304cfc571a75497b1705d5b93eeb0d0bcea90736c91e0200649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2c88a3fec78df304cfc571a75497b1705d5b93eeb0d0bcea90736c91e0200649->leave($__internal_2c88a3fec78df304cfc571a75497b1705d5b93eeb0d0bcea90736c91e0200649_prof);

        
        $__internal_c194b02b3d0dc19daf8fef41d1f6c3939fccd6aa50f6da5cf8a4163d54338b8a->leave($__internal_c194b02b3d0dc19daf8fef41d1f6c3939fccd6aa50f6da5cf8a4163d54338b8a_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/fabien/Modèles/mecacorp maj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
