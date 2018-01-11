<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_c64856d992307ac3803ecc3bd68c571726bfd41e7f90cdf43f9fb0faca2766b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_005fb576e63310dfddc5671d1f2d7a34833eb2d3efdd7d8a445e91bc9758261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005fb576e63310dfddc5671d1f2d7a34833eb2d3efdd7d8a445e91bc9758261e->enter($__internal_005fb576e63310dfddc5671d1f2d7a34833eb2d3efdd7d8a445e91bc9758261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_4c302376f64d235f6edd237490ba9d74ec65ff2f6e4ba3960ff36d60cb8f552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c302376f64d235f6edd237490ba9d74ec65ff2f6e4ba3960ff36d60cb8f552f->enter($__internal_4c302376f64d235f6edd237490ba9d74ec65ff2f6e4ba3960ff36d60cb8f552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005fb576e63310dfddc5671d1f2d7a34833eb2d3efdd7d8a445e91bc9758261e->leave($__internal_005fb576e63310dfddc5671d1f2d7a34833eb2d3efdd7d8a445e91bc9758261e_prof);

        
        $__internal_4c302376f64d235f6edd237490ba9d74ec65ff2f6e4ba3960ff36d60cb8f552f->leave($__internal_4c302376f64d235f6edd237490ba9d74ec65ff2f6e4ba3960ff36d60cb8f552f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f232338c1957a61831557310a3b2f21866cf8d6b9ee71c631ed1449d2d0c101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f232338c1957a61831557310a3b2f21866cf8d6b9ee71c631ed1449d2d0c101f->enter($__internal_f232338c1957a61831557310a3b2f21866cf8d6b9ee71c631ed1449d2d0c101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b984cf982d407fb2af8f5782af575446dae4e59e2e802233d93f1382f631843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b984cf982d407fb2af8f5782af575446dae4e59e2e802233d93f1382f631843->enter($__internal_8b984cf982d407fb2af8f5782af575446dae4e59e2e802233d93f1382f631843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8b984cf982d407fb2af8f5782af575446dae4e59e2e802233d93f1382f631843->leave($__internal_8b984cf982d407fb2af8f5782af575446dae4e59e2e802233d93f1382f631843_prof);

        
        $__internal_f232338c1957a61831557310a3b2f21866cf8d6b9ee71c631ed1449d2d0c101f->leave($__internal_f232338c1957a61831557310a3b2f21866cf8d6b9ee71c631ed1449d2d0c101f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/fabien/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
