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
        $__internal_8bf45eae043f138db6265cbbaa138c9038297a68b8cd803d4b0ad52a39ac9910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf45eae043f138db6265cbbaa138c9038297a68b8cd803d4b0ad52a39ac9910->enter($__internal_8bf45eae043f138db6265cbbaa138c9038297a68b8cd803d4b0ad52a39ac9910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_f5b7ba97e643dc386f8d38de8ae71a3c106e00e19154a35ab7e56c222a6c6eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b7ba97e643dc386f8d38de8ae71a3c106e00e19154a35ab7e56c222a6c6eb1->enter($__internal_f5b7ba97e643dc386f8d38de8ae71a3c106e00e19154a35ab7e56c222a6c6eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bf45eae043f138db6265cbbaa138c9038297a68b8cd803d4b0ad52a39ac9910->leave($__internal_8bf45eae043f138db6265cbbaa138c9038297a68b8cd803d4b0ad52a39ac9910_prof);

        
        $__internal_f5b7ba97e643dc386f8d38de8ae71a3c106e00e19154a35ab7e56c222a6c6eb1->leave($__internal_f5b7ba97e643dc386f8d38de8ae71a3c106e00e19154a35ab7e56c222a6c6eb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67bd5f03ff09820ab74bae7c4e4a4c52bf1c1a71a8ed395ae8922f753d06ee5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bd5f03ff09820ab74bae7c4e4a4c52bf1c1a71a8ed395ae8922f753d06ee5f->enter($__internal_67bd5f03ff09820ab74bae7c4e4a4c52bf1c1a71a8ed395ae8922f753d06ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8f5f29d02e13fa3a9208201319053c0bdac8b14ba29d59ee0a76956ad40e3dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5f29d02e13fa3a9208201319053c0bdac8b14ba29d59ee0a76956ad40e3dda->enter($__internal_8f5f29d02e13fa3a9208201319053c0bdac8b14ba29d59ee0a76956ad40e3dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8f5f29d02e13fa3a9208201319053c0bdac8b14ba29d59ee0a76956ad40e3dda->leave($__internal_8f5f29d02e13fa3a9208201319053c0bdac8b14ba29d59ee0a76956ad40e3dda_prof);

        
        $__internal_67bd5f03ff09820ab74bae7c4e4a4c52bf1c1a71a8ed395ae8922f753d06ee5f->leave($__internal_67bd5f03ff09820ab74bae7c4e4a4c52bf1c1a71a8ed395ae8922f753d06ee5f_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
