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
        $__internal_a9b8ae778384e8cc98e783c50d64ab1d47cb046cfc3d57d94d0b186dc73e5b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b8ae778384e8cc98e783c50d64ab1d47cb046cfc3d57d94d0b186dc73e5b7e->enter($__internal_a9b8ae778384e8cc98e783c50d64ab1d47cb046cfc3d57d94d0b186dc73e5b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_156bca4022925523c79ada86ed87428add7f4afc05d368b7812e6a2eb0896e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156bca4022925523c79ada86ed87428add7f4afc05d368b7812e6a2eb0896e9a->enter($__internal_156bca4022925523c79ada86ed87428add7f4afc05d368b7812e6a2eb0896e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b8ae778384e8cc98e783c50d64ab1d47cb046cfc3d57d94d0b186dc73e5b7e->leave($__internal_a9b8ae778384e8cc98e783c50d64ab1d47cb046cfc3d57d94d0b186dc73e5b7e_prof);

        
        $__internal_156bca4022925523c79ada86ed87428add7f4afc05d368b7812e6a2eb0896e9a->leave($__internal_156bca4022925523c79ada86ed87428add7f4afc05d368b7812e6a2eb0896e9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_499c07cf3cde6a67080ab65faa49b347a36a3b54f26dab3ae603890d687d1889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499c07cf3cde6a67080ab65faa49b347a36a3b54f26dab3ae603890d687d1889->enter($__internal_499c07cf3cde6a67080ab65faa49b347a36a3b54f26dab3ae603890d687d1889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ee8ba101da33388b4a0262f067e328369c9086ec6a4c09f76392577bccbe3351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8ba101da33388b4a0262f067e328369c9086ec6a4c09f76392577bccbe3351->enter($__internal_ee8ba101da33388b4a0262f067e328369c9086ec6a4c09f76392577bccbe3351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ee8ba101da33388b4a0262f067e328369c9086ec6a4c09f76392577bccbe3351->leave($__internal_ee8ba101da33388b4a0262f067e328369c9086ec6a4c09f76392577bccbe3351_prof);

        
        $__internal_499c07cf3cde6a67080ab65faa49b347a36a3b54f26dab3ae603890d687d1889->leave($__internal_499c07cf3cde6a67080ab65faa49b347a36a3b54f26dab3ae603890d687d1889_prof);

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
