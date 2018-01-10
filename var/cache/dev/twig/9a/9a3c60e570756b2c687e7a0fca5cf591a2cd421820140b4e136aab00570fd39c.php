<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_66fd3758596e1f614e4632510fe942ea41df8b6f48c3ed9b6c49439ff5e24a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2937dbc2367b679355ab3aef461c5f03046c7f8b2bd6018a3d8edf7164b2c383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2937dbc2367b679355ab3aef461c5f03046c7f8b2bd6018a3d8edf7164b2c383->enter($__internal_2937dbc2367b679355ab3aef461c5f03046c7f8b2bd6018a3d8edf7164b2c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_59d70a82392085ca74d5b036727eb4a7e9a6e171b9b0652e348bcea251cd4699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d70a82392085ca74d5b036727eb4a7e9a6e171b9b0652e348bcea251cd4699->enter($__internal_59d70a82392085ca74d5b036727eb4a7e9a6e171b9b0652e348bcea251cd4699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2937dbc2367b679355ab3aef461c5f03046c7f8b2bd6018a3d8edf7164b2c383->leave($__internal_2937dbc2367b679355ab3aef461c5f03046c7f8b2bd6018a3d8edf7164b2c383_prof);

        
        $__internal_59d70a82392085ca74d5b036727eb4a7e9a6e171b9b0652e348bcea251cd4699->leave($__internal_59d70a82392085ca74d5b036727eb4a7e9a6e171b9b0652e348bcea251cd4699_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_807096753805a6a6958e1e36749b1ca4ab2343f8a653104abdfec59ee0776401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807096753805a6a6958e1e36749b1ca4ab2343f8a653104abdfec59ee0776401->enter($__internal_807096753805a6a6958e1e36749b1ca4ab2343f8a653104abdfec59ee0776401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b32186c84c2fc70e90f011d54e1376df7860115a0608ec8c68f081f952bc8eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32186c84c2fc70e90f011d54e1376df7860115a0608ec8c68f081f952bc8eeb->enter($__internal_b32186c84c2fc70e90f011d54e1376df7860115a0608ec8c68f081f952bc8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b32186c84c2fc70e90f011d54e1376df7860115a0608ec8c68f081f952bc8eeb->leave($__internal_b32186c84c2fc70e90f011d54e1376df7860115a0608ec8c68f081f952bc8eeb_prof);

        
        $__internal_807096753805a6a6958e1e36749b1ca4ab2343f8a653104abdfec59ee0776401->leave($__internal_807096753805a6a6958e1e36749b1ca4ab2343f8a653104abdfec59ee0776401_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
