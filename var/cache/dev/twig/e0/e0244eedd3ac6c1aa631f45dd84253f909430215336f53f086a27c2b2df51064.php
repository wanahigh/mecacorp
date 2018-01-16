<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_034ad564ae71d047b3c732a088f20ee33e283674d2562e5d522c78a0ad10aa0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ce1aef757946c50c9d8192794bbd04c69617cff4edd002f640ba49395f7f3cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1aef757946c50c9d8192794bbd04c69617cff4edd002f640ba49395f7f3cc3->enter($__internal_ce1aef757946c50c9d8192794bbd04c69617cff4edd002f640ba49395f7f3cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ff124ab678c13f2816428714fbb60f2be0b745fb4ca911d65be21806ebbead85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff124ab678c13f2816428714fbb60f2be0b745fb4ca911d65be21806ebbead85->enter($__internal_ff124ab678c13f2816428714fbb60f2be0b745fb4ca911d65be21806ebbead85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1aef757946c50c9d8192794bbd04c69617cff4edd002f640ba49395f7f3cc3->leave($__internal_ce1aef757946c50c9d8192794bbd04c69617cff4edd002f640ba49395f7f3cc3_prof);

        
        $__internal_ff124ab678c13f2816428714fbb60f2be0b745fb4ca911d65be21806ebbead85->leave($__internal_ff124ab678c13f2816428714fbb60f2be0b745fb4ca911d65be21806ebbead85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e782ec73c152a47bce42481256e9e4742dfae0e81b3c94f47b8f1a714ea33211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e782ec73c152a47bce42481256e9e4742dfae0e81b3c94f47b8f1a714ea33211->enter($__internal_e782ec73c152a47bce42481256e9e4742dfae0e81b3c94f47b8f1a714ea33211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_86c4faacf69f4876ff4e8091ccf9f345b845d61fa35305fc012aaf9330686654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c4faacf69f4876ff4e8091ccf9f345b845d61fa35305fc012aaf9330686654->enter($__internal_86c4faacf69f4876ff4e8091ccf9f345b845d61fa35305fc012aaf9330686654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86c4faacf69f4876ff4e8091ccf9f345b845d61fa35305fc012aaf9330686654->leave($__internal_86c4faacf69f4876ff4e8091ccf9f345b845d61fa35305fc012aaf9330686654_prof);

        
        $__internal_e782ec73c152a47bce42481256e9e4742dfae0e81b3c94f47b8f1a714ea33211->leave($__internal_e782ec73c152a47bce42481256e9e4742dfae0e81b3c94f47b8f1a714ea33211_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9112a9c57156fcdba09cc774d566570c36c8436439bbd3a1fe98fe5d036459ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9112a9c57156fcdba09cc774d566570c36c8436439bbd3a1fe98fe5d036459ff->enter($__internal_9112a9c57156fcdba09cc774d566570c36c8436439bbd3a1fe98fe5d036459ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4b69c74c624c783b8938f29ef14400008d4ea95c66b72e177454ef1c4e7e684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b69c74c624c783b8938f29ef14400008d4ea95c66b72e177454ef1c4e7e684->enter($__internal_e4b69c74c624c783b8938f29ef14400008d4ea95c66b72e177454ef1c4e7e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4b69c74c624c783b8938f29ef14400008d4ea95c66b72e177454ef1c4e7e684->leave($__internal_e4b69c74c624c783b8938f29ef14400008d4ea95c66b72e177454ef1c4e7e684_prof);

        
        $__internal_9112a9c57156fcdba09cc774d566570c36c8436439bbd3a1fe98fe5d036459ff->leave($__internal_9112a9c57156fcdba09cc774d566570c36c8436439bbd3a1fe98fe5d036459ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec56627ce89b7a3bc9cb0de65a2afc2b0622f41433b37db21b8d56589889cc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec56627ce89b7a3bc9cb0de65a2afc2b0622f41433b37db21b8d56589889cc5a->enter($__internal_ec56627ce89b7a3bc9cb0de65a2afc2b0622f41433b37db21b8d56589889cc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7903cd4a33a93f65b84ef70d400da1a3a0a7f9e3c64f62244f722d4ef7c11fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7903cd4a33a93f65b84ef70d400da1a3a0a7f9e3c64f62244f722d4ef7c11fba->enter($__internal_7903cd4a33a93f65b84ef70d400da1a3a0a7f9e3c64f62244f722d4ef7c11fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7903cd4a33a93f65b84ef70d400da1a3a0a7f9e3c64f62244f722d4ef7c11fba->leave($__internal_7903cd4a33a93f65b84ef70d400da1a3a0a7f9e3c64f62244f722d4ef7c11fba_prof);

        
        $__internal_ec56627ce89b7a3bc9cb0de65a2afc2b0622f41433b37db21b8d56589889cc5a->leave($__internal_ec56627ce89b7a3bc9cb0de65a2afc2b0622f41433b37db21b8d56589889cc5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/fabien/Modèles/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
