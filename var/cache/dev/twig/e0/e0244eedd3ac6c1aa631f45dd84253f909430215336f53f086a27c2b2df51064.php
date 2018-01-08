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
        $__internal_639a31c33c1d459580e14acf999c82af22f8bbca80b1b439190e6fdfd9102d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639a31c33c1d459580e14acf999c82af22f8bbca80b1b439190e6fdfd9102d57->enter($__internal_639a31c33c1d459580e14acf999c82af22f8bbca80b1b439190e6fdfd9102d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_689ac54300a779beb216c56bd4af277d9dc0d3499f51c85f114ebf3138c46b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689ac54300a779beb216c56bd4af277d9dc0d3499f51c85f114ebf3138c46b9c->enter($__internal_689ac54300a779beb216c56bd4af277d9dc0d3499f51c85f114ebf3138c46b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639a31c33c1d459580e14acf999c82af22f8bbca80b1b439190e6fdfd9102d57->leave($__internal_639a31c33c1d459580e14acf999c82af22f8bbca80b1b439190e6fdfd9102d57_prof);

        
        $__internal_689ac54300a779beb216c56bd4af277d9dc0d3499f51c85f114ebf3138c46b9c->leave($__internal_689ac54300a779beb216c56bd4af277d9dc0d3499f51c85f114ebf3138c46b9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e12c37a46d12f7bcea0954dd5a8bbfdf2927fe9b0e2d9d36484492e77aeaf198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12c37a46d12f7bcea0954dd5a8bbfdf2927fe9b0e2d9d36484492e77aeaf198->enter($__internal_e12c37a46d12f7bcea0954dd5a8bbfdf2927fe9b0e2d9d36484492e77aeaf198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fcbfc6b1bdcbba192c9849620925d65230802ac415c14ead7f4db6109729c5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbfc6b1bdcbba192c9849620925d65230802ac415c14ead7f4db6109729c5b7->enter($__internal_fcbfc6b1bdcbba192c9849620925d65230802ac415c14ead7f4db6109729c5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fcbfc6b1bdcbba192c9849620925d65230802ac415c14ead7f4db6109729c5b7->leave($__internal_fcbfc6b1bdcbba192c9849620925d65230802ac415c14ead7f4db6109729c5b7_prof);

        
        $__internal_e12c37a46d12f7bcea0954dd5a8bbfdf2927fe9b0e2d9d36484492e77aeaf198->leave($__internal_e12c37a46d12f7bcea0954dd5a8bbfdf2927fe9b0e2d9d36484492e77aeaf198_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_249a6cf39bfa26d1270f357fabac14246ef557afccb1580a3b28ac0be4fe2941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249a6cf39bfa26d1270f357fabac14246ef557afccb1580a3b28ac0be4fe2941->enter($__internal_249a6cf39bfa26d1270f357fabac14246ef557afccb1580a3b28ac0be4fe2941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8dc2c3a532389602d12d557b90c2aa6907bf63442d18111b366433a5bf25abad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc2c3a532389602d12d557b90c2aa6907bf63442d18111b366433a5bf25abad->enter($__internal_8dc2c3a532389602d12d557b90c2aa6907bf63442d18111b366433a5bf25abad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8dc2c3a532389602d12d557b90c2aa6907bf63442d18111b366433a5bf25abad->leave($__internal_8dc2c3a532389602d12d557b90c2aa6907bf63442d18111b366433a5bf25abad_prof);

        
        $__internal_249a6cf39bfa26d1270f357fabac14246ef557afccb1580a3b28ac0be4fe2941->leave($__internal_249a6cf39bfa26d1270f357fabac14246ef557afccb1580a3b28ac0be4fe2941_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7ae338e33d02ac2cc6706daf61cc944feee92fee82cc86a9bff530ff19bc360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ae338e33d02ac2cc6706daf61cc944feee92fee82cc86a9bff530ff19bc360->enter($__internal_a7ae338e33d02ac2cc6706daf61cc944feee92fee82cc86a9bff530ff19bc360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9acc8783bdd764fc2c4a56c24c4db99fde453bb5eb201f232921518a63267ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acc8783bdd764fc2c4a56c24c4db99fde453bb5eb201f232921518a63267ee5->enter($__internal_9acc8783bdd764fc2c4a56c24c4db99fde453bb5eb201f232921518a63267ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9acc8783bdd764fc2c4a56c24c4db99fde453bb5eb201f232921518a63267ee5->leave($__internal_9acc8783bdd764fc2c4a56c24c4db99fde453bb5eb201f232921518a63267ee5_prof);

        
        $__internal_a7ae338e33d02ac2cc6706daf61cc944feee92fee82cc86a9bff530ff19bc360->leave($__internal_a7ae338e33d02ac2cc6706daf61cc944feee92fee82cc86a9bff530ff19bc360_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
