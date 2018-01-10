<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3da58e6046f07e1dbff60436cf94378270002850c8b0054ed51f2a947c2108e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_db5eb876f59ec17e24c60f5a6af698d6d0a30255e5da6eb03e2e274279ad5836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5eb876f59ec17e24c60f5a6af698d6d0a30255e5da6eb03e2e274279ad5836->enter($__internal_db5eb876f59ec17e24c60f5a6af698d6d0a30255e5da6eb03e2e274279ad5836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d8d883759a077507308ec5ad69d041da10d6f3fa7e074e44264e45ad49ce68be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d883759a077507308ec5ad69d041da10d6f3fa7e074e44264e45ad49ce68be->enter($__internal_d8d883759a077507308ec5ad69d041da10d6f3fa7e074e44264e45ad49ce68be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db5eb876f59ec17e24c60f5a6af698d6d0a30255e5da6eb03e2e274279ad5836->leave($__internal_db5eb876f59ec17e24c60f5a6af698d6d0a30255e5da6eb03e2e274279ad5836_prof);

        
        $__internal_d8d883759a077507308ec5ad69d041da10d6f3fa7e074e44264e45ad49ce68be->leave($__internal_d8d883759a077507308ec5ad69d041da10d6f3fa7e074e44264e45ad49ce68be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79fb3b064a7f8d1274407e1b8ef5e4de2d0040ff6bd582fe16b62bd5d33899df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fb3b064a7f8d1274407e1b8ef5e4de2d0040ff6bd582fe16b62bd5d33899df->enter($__internal_79fb3b064a7f8d1274407e1b8ef5e4de2d0040ff6bd582fe16b62bd5d33899df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1c69102037f88e07e4303dbbe8aa4002521f848b2877a1a77f077077eea5dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c69102037f88e07e4303dbbe8aa4002521f848b2877a1a77f077077eea5dc1->enter($__internal_c1c69102037f88e07e4303dbbe8aa4002521f848b2877a1a77f077077eea5dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c1c69102037f88e07e4303dbbe8aa4002521f848b2877a1a77f077077eea5dc1->leave($__internal_c1c69102037f88e07e4303dbbe8aa4002521f848b2877a1a77f077077eea5dc1_prof);

        
        $__internal_79fb3b064a7f8d1274407e1b8ef5e4de2d0040ff6bd582fe16b62bd5d33899df->leave($__internal_79fb3b064a7f8d1274407e1b8ef5e4de2d0040ff6bd582fe16b62bd5d33899df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
