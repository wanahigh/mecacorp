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
        $__internal_c5c5d99d7f42c69910941541dffd8b052f04f0f2610a3fa579fef6a22aaa9b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c5d99d7f42c69910941541dffd8b052f04f0f2610a3fa579fef6a22aaa9b00->enter($__internal_c5c5d99d7f42c69910941541dffd8b052f04f0f2610a3fa579fef6a22aaa9b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1772b8de26f880cccb7e06858c265c452723815eae975c89635f94f8812c9334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1772b8de26f880cccb7e06858c265c452723815eae975c89635f94f8812c9334->enter($__internal_1772b8de26f880cccb7e06858c265c452723815eae975c89635f94f8812c9334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c5d99d7f42c69910941541dffd8b052f04f0f2610a3fa579fef6a22aaa9b00->leave($__internal_c5c5d99d7f42c69910941541dffd8b052f04f0f2610a3fa579fef6a22aaa9b00_prof);

        
        $__internal_1772b8de26f880cccb7e06858c265c452723815eae975c89635f94f8812c9334->leave($__internal_1772b8de26f880cccb7e06858c265c452723815eae975c89635f94f8812c9334_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c2e96b15a331b15c19aeac899ad0869dcf499a13e3844b6da1bffb7a9f9f583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2e96b15a331b15c19aeac899ad0869dcf499a13e3844b6da1bffb7a9f9f583->enter($__internal_4c2e96b15a331b15c19aeac899ad0869dcf499a13e3844b6da1bffb7a9f9f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5afa46e22d6048c8e58c3d900ea38d317c0614d5d7ce66eb36186530d6e23f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afa46e22d6048c8e58c3d900ea38d317c0614d5d7ce66eb36186530d6e23f23->enter($__internal_5afa46e22d6048c8e58c3d900ea38d317c0614d5d7ce66eb36186530d6e23f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5afa46e22d6048c8e58c3d900ea38d317c0614d5d7ce66eb36186530d6e23f23->leave($__internal_5afa46e22d6048c8e58c3d900ea38d317c0614d5d7ce66eb36186530d6e23f23_prof);

        
        $__internal_4c2e96b15a331b15c19aeac899ad0869dcf499a13e3844b6da1bffb7a9f9f583->leave($__internal_4c2e96b15a331b15c19aeac899ad0869dcf499a13e3844b6da1bffb7a9f9f583_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
