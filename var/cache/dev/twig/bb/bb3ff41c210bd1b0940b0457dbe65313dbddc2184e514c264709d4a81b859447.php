<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_eb58e35063f9e25502b51990a39d22a8152d4243ed55c442de1aca26ccb65fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_9b2c9babf0e13fde79ce509432cc619d9e4d9525d7a57515af8925fe18f67d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2c9babf0e13fde79ce509432cc619d9e4d9525d7a57515af8925fe18f67d13->enter($__internal_9b2c9babf0e13fde79ce509432cc619d9e4d9525d7a57515af8925fe18f67d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5b54f375df4e99708438f8326c51621aa3aa2f0d9d5330bec788d44600465089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b54f375df4e99708438f8326c51621aa3aa2f0d9d5330bec788d44600465089->enter($__internal_5b54f375df4e99708438f8326c51621aa3aa2f0d9d5330bec788d44600465089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b2c9babf0e13fde79ce509432cc619d9e4d9525d7a57515af8925fe18f67d13->leave($__internal_9b2c9babf0e13fde79ce509432cc619d9e4d9525d7a57515af8925fe18f67d13_prof);

        
        $__internal_5b54f375df4e99708438f8326c51621aa3aa2f0d9d5330bec788d44600465089->leave($__internal_5b54f375df4e99708438f8326c51621aa3aa2f0d9d5330bec788d44600465089_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8dc4e05c57bd172f715485e085cefa58e27d92a7bf7b5d70199a440b7e49cf7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc4e05c57bd172f715485e085cefa58e27d92a7bf7b5d70199a440b7e49cf7a->enter($__internal_8dc4e05c57bd172f715485e085cefa58e27d92a7bf7b5d70199a440b7e49cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_12cc471341abe6f0ec4c1ba1734e805e13de0a101fd7e3eae0270da392d36292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cc471341abe6f0ec4c1ba1734e805e13de0a101fd7e3eae0270da392d36292->enter($__internal_12cc471341abe6f0ec4c1ba1734e805e13de0a101fd7e3eae0270da392d36292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_12cc471341abe6f0ec4c1ba1734e805e13de0a101fd7e3eae0270da392d36292->leave($__internal_12cc471341abe6f0ec4c1ba1734e805e13de0a101fd7e3eae0270da392d36292_prof);

        
        $__internal_8dc4e05c57bd172f715485e085cefa58e27d92a7bf7b5d70199a440b7e49cf7a->leave($__internal_8dc4e05c57bd172f715485e085cefa58e27d92a7bf7b5d70199a440b7e49cf7a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77150bf7fd62c0b873dad052204d779ae218c6c9d1dcafa7d87fdd492e91ae0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77150bf7fd62c0b873dad052204d779ae218c6c9d1dcafa7d87fdd492e91ae0e->enter($__internal_77150bf7fd62c0b873dad052204d779ae218c6c9d1dcafa7d87fdd492e91ae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ccee59c43c77f6593a4a9736cfea61544b221a4ee377c7a7448732d5ed682853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccee59c43c77f6593a4a9736cfea61544b221a4ee377c7a7448732d5ed682853->enter($__internal_ccee59c43c77f6593a4a9736cfea61544b221a4ee377c7a7448732d5ed682853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ccee59c43c77f6593a4a9736cfea61544b221a4ee377c7a7448732d5ed682853->leave($__internal_ccee59c43c77f6593a4a9736cfea61544b221a4ee377c7a7448732d5ed682853_prof);

        
        $__internal_77150bf7fd62c0b873dad052204d779ae218c6c9d1dcafa7d87fdd492e91ae0e->leave($__internal_77150bf7fd62c0b873dad052204d779ae218c6c9d1dcafa7d87fdd492e91ae0e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a5f16eda523c5f58f383646ba1dfe5771fc6935960957c2487b3265b7a35aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5f16eda523c5f58f383646ba1dfe5771fc6935960957c2487b3265b7a35aa8->enter($__internal_6a5f16eda523c5f58f383646ba1dfe5771fc6935960957c2487b3265b7a35aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7c7e4553390f3c1a5af23b82a927a08191e6f3ddfb85b30b2baf3c0ebd332d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c7e4553390f3c1a5af23b82a927a08191e6f3ddfb85b30b2baf3c0ebd332d2->enter($__internal_d7c7e4553390f3c1a5af23b82a927a08191e6f3ddfb85b30b2baf3c0ebd332d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d7c7e4553390f3c1a5af23b82a927a08191e6f3ddfb85b30b2baf3c0ebd332d2->leave($__internal_d7c7e4553390f3c1a5af23b82a927a08191e6f3ddfb85b30b2baf3c0ebd332d2_prof);

        
        $__internal_6a5f16eda523c5f58f383646ba1dfe5771fc6935960957c2487b3265b7a35aa8->leave($__internal_6a5f16eda523c5f58f383646ba1dfe5771fc6935960957c2487b3265b7a35aa8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
