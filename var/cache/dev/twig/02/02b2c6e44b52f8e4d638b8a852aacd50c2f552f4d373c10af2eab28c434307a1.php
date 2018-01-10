<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_c64856d992307ac3803ecc3bd68c571726bfd41e7f90cdf43f9fb0faca2766b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4af594113488423c5df9bbd370544b656d97f0fecc9f48d44cdf145ba9329c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af594113488423c5df9bbd370544b656d97f0fecc9f48d44cdf145ba9329c7a->enter($__internal_4af594113488423c5df9bbd370544b656d97f0fecc9f48d44cdf145ba9329c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_43d6787cf582f13c3dbadb89211d80c424c5026547c6d6925cffb4d0a4b2144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d6787cf582f13c3dbadb89211d80c424c5026547c6d6925cffb4d0a4b2144a->enter($__internal_43d6787cf582f13c3dbadb89211d80c424c5026547c6d6925cffb4d0a4b2144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af594113488423c5df9bbd370544b656d97f0fecc9f48d44cdf145ba9329c7a->leave($__internal_4af594113488423c5df9bbd370544b656d97f0fecc9f48d44cdf145ba9329c7a_prof);

        
        $__internal_43d6787cf582f13c3dbadb89211d80c424c5026547c6d6925cffb4d0a4b2144a->leave($__internal_43d6787cf582f13c3dbadb89211d80c424c5026547c6d6925cffb4d0a4b2144a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b43c7eb95128eb74839a61598681304c93013bcc5d64f4c2581c8490cfa99bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b43c7eb95128eb74839a61598681304c93013bcc5d64f4c2581c8490cfa99bf->enter($__internal_6b43c7eb95128eb74839a61598681304c93013bcc5d64f4c2581c8490cfa99bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b62eac44c0cee7d0ac3fc20b766a4b6171568f3fbe50576710abf9c2428ee3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62eac44c0cee7d0ac3fc20b766a4b6171568f3fbe50576710abf9c2428ee3f5->enter($__internal_b62eac44c0cee7d0ac3fc20b766a4b6171568f3fbe50576710abf9c2428ee3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b62eac44c0cee7d0ac3fc20b766a4b6171568f3fbe50576710abf9c2428ee3f5->leave($__internal_b62eac44c0cee7d0ac3fc20b766a4b6171568f3fbe50576710abf9c2428ee3f5_prof);

        
        $__internal_6b43c7eb95128eb74839a61598681304c93013bcc5d64f4c2581c8490cfa99bf->leave($__internal_6b43c7eb95128eb74839a61598681304c93013bcc5d64f4c2581c8490cfa99bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
