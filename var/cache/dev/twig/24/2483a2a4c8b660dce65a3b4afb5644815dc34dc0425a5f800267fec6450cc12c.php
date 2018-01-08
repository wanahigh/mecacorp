<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c31c83071dbb272c701e9d158de6a891e4b979fca1f8e26e6a7faf7800220558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_261bc1a661ac3374874bbb884e9cadfe0b9a640c63edef7ad20dea687bf32ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261bc1a661ac3374874bbb884e9cadfe0b9a640c63edef7ad20dea687bf32ce8->enter($__internal_261bc1a661ac3374874bbb884e9cadfe0b9a640c63edef7ad20dea687bf32ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a9a381b8c714630856ab87fbaca3b613c9c85b67bfcf7d12490bd7407736a168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a381b8c714630856ab87fbaca3b613c9c85b67bfcf7d12490bd7407736a168->enter($__internal_a9a381b8c714630856ab87fbaca3b613c9c85b67bfcf7d12490bd7407736a168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261bc1a661ac3374874bbb884e9cadfe0b9a640c63edef7ad20dea687bf32ce8->leave($__internal_261bc1a661ac3374874bbb884e9cadfe0b9a640c63edef7ad20dea687bf32ce8_prof);

        
        $__internal_a9a381b8c714630856ab87fbaca3b613c9c85b67bfcf7d12490bd7407736a168->leave($__internal_a9a381b8c714630856ab87fbaca3b613c9c85b67bfcf7d12490bd7407736a168_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f302904949fe96c4c29a8d055b67a261456d87991c7be5d77c505daac968a839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f302904949fe96c4c29a8d055b67a261456d87991c7be5d77c505daac968a839->enter($__internal_f302904949fe96c4c29a8d055b67a261456d87991c7be5d77c505daac968a839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9cbdd9811147f6b577fd3f8a92c09fe0299c8068a03cf92355e190e6bdbbb3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbdd9811147f6b577fd3f8a92c09fe0299c8068a03cf92355e190e6bdbbb3c2->enter($__internal_9cbdd9811147f6b577fd3f8a92c09fe0299c8068a03cf92355e190e6bdbbb3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9cbdd9811147f6b577fd3f8a92c09fe0299c8068a03cf92355e190e6bdbbb3c2->leave($__internal_9cbdd9811147f6b577fd3f8a92c09fe0299c8068a03cf92355e190e6bdbbb3c2_prof);

        
        $__internal_f302904949fe96c4c29a8d055b67a261456d87991c7be5d77c505daac968a839->leave($__internal_f302904949fe96c4c29a8d055b67a261456d87991c7be5d77c505daac968a839_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
