<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_312315fc6979f97cb3364a3ea40cce1065485b8eac041e410d141540a8da39c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6b1e15c5a078bb66c027c9fb196077bb912e755705baeee2cbf169a002fc19df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1e15c5a078bb66c027c9fb196077bb912e755705baeee2cbf169a002fc19df->enter($__internal_6b1e15c5a078bb66c027c9fb196077bb912e755705baeee2cbf169a002fc19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5aab632ef36424d25f7932a1f04b1f9f0e035eea667777c6b8cadc74f9ec29d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aab632ef36424d25f7932a1f04b1f9f0e035eea667777c6b8cadc74f9ec29d5->enter($__internal_5aab632ef36424d25f7932a1f04b1f9f0e035eea667777c6b8cadc74f9ec29d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b1e15c5a078bb66c027c9fb196077bb912e755705baeee2cbf169a002fc19df->leave($__internal_6b1e15c5a078bb66c027c9fb196077bb912e755705baeee2cbf169a002fc19df_prof);

        
        $__internal_5aab632ef36424d25f7932a1f04b1f9f0e035eea667777c6b8cadc74f9ec29d5->leave($__internal_5aab632ef36424d25f7932a1f04b1f9f0e035eea667777c6b8cadc74f9ec29d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ded509e4258260212d60848bee3caf9e03a46fc7eec56d2feb62299a2508da28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded509e4258260212d60848bee3caf9e03a46fc7eec56d2feb62299a2508da28->enter($__internal_ded509e4258260212d60848bee3caf9e03a46fc7eec56d2feb62299a2508da28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a46b5d4e84ad2f93352d3ff49eb690100bce4351309e176da1e277682b425968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46b5d4e84ad2f93352d3ff49eb690100bce4351309e176da1e277682b425968->enter($__internal_a46b5d4e84ad2f93352d3ff49eb690100bce4351309e176da1e277682b425968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a46b5d4e84ad2f93352d3ff49eb690100bce4351309e176da1e277682b425968->leave($__internal_a46b5d4e84ad2f93352d3ff49eb690100bce4351309e176da1e277682b425968_prof);

        
        $__internal_ded509e4258260212d60848bee3caf9e03a46fc7eec56d2feb62299a2508da28->leave($__internal_ded509e4258260212d60848bee3caf9e03a46fc7eec56d2feb62299a2508da28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
