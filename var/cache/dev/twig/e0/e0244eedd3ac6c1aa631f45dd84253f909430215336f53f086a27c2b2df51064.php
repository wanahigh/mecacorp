<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_034ad564ae71d047b3c732a088f20ee33e283674d2562e5d522c78a0ad10aa0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_482dfe62434f510687abce5539d4be025b7291baa114f18ad16eb7a1d03f6897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482dfe62434f510687abce5539d4be025b7291baa114f18ad16eb7a1d03f6897->enter($__internal_482dfe62434f510687abce5539d4be025b7291baa114f18ad16eb7a1d03f6897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8cbfaa98a0fc7fc86484463a63c98739b94a6517ad380c9200624f095b6c5f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbfaa98a0fc7fc86484463a63c98739b94a6517ad380c9200624f095b6c5f60->enter($__internal_8cbfaa98a0fc7fc86484463a63c98739b94a6517ad380c9200624f095b6c5f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482dfe62434f510687abce5539d4be025b7291baa114f18ad16eb7a1d03f6897->leave($__internal_482dfe62434f510687abce5539d4be025b7291baa114f18ad16eb7a1d03f6897_prof);

        
        $__internal_8cbfaa98a0fc7fc86484463a63c98739b94a6517ad380c9200624f095b6c5f60->leave($__internal_8cbfaa98a0fc7fc86484463a63c98739b94a6517ad380c9200624f095b6c5f60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4c80b8d1cee4657e083e558a395a3b7b28735ba2e5104dda33282d94a45bd33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c80b8d1cee4657e083e558a395a3b7b28735ba2e5104dda33282d94a45bd33->enter($__internal_c4c80b8d1cee4657e083e558a395a3b7b28735ba2e5104dda33282d94a45bd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee8df7690d8d32d9d36cb23537d2037aad0c3d02cf8563c817296a04e737d455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8df7690d8d32d9d36cb23537d2037aad0c3d02cf8563c817296a04e737d455->enter($__internal_ee8df7690d8d32d9d36cb23537d2037aad0c3d02cf8563c817296a04e737d455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee8df7690d8d32d9d36cb23537d2037aad0c3d02cf8563c817296a04e737d455->leave($__internal_ee8df7690d8d32d9d36cb23537d2037aad0c3d02cf8563c817296a04e737d455_prof);

        
        $__internal_c4c80b8d1cee4657e083e558a395a3b7b28735ba2e5104dda33282d94a45bd33->leave($__internal_c4c80b8d1cee4657e083e558a395a3b7b28735ba2e5104dda33282d94a45bd33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87df400ea0f684ba2bafec51dda7c0c3030527de934dee1be94691d64c8f10c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87df400ea0f684ba2bafec51dda7c0c3030527de934dee1be94691d64c8f10c0->enter($__internal_87df400ea0f684ba2bafec51dda7c0c3030527de934dee1be94691d64c8f10c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe3bc4996a50aecd9497b815e7b0d0191cb2f524fce7791cc9954a3b50bfa1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3bc4996a50aecd9497b815e7b0d0191cb2f524fce7791cc9954a3b50bfa1c4->enter($__internal_fe3bc4996a50aecd9497b815e7b0d0191cb2f524fce7791cc9954a3b50bfa1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe3bc4996a50aecd9497b815e7b0d0191cb2f524fce7791cc9954a3b50bfa1c4->leave($__internal_fe3bc4996a50aecd9497b815e7b0d0191cb2f524fce7791cc9954a3b50bfa1c4_prof);

        
        $__internal_87df400ea0f684ba2bafec51dda7c0c3030527de934dee1be94691d64c8f10c0->leave($__internal_87df400ea0f684ba2bafec51dda7c0c3030527de934dee1be94691d64c8f10c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d0d7f496fdb91617dea1ed13e1d4e7cdbc26069f59e0b3fa173a78187955f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0d7f496fdb91617dea1ed13e1d4e7cdbc26069f59e0b3fa173a78187955f12->enter($__internal_2d0d7f496fdb91617dea1ed13e1d4e7cdbc26069f59e0b3fa173a78187955f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e63b02419ae605d362db5e945269efbbde15782c4c77293aa81433ac829166aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63b02419ae605d362db5e945269efbbde15782c4c77293aa81433ac829166aa->enter($__internal_e63b02419ae605d362db5e945269efbbde15782c4c77293aa81433ac829166aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e63b02419ae605d362db5e945269efbbde15782c4c77293aa81433ac829166aa->leave($__internal_e63b02419ae605d362db5e945269efbbde15782c4c77293aa81433ac829166aa_prof);

        
        $__internal_2d0d7f496fdb91617dea1ed13e1d4e7cdbc26069f59e0b3fa173a78187955f12->leave($__internal_2d0d7f496fdb91617dea1ed13e1d4e7cdbc26069f59e0b3fa173a78187955f12_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/fabien/Modèles/mecacorp maj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
