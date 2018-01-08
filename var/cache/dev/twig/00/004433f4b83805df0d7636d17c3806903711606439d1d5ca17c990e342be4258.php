<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_befbf580093d351959050b31f762ac331ea1e39b577ff2754d21ef2c8249bac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bc22bd308ba52c2fadb4743f286e7c5f57a6e893b614ca7698c5d19368bcc926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc22bd308ba52c2fadb4743f286e7c5f57a6e893b614ca7698c5d19368bcc926->enter($__internal_bc22bd308ba52c2fadb4743f286e7c5f57a6e893b614ca7698c5d19368bcc926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ede4b266e6c346ffb6f7431bc9c771729908637d01a821fbae02e6a0fedfb4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede4b266e6c346ffb6f7431bc9c771729908637d01a821fbae02e6a0fedfb4b2->enter($__internal_ede4b266e6c346ffb6f7431bc9c771729908637d01a821fbae02e6a0fedfb4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc22bd308ba52c2fadb4743f286e7c5f57a6e893b614ca7698c5d19368bcc926->leave($__internal_bc22bd308ba52c2fadb4743f286e7c5f57a6e893b614ca7698c5d19368bcc926_prof);

        
        $__internal_ede4b266e6c346ffb6f7431bc9c771729908637d01a821fbae02e6a0fedfb4b2->leave($__internal_ede4b266e6c346ffb6f7431bc9c771729908637d01a821fbae02e6a0fedfb4b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24bf0f81a614cedd23a568c4a8ed01e778bc69fb6a60d365906dc13aaf1c1953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bf0f81a614cedd23a568c4a8ed01e778bc69fb6a60d365906dc13aaf1c1953->enter($__internal_24bf0f81a614cedd23a568c4a8ed01e778bc69fb6a60d365906dc13aaf1c1953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_515215be39a3ae6f79885db05e33a2a44a1b4195f40ea46cb84cf18a4be08844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515215be39a3ae6f79885db05e33a2a44a1b4195f40ea46cb84cf18a4be08844->enter($__internal_515215be39a3ae6f79885db05e33a2a44a1b4195f40ea46cb84cf18a4be08844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_515215be39a3ae6f79885db05e33a2a44a1b4195f40ea46cb84cf18a4be08844->leave($__internal_515215be39a3ae6f79885db05e33a2a44a1b4195f40ea46cb84cf18a4be08844_prof);

        
        $__internal_24bf0f81a614cedd23a568c4a8ed01e778bc69fb6a60d365906dc13aaf1c1953->leave($__internal_24bf0f81a614cedd23a568c4a8ed01e778bc69fb6a60d365906dc13aaf1c1953_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
