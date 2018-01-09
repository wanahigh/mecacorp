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
        $__internal_2eb4e48db6ce0755fde838d93481681a2d80ccc2c3ec605b33dbf5244afd55b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb4e48db6ce0755fde838d93481681a2d80ccc2c3ec605b33dbf5244afd55b0->enter($__internal_2eb4e48db6ce0755fde838d93481681a2d80ccc2c3ec605b33dbf5244afd55b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_10f20e070c7eef57b5c5a4c8405036d97cc703715600f3a2bb112ab40c695ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f20e070c7eef57b5c5a4c8405036d97cc703715600f3a2bb112ab40c695ab7->enter($__internal_10f20e070c7eef57b5c5a4c8405036d97cc703715600f3a2bb112ab40c695ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb4e48db6ce0755fde838d93481681a2d80ccc2c3ec605b33dbf5244afd55b0->leave($__internal_2eb4e48db6ce0755fde838d93481681a2d80ccc2c3ec605b33dbf5244afd55b0_prof);

        
        $__internal_10f20e070c7eef57b5c5a4c8405036d97cc703715600f3a2bb112ab40c695ab7->leave($__internal_10f20e070c7eef57b5c5a4c8405036d97cc703715600f3a2bb112ab40c695ab7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c4983b047effdec9a7d61ad4a786c3b5670ae579c3c544ffb0539ea9ea95d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4983b047effdec9a7d61ad4a786c3b5670ae579c3c544ffb0539ea9ea95d3b->enter($__internal_8c4983b047effdec9a7d61ad4a786c3b5670ae579c3c544ffb0539ea9ea95d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41c842e4e5c79a10f03015aec77b66f265cb3f1c51059d4b5cea3140797c1a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c842e4e5c79a10f03015aec77b66f265cb3f1c51059d4b5cea3140797c1a70->enter($__internal_41c842e4e5c79a10f03015aec77b66f265cb3f1c51059d4b5cea3140797c1a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41c842e4e5c79a10f03015aec77b66f265cb3f1c51059d4b5cea3140797c1a70->leave($__internal_41c842e4e5c79a10f03015aec77b66f265cb3f1c51059d4b5cea3140797c1a70_prof);

        
        $__internal_8c4983b047effdec9a7d61ad4a786c3b5670ae579c3c544ffb0539ea9ea95d3b->leave($__internal_8c4983b047effdec9a7d61ad4a786c3b5670ae579c3c544ffb0539ea9ea95d3b_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
