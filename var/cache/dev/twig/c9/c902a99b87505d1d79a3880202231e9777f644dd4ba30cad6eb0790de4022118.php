<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_6be7a05506a72ecb054d7aeb86afa658f3008030267abc585c5805b9287cb704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_191c74f22936bc5e6f07f96c56d751d8b17b0e6c9ac412325093debd064e7614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191c74f22936bc5e6f07f96c56d751d8b17b0e6c9ac412325093debd064e7614->enter($__internal_191c74f22936bc5e6f07f96c56d751d8b17b0e6c9ac412325093debd064e7614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_ae304ad420b047f6eba16bbd135f2985b4d6619450cc986da8feb940cb092d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae304ad420b047f6eba16bbd135f2985b4d6619450cc986da8feb940cb092d32->enter($__internal_ae304ad420b047f6eba16bbd135f2985b4d6619450cc986da8feb940cb092d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_191c74f22936bc5e6f07f96c56d751d8b17b0e6c9ac412325093debd064e7614->leave($__internal_191c74f22936bc5e6f07f96c56d751d8b17b0e6c9ac412325093debd064e7614_prof);

        
        $__internal_ae304ad420b047f6eba16bbd135f2985b4d6619450cc986da8feb940cb092d32->leave($__internal_ae304ad420b047f6eba16bbd135f2985b4d6619450cc986da8feb940cb092d32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c857d8bc50110c44b8bc2da3eec76c71d891d95fd208a9b6c4df59a6374c3ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c857d8bc50110c44b8bc2da3eec76c71d891d95fd208a9b6c4df59a6374c3ffd->enter($__internal_c857d8bc50110c44b8bc2da3eec76c71d891d95fd208a9b6c4df59a6374c3ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3cd0d6d792036915236ab3dde9136e2bf1f110966a8cddde34f69cdea7d470db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd0d6d792036915236ab3dde9136e2bf1f110966a8cddde34f69cdea7d470db->enter($__internal_3cd0d6d792036915236ab3dde9136e2bf1f110966a8cddde34f69cdea7d470db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3cd0d6d792036915236ab3dde9136e2bf1f110966a8cddde34f69cdea7d470db->leave($__internal_3cd0d6d792036915236ab3dde9136e2bf1f110966a8cddde34f69cdea7d470db_prof);

        
        $__internal_c857d8bc50110c44b8bc2da3eec76c71d891d95fd208a9b6c4df59a6374c3ffd->leave($__internal_c857d8bc50110c44b8bc2da3eec76c71d891d95fd208a9b6c4df59a6374c3ffd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
