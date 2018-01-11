<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_34e99009582291607115d5764258520022d6b9db4f8973514c50e8eea510fcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_aa5342ee39de2033e96259a7574b29e39c77536226a9db458c7b087f3c2dd1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5342ee39de2033e96259a7574b29e39c77536226a9db458c7b087f3c2dd1f6->enter($__internal_aa5342ee39de2033e96259a7574b29e39c77536226a9db458c7b087f3c2dd1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_89f0286d86d03c29b86e1c6bd6998a3fd499c017ddceb24fef2ae864d85e10f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f0286d86d03c29b86e1c6bd6998a3fd499c017ddceb24fef2ae864d85e10f8->enter($__internal_89f0286d86d03c29b86e1c6bd6998a3fd499c017ddceb24fef2ae864d85e10f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5342ee39de2033e96259a7574b29e39c77536226a9db458c7b087f3c2dd1f6->leave($__internal_aa5342ee39de2033e96259a7574b29e39c77536226a9db458c7b087f3c2dd1f6_prof);

        
        $__internal_89f0286d86d03c29b86e1c6bd6998a3fd499c017ddceb24fef2ae864d85e10f8->leave($__internal_89f0286d86d03c29b86e1c6bd6998a3fd499c017ddceb24fef2ae864d85e10f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f79e196584519d592f5dd1a74d8f75acdbd9c06946a8e388ee9d857d38528195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79e196584519d592f5dd1a74d8f75acdbd9c06946a8e388ee9d857d38528195->enter($__internal_f79e196584519d592f5dd1a74d8f75acdbd9c06946a8e388ee9d857d38528195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_168af7af0c23109b729f5cd55bc7fd0fbf7d6a3849383f9fae289d390cfea3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168af7af0c23109b729f5cd55bc7fd0fbf7d6a3849383f9fae289d390cfea3a4->enter($__internal_168af7af0c23109b729f5cd55bc7fd0fbf7d6a3849383f9fae289d390cfea3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_168af7af0c23109b729f5cd55bc7fd0fbf7d6a3849383f9fae289d390cfea3a4->leave($__internal_168af7af0c23109b729f5cd55bc7fd0fbf7d6a3849383f9fae289d390cfea3a4_prof);

        
        $__internal_f79e196584519d592f5dd1a74d8f75acdbd9c06946a8e388ee9d857d38528195->leave($__internal_f79e196584519d592f5dd1a74d8f75acdbd9c06946a8e388ee9d857d38528195_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/sunshine/Documents/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
