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
        $__internal_494196783b09f8374b776a43970f58f4aaae5685e149a682c698382645eca90a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494196783b09f8374b776a43970f58f4aaae5685e149a682c698382645eca90a->enter($__internal_494196783b09f8374b776a43970f58f4aaae5685e149a682c698382645eca90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d9ec30ee6631515d33495ab3b972faa876283303afd0808baa1ebe4714c74925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ec30ee6631515d33495ab3b972faa876283303afd0808baa1ebe4714c74925->enter($__internal_d9ec30ee6631515d33495ab3b972faa876283303afd0808baa1ebe4714c74925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494196783b09f8374b776a43970f58f4aaae5685e149a682c698382645eca90a->leave($__internal_494196783b09f8374b776a43970f58f4aaae5685e149a682c698382645eca90a_prof);

        
        $__internal_d9ec30ee6631515d33495ab3b972faa876283303afd0808baa1ebe4714c74925->leave($__internal_d9ec30ee6631515d33495ab3b972faa876283303afd0808baa1ebe4714c74925_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45012c235574d49f79d9c0165618a87413769e3a42ad2b1072d067cd43a7b8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45012c235574d49f79d9c0165618a87413769e3a42ad2b1072d067cd43a7b8ab->enter($__internal_45012c235574d49f79d9c0165618a87413769e3a42ad2b1072d067cd43a7b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3947689450b6338cf7e1afec40c20ebb19a2ca4bf706f8f96e4513631d0ebbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3947689450b6338cf7e1afec40c20ebb19a2ca4bf706f8f96e4513631d0ebbd9->enter($__internal_3947689450b6338cf7e1afec40c20ebb19a2ca4bf706f8f96e4513631d0ebbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3947689450b6338cf7e1afec40c20ebb19a2ca4bf706f8f96e4513631d0ebbd9->leave($__internal_3947689450b6338cf7e1afec40c20ebb19a2ca4bf706f8f96e4513631d0ebbd9_prof);

        
        $__internal_45012c235574d49f79d9c0165618a87413769e3a42ad2b1072d067cd43a7b8ab->leave($__internal_45012c235574d49f79d9c0165618a87413769e3a42ad2b1072d067cd43a7b8ab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d360070e6134407b78837ab01a1f5f386afa9722ec10da05d16b6f172f4c6481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d360070e6134407b78837ab01a1f5f386afa9722ec10da05d16b6f172f4c6481->enter($__internal_d360070e6134407b78837ab01a1f5f386afa9722ec10da05d16b6f172f4c6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b36ca382bb568dbe05d2870757113f8df12026b2fd58bf125a854b034a322c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36ca382bb568dbe05d2870757113f8df12026b2fd58bf125a854b034a322c51->enter($__internal_b36ca382bb568dbe05d2870757113f8df12026b2fd58bf125a854b034a322c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b36ca382bb568dbe05d2870757113f8df12026b2fd58bf125a854b034a322c51->leave($__internal_b36ca382bb568dbe05d2870757113f8df12026b2fd58bf125a854b034a322c51_prof);

        
        $__internal_d360070e6134407b78837ab01a1f5f386afa9722ec10da05d16b6f172f4c6481->leave($__internal_d360070e6134407b78837ab01a1f5f386afa9722ec10da05d16b6f172f4c6481_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93962f7f65747996ea05b35c43655c968a2131b299779a46c979626d4348a458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93962f7f65747996ea05b35c43655c968a2131b299779a46c979626d4348a458->enter($__internal_93962f7f65747996ea05b35c43655c968a2131b299779a46c979626d4348a458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b290c9afc1eabaf04bf491d7e9e330c2b51fcc9d6b0630bc3e09fb1425ac711c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b290c9afc1eabaf04bf491d7e9e330c2b51fcc9d6b0630bc3e09fb1425ac711c->enter($__internal_b290c9afc1eabaf04bf491d7e9e330c2b51fcc9d6b0630bc3e09fb1425ac711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b290c9afc1eabaf04bf491d7e9e330c2b51fcc9d6b0630bc3e09fb1425ac711c->leave($__internal_b290c9afc1eabaf04bf491d7e9e330c2b51fcc9d6b0630bc3e09fb1425ac711c_prof);

        
        $__internal_93962f7f65747996ea05b35c43655c968a2131b299779a46c979626d4348a458->leave($__internal_93962f7f65747996ea05b35c43655c968a2131b299779a46c979626d4348a458_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/fabien/Modèles/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
