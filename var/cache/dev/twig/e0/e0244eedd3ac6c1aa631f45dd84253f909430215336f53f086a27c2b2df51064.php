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
        $__internal_9f53050e837f87ec68c3ba859879bdfb658547ed76297f510b23e44872384857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f53050e837f87ec68c3ba859879bdfb658547ed76297f510b23e44872384857->enter($__internal_9f53050e837f87ec68c3ba859879bdfb658547ed76297f510b23e44872384857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e4c8246767c55900bf49e2970a565367582765a6aee6e9252f8fae239d1a467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4c8246767c55900bf49e2970a565367582765a6aee6e9252f8fae239d1a467->enter($__internal_2e4c8246767c55900bf49e2970a565367582765a6aee6e9252f8fae239d1a467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f53050e837f87ec68c3ba859879bdfb658547ed76297f510b23e44872384857->leave($__internal_9f53050e837f87ec68c3ba859879bdfb658547ed76297f510b23e44872384857_prof);

        
        $__internal_2e4c8246767c55900bf49e2970a565367582765a6aee6e9252f8fae239d1a467->leave($__internal_2e4c8246767c55900bf49e2970a565367582765a6aee6e9252f8fae239d1a467_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50f99fb1a761025785da70f52c980af063c8d40ad5d48cd7fb41b44b76c1d4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f99fb1a761025785da70f52c980af063c8d40ad5d48cd7fb41b44b76c1d4a5->enter($__internal_50f99fb1a761025785da70f52c980af063c8d40ad5d48cd7fb41b44b76c1d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_534651b6e5b8b9146e72aa0c47eeda477ee3d38c4b7244271cc5948fe83a9661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534651b6e5b8b9146e72aa0c47eeda477ee3d38c4b7244271cc5948fe83a9661->enter($__internal_534651b6e5b8b9146e72aa0c47eeda477ee3d38c4b7244271cc5948fe83a9661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_534651b6e5b8b9146e72aa0c47eeda477ee3d38c4b7244271cc5948fe83a9661->leave($__internal_534651b6e5b8b9146e72aa0c47eeda477ee3d38c4b7244271cc5948fe83a9661_prof);

        
        $__internal_50f99fb1a761025785da70f52c980af063c8d40ad5d48cd7fb41b44b76c1d4a5->leave($__internal_50f99fb1a761025785da70f52c980af063c8d40ad5d48cd7fb41b44b76c1d4a5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_730051922e319172051e7cc52ed24eaf284e635992e9b07a10a6488301bad48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730051922e319172051e7cc52ed24eaf284e635992e9b07a10a6488301bad48a->enter($__internal_730051922e319172051e7cc52ed24eaf284e635992e9b07a10a6488301bad48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da16c4b62bd6173a81500a73ef1c01ba6ce0dade6de379051e700671ab10a4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da16c4b62bd6173a81500a73ef1c01ba6ce0dade6de379051e700671ab10a4e9->enter($__internal_da16c4b62bd6173a81500a73ef1c01ba6ce0dade6de379051e700671ab10a4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da16c4b62bd6173a81500a73ef1c01ba6ce0dade6de379051e700671ab10a4e9->leave($__internal_da16c4b62bd6173a81500a73ef1c01ba6ce0dade6de379051e700671ab10a4e9_prof);

        
        $__internal_730051922e319172051e7cc52ed24eaf284e635992e9b07a10a6488301bad48a->leave($__internal_730051922e319172051e7cc52ed24eaf284e635992e9b07a10a6488301bad48a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea8d94e03e1ee9ac6eafd94d2bb0f9e3f3a5fef837811b586df5dba385dc79ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8d94e03e1ee9ac6eafd94d2bb0f9e3f3a5fef837811b586df5dba385dc79ed->enter($__internal_ea8d94e03e1ee9ac6eafd94d2bb0f9e3f3a5fef837811b586df5dba385dc79ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45d5a162a63b9b191f5c69a83e1285d8bbd0aa6793aaf1a5e203887b154a799d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d5a162a63b9b191f5c69a83e1285d8bbd0aa6793aaf1a5e203887b154a799d->enter($__internal_45d5a162a63b9b191f5c69a83e1285d8bbd0aa6793aaf1a5e203887b154a799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_45d5a162a63b9b191f5c69a83e1285d8bbd0aa6793aaf1a5e203887b154a799d->leave($__internal_45d5a162a63b9b191f5c69a83e1285d8bbd0aa6793aaf1a5e203887b154a799d_prof);

        
        $__internal_ea8d94e03e1ee9ac6eafd94d2bb0f9e3f3a5fef837811b586df5dba385dc79ed->leave($__internal_ea8d94e03e1ee9ac6eafd94d2bb0f9e3f3a5fef837811b586df5dba385dc79ed_prof);

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
