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
        $__internal_21a6655c258273964b2031a68c96706ec948c0dc24a5a2a47dab7c5e3c2b6700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a6655c258273964b2031a68c96706ec948c0dc24a5a2a47dab7c5e3c2b6700->enter($__internal_21a6655c258273964b2031a68c96706ec948c0dc24a5a2a47dab7c5e3c2b6700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8e1daeb5626f9b92e129b5c1cdd049d966d88e1228700ab30863fe78527b9bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e1daeb5626f9b92e129b5c1cdd049d966d88e1228700ab30863fe78527b9bab->enter($__internal_8e1daeb5626f9b92e129b5c1cdd049d966d88e1228700ab30863fe78527b9bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a6655c258273964b2031a68c96706ec948c0dc24a5a2a47dab7c5e3c2b6700->leave($__internal_21a6655c258273964b2031a68c96706ec948c0dc24a5a2a47dab7c5e3c2b6700_prof);

        
        $__internal_8e1daeb5626f9b92e129b5c1cdd049d966d88e1228700ab30863fe78527b9bab->leave($__internal_8e1daeb5626f9b92e129b5c1cdd049d966d88e1228700ab30863fe78527b9bab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94a7b9bcc9d8b5534bc9bbffa37103904aef7163a6d549fd5d4866f5c67b51e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a7b9bcc9d8b5534bc9bbffa37103904aef7163a6d549fd5d4866f5c67b51e1->enter($__internal_94a7b9bcc9d8b5534bc9bbffa37103904aef7163a6d549fd5d4866f5c67b51e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4646333949ff9799535e71cc646b648ce0fad2c729b76576f61d0cc8155894e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4646333949ff9799535e71cc646b648ce0fad2c729b76576f61d0cc8155894e7->enter($__internal_4646333949ff9799535e71cc646b648ce0fad2c729b76576f61d0cc8155894e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4646333949ff9799535e71cc646b648ce0fad2c729b76576f61d0cc8155894e7->leave($__internal_4646333949ff9799535e71cc646b648ce0fad2c729b76576f61d0cc8155894e7_prof);

        
        $__internal_94a7b9bcc9d8b5534bc9bbffa37103904aef7163a6d549fd5d4866f5c67b51e1->leave($__internal_94a7b9bcc9d8b5534bc9bbffa37103904aef7163a6d549fd5d4866f5c67b51e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe87692ff482db2b9ff19b4a83bc2a7f2322dd3f706ec92ff2d9f22cb4996db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe87692ff482db2b9ff19b4a83bc2a7f2322dd3f706ec92ff2d9f22cb4996db0->enter($__internal_fe87692ff482db2b9ff19b4a83bc2a7f2322dd3f706ec92ff2d9f22cb4996db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c22306714b2bc56ed8889dfd7ef79a82a2cb52faf473ae08e756245d49d606f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22306714b2bc56ed8889dfd7ef79a82a2cb52faf473ae08e756245d49d606f8->enter($__internal_c22306714b2bc56ed8889dfd7ef79a82a2cb52faf473ae08e756245d49d606f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c22306714b2bc56ed8889dfd7ef79a82a2cb52faf473ae08e756245d49d606f8->leave($__internal_c22306714b2bc56ed8889dfd7ef79a82a2cb52faf473ae08e756245d49d606f8_prof);

        
        $__internal_fe87692ff482db2b9ff19b4a83bc2a7f2322dd3f706ec92ff2d9f22cb4996db0->leave($__internal_fe87692ff482db2b9ff19b4a83bc2a7f2322dd3f706ec92ff2d9f22cb4996db0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5623c020d4ca2e9cb2423e0cd7ef950d4f08530d551bf241277f684c4817db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5623c020d4ca2e9cb2423e0cd7ef950d4f08530d551bf241277f684c4817db9->enter($__internal_f5623c020d4ca2e9cb2423e0cd7ef950d4f08530d551bf241277f684c4817db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2ef821c1a6fa6bc2529881e477b211e0f71c35fedcd6065ebb44212719da988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ef821c1a6fa6bc2529881e477b211e0f71c35fedcd6065ebb44212719da988->enter($__internal_f2ef821c1a6fa6bc2529881e477b211e0f71c35fedcd6065ebb44212719da988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f2ef821c1a6fa6bc2529881e477b211e0f71c35fedcd6065ebb44212719da988->leave($__internal_f2ef821c1a6fa6bc2529881e477b211e0f71c35fedcd6065ebb44212719da988_prof);

        
        $__internal_f5623c020d4ca2e9cb2423e0cd7ef950d4f08530d551bf241277f684c4817db9->leave($__internal_f5623c020d4ca2e9cb2423e0cd7ef950d4f08530d551bf241277f684c4817db9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
