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
        $__internal_db5521b29e2544eb726219268d09b6fe04ec53b83f180ba8b13712ed998c3ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5521b29e2544eb726219268d09b6fe04ec53b83f180ba8b13712ed998c3ec7->enter($__internal_db5521b29e2544eb726219268d09b6fe04ec53b83f180ba8b13712ed998c3ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ea0f595652ff88274a5163af2c185a4cd38ea7ad85aa86857a929ca78636f0b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0f595652ff88274a5163af2c185a4cd38ea7ad85aa86857a929ca78636f0b8->enter($__internal_ea0f595652ff88274a5163af2c185a4cd38ea7ad85aa86857a929ca78636f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5521b29e2544eb726219268d09b6fe04ec53b83f180ba8b13712ed998c3ec7->leave($__internal_db5521b29e2544eb726219268d09b6fe04ec53b83f180ba8b13712ed998c3ec7_prof);

        
        $__internal_ea0f595652ff88274a5163af2c185a4cd38ea7ad85aa86857a929ca78636f0b8->leave($__internal_ea0f595652ff88274a5163af2c185a4cd38ea7ad85aa86857a929ca78636f0b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2462fc0066f09b98139fffa9d163a2937bb359ed5aa4498629b5ba4c1b10dd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2462fc0066f09b98139fffa9d163a2937bb359ed5aa4498629b5ba4c1b10dd54->enter($__internal_2462fc0066f09b98139fffa9d163a2937bb359ed5aa4498629b5ba4c1b10dd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be802d2735aaa8b705dcab8a6f6b4ce9e3f881d82e21b2577f608033a24ddf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be802d2735aaa8b705dcab8a6f6b4ce9e3f881d82e21b2577f608033a24ddf0b->enter($__internal_be802d2735aaa8b705dcab8a6f6b4ce9e3f881d82e21b2577f608033a24ddf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be802d2735aaa8b705dcab8a6f6b4ce9e3f881d82e21b2577f608033a24ddf0b->leave($__internal_be802d2735aaa8b705dcab8a6f6b4ce9e3f881d82e21b2577f608033a24ddf0b_prof);

        
        $__internal_2462fc0066f09b98139fffa9d163a2937bb359ed5aa4498629b5ba4c1b10dd54->leave($__internal_2462fc0066f09b98139fffa9d163a2937bb359ed5aa4498629b5ba4c1b10dd54_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5467a8f054d14590c801161f028a6842329e25a4e4a5843a033e48c560121ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5467a8f054d14590c801161f028a6842329e25a4e4a5843a033e48c560121ac5->enter($__internal_5467a8f054d14590c801161f028a6842329e25a4e4a5843a033e48c560121ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e7f13774cbd40300318b8a4a062ca6a636e5a305cc7d41af735109897199a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7f13774cbd40300318b8a4a062ca6a636e5a305cc7d41af735109897199a54->enter($__internal_5e7f13774cbd40300318b8a4a062ca6a636e5a305cc7d41af735109897199a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5e7f13774cbd40300318b8a4a062ca6a636e5a305cc7d41af735109897199a54->leave($__internal_5e7f13774cbd40300318b8a4a062ca6a636e5a305cc7d41af735109897199a54_prof);

        
        $__internal_5467a8f054d14590c801161f028a6842329e25a4e4a5843a033e48c560121ac5->leave($__internal_5467a8f054d14590c801161f028a6842329e25a4e4a5843a033e48c560121ac5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63adea709028ce87d4e72056645579a9f0f65c74494e48d6143464093e5c9932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63adea709028ce87d4e72056645579a9f0f65c74494e48d6143464093e5c9932->enter($__internal_63adea709028ce87d4e72056645579a9f0f65c74494e48d6143464093e5c9932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1fcc9e1b9d221a198dc71617d40eddeda0cfd0179c9eaada5406cc38106ddf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fcc9e1b9d221a198dc71617d40eddeda0cfd0179c9eaada5406cc38106ddf7->enter($__internal_e1fcc9e1b9d221a198dc71617d40eddeda0cfd0179c9eaada5406cc38106ddf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e1fcc9e1b9d221a198dc71617d40eddeda0cfd0179c9eaada5406cc38106ddf7->leave($__internal_e1fcc9e1b9d221a198dc71617d40eddeda0cfd0179c9eaada5406cc38106ddf7_prof);

        
        $__internal_63adea709028ce87d4e72056645579a9f0f65c74494e48d6143464093e5c9932->leave($__internal_63adea709028ce87d4e72056645579a9f0f65c74494e48d6143464093e5c9932_prof);

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
