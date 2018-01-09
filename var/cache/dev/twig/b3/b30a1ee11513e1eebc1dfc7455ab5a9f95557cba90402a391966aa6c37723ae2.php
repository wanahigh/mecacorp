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
        $__internal_b0a70f0301ee231c98826e1328051b3446cbbfb53cf9b7bbf2fa75cbefb26927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a70f0301ee231c98826e1328051b3446cbbfb53cf9b7bbf2fa75cbefb26927->enter($__internal_b0a70f0301ee231c98826e1328051b3446cbbfb53cf9b7bbf2fa75cbefb26927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_a445e5b66a548acefad7127a562269eb43eb424d2fbce01ac17f8ad3dc78d875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a445e5b66a548acefad7127a562269eb43eb424d2fbce01ac17f8ad3dc78d875->enter($__internal_a445e5b66a548acefad7127a562269eb43eb424d2fbce01ac17f8ad3dc78d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a70f0301ee231c98826e1328051b3446cbbfb53cf9b7bbf2fa75cbefb26927->leave($__internal_b0a70f0301ee231c98826e1328051b3446cbbfb53cf9b7bbf2fa75cbefb26927_prof);

        
        $__internal_a445e5b66a548acefad7127a562269eb43eb424d2fbce01ac17f8ad3dc78d875->leave($__internal_a445e5b66a548acefad7127a562269eb43eb424d2fbce01ac17f8ad3dc78d875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09497e325f3bacdc7a2855e6e71d7add61e18c0e0880f7ad422fe129e51db943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09497e325f3bacdc7a2855e6e71d7add61e18c0e0880f7ad422fe129e51db943->enter($__internal_09497e325f3bacdc7a2855e6e71d7add61e18c0e0880f7ad422fe129e51db943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9bf50c797e37fff18d11f1fd16bc66041a18e18bee2cd3ebb7e14d33204c007d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf50c797e37fff18d11f1fd16bc66041a18e18bee2cd3ebb7e14d33204c007d->enter($__internal_9bf50c797e37fff18d11f1fd16bc66041a18e18bee2cd3ebb7e14d33204c007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9bf50c797e37fff18d11f1fd16bc66041a18e18bee2cd3ebb7e14d33204c007d->leave($__internal_9bf50c797e37fff18d11f1fd16bc66041a18e18bee2cd3ebb7e14d33204c007d_prof);

        
        $__internal_09497e325f3bacdc7a2855e6e71d7add61e18c0e0880f7ad422fe129e51db943->leave($__internal_09497e325f3bacdc7a2855e6e71d7add61e18c0e0880f7ad422fe129e51db943_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
