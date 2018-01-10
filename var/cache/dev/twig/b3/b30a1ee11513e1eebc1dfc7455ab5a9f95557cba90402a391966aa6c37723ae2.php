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
        $__internal_ac348a436541c43e78fd2db4605b2545824b9223bb9e463b59b1d8bb166f9e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac348a436541c43e78fd2db4605b2545824b9223bb9e463b59b1d8bb166f9e1b->enter($__internal_ac348a436541c43e78fd2db4605b2545824b9223bb9e463b59b1d8bb166f9e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5c421860cf75ffca28d0805c878f8aab09712ad33867cb5105fd61e8710e7193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c421860cf75ffca28d0805c878f8aab09712ad33867cb5105fd61e8710e7193->enter($__internal_5c421860cf75ffca28d0805c878f8aab09712ad33867cb5105fd61e8710e7193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac348a436541c43e78fd2db4605b2545824b9223bb9e463b59b1d8bb166f9e1b->leave($__internal_ac348a436541c43e78fd2db4605b2545824b9223bb9e463b59b1d8bb166f9e1b_prof);

        
        $__internal_5c421860cf75ffca28d0805c878f8aab09712ad33867cb5105fd61e8710e7193->leave($__internal_5c421860cf75ffca28d0805c878f8aab09712ad33867cb5105fd61e8710e7193_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_065dbdb7b66e8117fbab5838b529bf46ab1cd8ebcbc6e5068525f13d5c5e95a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065dbdb7b66e8117fbab5838b529bf46ab1cd8ebcbc6e5068525f13d5c5e95a5->enter($__internal_065dbdb7b66e8117fbab5838b529bf46ab1cd8ebcbc6e5068525f13d5c5e95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_64b70b1bcc75cd93250710d92c8d5fcc2dec9ff772feb971e908dbffb5fb8ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b70b1bcc75cd93250710d92c8d5fcc2dec9ff772feb971e908dbffb5fb8ef9->enter($__internal_64b70b1bcc75cd93250710d92c8d5fcc2dec9ff772feb971e908dbffb5fb8ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_64b70b1bcc75cd93250710d92c8d5fcc2dec9ff772feb971e908dbffb5fb8ef9->leave($__internal_64b70b1bcc75cd93250710d92c8d5fcc2dec9ff772feb971e908dbffb5fb8ef9_prof);

        
        $__internal_065dbdb7b66e8117fbab5838b529bf46ab1cd8ebcbc6e5068525f13d5c5e95a5->leave($__internal_065dbdb7b66e8117fbab5838b529bf46ab1cd8ebcbc6e5068525f13d5c5e95a5_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
