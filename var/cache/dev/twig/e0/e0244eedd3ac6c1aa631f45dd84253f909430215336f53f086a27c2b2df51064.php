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
        $__internal_cf1b4980ec3929f2c69067d0823623b7295825f478b12b98b906d3c3bf0c3f07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1b4980ec3929f2c69067d0823623b7295825f478b12b98b906d3c3bf0c3f07->enter($__internal_cf1b4980ec3929f2c69067d0823623b7295825f478b12b98b906d3c3bf0c3f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ab9997eff84a3a3a5a1ba1719b2f1f3f330ef7d7985c2132b160d5f113a8378a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9997eff84a3a3a5a1ba1719b2f1f3f330ef7d7985c2132b160d5f113a8378a->enter($__internal_ab9997eff84a3a3a5a1ba1719b2f1f3f330ef7d7985c2132b160d5f113a8378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1b4980ec3929f2c69067d0823623b7295825f478b12b98b906d3c3bf0c3f07->leave($__internal_cf1b4980ec3929f2c69067d0823623b7295825f478b12b98b906d3c3bf0c3f07_prof);

        
        $__internal_ab9997eff84a3a3a5a1ba1719b2f1f3f330ef7d7985c2132b160d5f113a8378a->leave($__internal_ab9997eff84a3a3a5a1ba1719b2f1f3f330ef7d7985c2132b160d5f113a8378a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84fdfdafcd45c7bc60046bd0c7c8efe7d50a33b11013d77bd49fa825871f8dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fdfdafcd45c7bc60046bd0c7c8efe7d50a33b11013d77bd49fa825871f8dc1->enter($__internal_84fdfdafcd45c7bc60046bd0c7c8efe7d50a33b11013d77bd49fa825871f8dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97e17c028a3c923fce04c883b4b549cabed1a46c7c0ba8a5e75ee1053ab1b125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e17c028a3c923fce04c883b4b549cabed1a46c7c0ba8a5e75ee1053ab1b125->enter($__internal_97e17c028a3c923fce04c883b4b549cabed1a46c7c0ba8a5e75ee1053ab1b125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97e17c028a3c923fce04c883b4b549cabed1a46c7c0ba8a5e75ee1053ab1b125->leave($__internal_97e17c028a3c923fce04c883b4b549cabed1a46c7c0ba8a5e75ee1053ab1b125_prof);

        
        $__internal_84fdfdafcd45c7bc60046bd0c7c8efe7d50a33b11013d77bd49fa825871f8dc1->leave($__internal_84fdfdafcd45c7bc60046bd0c7c8efe7d50a33b11013d77bd49fa825871f8dc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bffc475080dec6330945f5504a885461ac8e7f707dedaa764249a5c455833e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffc475080dec6330945f5504a885461ac8e7f707dedaa764249a5c455833e84->enter($__internal_bffc475080dec6330945f5504a885461ac8e7f707dedaa764249a5c455833e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9753c19aeb6a9af2ef526189311c95c9a9ed2849b0f1a3c4f4b9bfc7a9b0307e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9753c19aeb6a9af2ef526189311c95c9a9ed2849b0f1a3c4f4b9bfc7a9b0307e->enter($__internal_9753c19aeb6a9af2ef526189311c95c9a9ed2849b0f1a3c4f4b9bfc7a9b0307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9753c19aeb6a9af2ef526189311c95c9a9ed2849b0f1a3c4f4b9bfc7a9b0307e->leave($__internal_9753c19aeb6a9af2ef526189311c95c9a9ed2849b0f1a3c4f4b9bfc7a9b0307e_prof);

        
        $__internal_bffc475080dec6330945f5504a885461ac8e7f707dedaa764249a5c455833e84->leave($__internal_bffc475080dec6330945f5504a885461ac8e7f707dedaa764249a5c455833e84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_283b70c42d9482a5d555392aeb2fd8d9445d6ee8ed4a2751909c87090ec9be8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283b70c42d9482a5d555392aeb2fd8d9445d6ee8ed4a2751909c87090ec9be8f->enter($__internal_283b70c42d9482a5d555392aeb2fd8d9445d6ee8ed4a2751909c87090ec9be8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69218ef81b40dcee5cfb7690731b285c94a5c2976a642e20cf1e6dd668b099dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69218ef81b40dcee5cfb7690731b285c94a5c2976a642e20cf1e6dd668b099dc->enter($__internal_69218ef81b40dcee5cfb7690731b285c94a5c2976a642e20cf1e6dd668b099dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_69218ef81b40dcee5cfb7690731b285c94a5c2976a642e20cf1e6dd668b099dc->leave($__internal_69218ef81b40dcee5cfb7690731b285c94a5c2976a642e20cf1e6dd668b099dc_prof);

        
        $__internal_283b70c42d9482a5d555392aeb2fd8d9445d6ee8ed4a2751909c87090ec9be8f->leave($__internal_283b70c42d9482a5d555392aeb2fd8d9445d6ee8ed4a2751909c87090ec9be8f_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/fabien/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
