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
        $__internal_943441529f019ea82ff0726ae6d9578e01673ad27a1dec336e78e7754fb1f681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943441529f019ea82ff0726ae6d9578e01673ad27a1dec336e78e7754fb1f681->enter($__internal_943441529f019ea82ff0726ae6d9578e01673ad27a1dec336e78e7754fb1f681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4055eb234f0e509b078f213540d9f7bfa5ffe242a32faf2f2c54cab521cb4df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4055eb234f0e509b078f213540d9f7bfa5ffe242a32faf2f2c54cab521cb4df7->enter($__internal_4055eb234f0e509b078f213540d9f7bfa5ffe242a32faf2f2c54cab521cb4df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_943441529f019ea82ff0726ae6d9578e01673ad27a1dec336e78e7754fb1f681->leave($__internal_943441529f019ea82ff0726ae6d9578e01673ad27a1dec336e78e7754fb1f681_prof);

        
        $__internal_4055eb234f0e509b078f213540d9f7bfa5ffe242a32faf2f2c54cab521cb4df7->leave($__internal_4055eb234f0e509b078f213540d9f7bfa5ffe242a32faf2f2c54cab521cb4df7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b956503681b9aeccac09ec09cea8dcb40119a82b9869aeac91d775a39bc8591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b956503681b9aeccac09ec09cea8dcb40119a82b9869aeac91d775a39bc8591b->enter($__internal_b956503681b9aeccac09ec09cea8dcb40119a82b9869aeac91d775a39bc8591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_792076982bdfcd8d169e3eacdcb87e952f971b873b56ed481e36a2ce753a3fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792076982bdfcd8d169e3eacdcb87e952f971b873b56ed481e36a2ce753a3fe4->enter($__internal_792076982bdfcd8d169e3eacdcb87e952f971b873b56ed481e36a2ce753a3fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_792076982bdfcd8d169e3eacdcb87e952f971b873b56ed481e36a2ce753a3fe4->leave($__internal_792076982bdfcd8d169e3eacdcb87e952f971b873b56ed481e36a2ce753a3fe4_prof);

        
        $__internal_b956503681b9aeccac09ec09cea8dcb40119a82b9869aeac91d775a39bc8591b->leave($__internal_b956503681b9aeccac09ec09cea8dcb40119a82b9869aeac91d775a39bc8591b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2369dcd63f76681cbb2b23d993005182012f400ab390e9b5ec30c2d540ebd3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2369dcd63f76681cbb2b23d993005182012f400ab390e9b5ec30c2d540ebd3cd->enter($__internal_2369dcd63f76681cbb2b23d993005182012f400ab390e9b5ec30c2d540ebd3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47e8f4f014f7c4e61ace3b96cd9273eea7ce02b697b91846c444eeeeda3abc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e8f4f014f7c4e61ace3b96cd9273eea7ce02b697b91846c444eeeeda3abc85->enter($__internal_47e8f4f014f7c4e61ace3b96cd9273eea7ce02b697b91846c444eeeeda3abc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47e8f4f014f7c4e61ace3b96cd9273eea7ce02b697b91846c444eeeeda3abc85->leave($__internal_47e8f4f014f7c4e61ace3b96cd9273eea7ce02b697b91846c444eeeeda3abc85_prof);

        
        $__internal_2369dcd63f76681cbb2b23d993005182012f400ab390e9b5ec30c2d540ebd3cd->leave($__internal_2369dcd63f76681cbb2b23d993005182012f400ab390e9b5ec30c2d540ebd3cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df5786b5e60040e935c9e62faa8c4128b66c60aa83381a2d70bb290846b52030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5786b5e60040e935c9e62faa8c4128b66c60aa83381a2d70bb290846b52030->enter($__internal_df5786b5e60040e935c9e62faa8c4128b66c60aa83381a2d70bb290846b52030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edf92a0f92ae57e099b2e7bddc51b34cf8c0a37ca479e62e8401853d15db3139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf92a0f92ae57e099b2e7bddc51b34cf8c0a37ca479e62e8401853d15db3139->enter($__internal_edf92a0f92ae57e099b2e7bddc51b34cf8c0a37ca479e62e8401853d15db3139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_edf92a0f92ae57e099b2e7bddc51b34cf8c0a37ca479e62e8401853d15db3139->leave($__internal_edf92a0f92ae57e099b2e7bddc51b34cf8c0a37ca479e62e8401853d15db3139_prof);

        
        $__internal_df5786b5e60040e935c9e62faa8c4128b66c60aa83381a2d70bb290846b52030->leave($__internal_df5786b5e60040e935c9e62faa8c4128b66c60aa83381a2d70bb290846b52030_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/sunshine/Documents/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
