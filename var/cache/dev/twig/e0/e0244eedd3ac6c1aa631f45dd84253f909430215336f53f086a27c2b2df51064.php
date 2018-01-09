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
        $__internal_cf725bd952c34dfaf8890fe9209f2477e095c3e9a5f438e0a6a114bfab8df3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf725bd952c34dfaf8890fe9209f2477e095c3e9a5f438e0a6a114bfab8df3ca->enter($__internal_cf725bd952c34dfaf8890fe9209f2477e095c3e9a5f438e0a6a114bfab8df3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cb6649e377c55697c8723678d6b8e1c384729268917389c0d0a9d9cf57dfdfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6649e377c55697c8723678d6b8e1c384729268917389c0d0a9d9cf57dfdfc4->enter($__internal_cb6649e377c55697c8723678d6b8e1c384729268917389c0d0a9d9cf57dfdfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf725bd952c34dfaf8890fe9209f2477e095c3e9a5f438e0a6a114bfab8df3ca->leave($__internal_cf725bd952c34dfaf8890fe9209f2477e095c3e9a5f438e0a6a114bfab8df3ca_prof);

        
        $__internal_cb6649e377c55697c8723678d6b8e1c384729268917389c0d0a9d9cf57dfdfc4->leave($__internal_cb6649e377c55697c8723678d6b8e1c384729268917389c0d0a9d9cf57dfdfc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f311190bc052b5778b6a4afa87daa8226686ba3a075bd4b1d2f29fcf3936afcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f311190bc052b5778b6a4afa87daa8226686ba3a075bd4b1d2f29fcf3936afcb->enter($__internal_f311190bc052b5778b6a4afa87daa8226686ba3a075bd4b1d2f29fcf3936afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f57fbf0d871361fdbc9eb897f624edbdf0fdcac7f35689405ad9cf7fa71208b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f57fbf0d871361fdbc9eb897f624edbdf0fdcac7f35689405ad9cf7fa71208b->enter($__internal_9f57fbf0d871361fdbc9eb897f624edbdf0fdcac7f35689405ad9cf7fa71208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f57fbf0d871361fdbc9eb897f624edbdf0fdcac7f35689405ad9cf7fa71208b->leave($__internal_9f57fbf0d871361fdbc9eb897f624edbdf0fdcac7f35689405ad9cf7fa71208b_prof);

        
        $__internal_f311190bc052b5778b6a4afa87daa8226686ba3a075bd4b1d2f29fcf3936afcb->leave($__internal_f311190bc052b5778b6a4afa87daa8226686ba3a075bd4b1d2f29fcf3936afcb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2120f9998ee49ab8a7bb71a8615ade81327b364f2039173e9a988e1f97ddddc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2120f9998ee49ab8a7bb71a8615ade81327b364f2039173e9a988e1f97ddddc3->enter($__internal_2120f9998ee49ab8a7bb71a8615ade81327b364f2039173e9a988e1f97ddddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d792134049f99ed46ea90ba89714ac645ab00be8507cad3e2a13a857d17903a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d792134049f99ed46ea90ba89714ac645ab00be8507cad3e2a13a857d17903a->enter($__internal_2d792134049f99ed46ea90ba89714ac645ab00be8507cad3e2a13a857d17903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d792134049f99ed46ea90ba89714ac645ab00be8507cad3e2a13a857d17903a->leave($__internal_2d792134049f99ed46ea90ba89714ac645ab00be8507cad3e2a13a857d17903a_prof);

        
        $__internal_2120f9998ee49ab8a7bb71a8615ade81327b364f2039173e9a988e1f97ddddc3->leave($__internal_2120f9998ee49ab8a7bb71a8615ade81327b364f2039173e9a988e1f97ddddc3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9105339147a8595921569a1b5a74bbdc2792356853f05ed8e612d59c95fd7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9105339147a8595921569a1b5a74bbdc2792356853f05ed8e612d59c95fd7c86->enter($__internal_9105339147a8595921569a1b5a74bbdc2792356853f05ed8e612d59c95fd7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c2044bdc2a2cc3d2182e4ac03a0fb38b76e598244d58bc20fca0f27ef7e3dd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2044bdc2a2cc3d2182e4ac03a0fb38b76e598244d58bc20fca0f27ef7e3dd90->enter($__internal_c2044bdc2a2cc3d2182e4ac03a0fb38b76e598244d58bc20fca0f27ef7e3dd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c2044bdc2a2cc3d2182e4ac03a0fb38b76e598244d58bc20fca0f27ef7e3dd90->leave($__internal_c2044bdc2a2cc3d2182e4ac03a0fb38b76e598244d58bc20fca0f27ef7e3dd90_prof);

        
        $__internal_9105339147a8595921569a1b5a74bbdc2792356853f05ed8e612d59c95fd7c86->leave($__internal_9105339147a8595921569a1b5a74bbdc2792356853f05ed8e612d59c95fd7c86_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
