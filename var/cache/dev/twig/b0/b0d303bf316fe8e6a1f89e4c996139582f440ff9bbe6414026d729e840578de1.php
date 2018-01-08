<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_898e96a95ffc1d5bd4ecb915a11ddd516798b1a22a6154b90d7ad0690aa49263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b21731122095043da177548bf22646eee4c275506b3f0d9c54f3306ea6d1899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b21731122095043da177548bf22646eee4c275506b3f0d9c54f3306ea6d1899->enter($__internal_6b21731122095043da177548bf22646eee4c275506b3f0d9c54f3306ea6d1899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_3c154c166891a48a33edbf3371cf59993492ffec3fc060d9b6f7b6720b35b1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c154c166891a48a33edbf3371cf59993492ffec3fc060d9b6f7b6720b35b1aa->enter($__internal_3c154c166891a48a33edbf3371cf59993492ffec3fc060d9b6f7b6720b35b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6b21731122095043da177548bf22646eee4c275506b3f0d9c54f3306ea6d1899->leave($__internal_6b21731122095043da177548bf22646eee4c275506b3f0d9c54f3306ea6d1899_prof);

        
        $__internal_3c154c166891a48a33edbf3371cf59993492ffec3fc060d9b6f7b6720b35b1aa->leave($__internal_3c154c166891a48a33edbf3371cf59993492ffec3fc060d9b6f7b6720b35b1aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ee001141660c9d4c4b7a9247ec7d69b90c317926fbbcff4017e39a4322922c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee001141660c9d4c4b7a9247ec7d69b90c317926fbbcff4017e39a4322922c08->enter($__internal_ee001141660c9d4c4b7a9247ec7d69b90c317926fbbcff4017e39a4322922c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3034b93961f231c7dcb123ca8a459d7e13865228b9ec89a07f90e1823ad91ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3034b93961f231c7dcb123ca8a459d7e13865228b9ec89a07f90e1823ad91ed2->enter($__internal_3034b93961f231c7dcb123ca8a459d7e13865228b9ec89a07f90e1823ad91ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_3034b93961f231c7dcb123ca8a459d7e13865228b9ec89a07f90e1823ad91ed2->leave($__internal_3034b93961f231c7dcb123ca8a459d7e13865228b9ec89a07f90e1823ad91ed2_prof);

        
        $__internal_ee001141660c9d4c4b7a9247ec7d69b90c317926fbbcff4017e39a4322922c08->leave($__internal_ee001141660c9d4c4b7a9247ec7d69b90c317926fbbcff4017e39a4322922c08_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_99576030845c6e7285cab7ce432357b968bedda2d1481b20adf064d39c7e28c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99576030845c6e7285cab7ce432357b968bedda2d1481b20adf064d39c7e28c3->enter($__internal_99576030845c6e7285cab7ce432357b968bedda2d1481b20adf064d39c7e28c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_858fc4fe72d9b182b5b29797b07cdb72be7b2f2f42fb6100008f7035d370ff84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858fc4fe72d9b182b5b29797b07cdb72be7b2f2f42fb6100008f7035d370ff84->enter($__internal_858fc4fe72d9b182b5b29797b07cdb72be7b2f2f42fb6100008f7035d370ff84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_858fc4fe72d9b182b5b29797b07cdb72be7b2f2f42fb6100008f7035d370ff84->leave($__internal_858fc4fe72d9b182b5b29797b07cdb72be7b2f2f42fb6100008f7035d370ff84_prof);

        
        $__internal_99576030845c6e7285cab7ce432357b968bedda2d1481b20adf064d39c7e28c3->leave($__internal_99576030845c6e7285cab7ce432357b968bedda2d1481b20adf064d39c7e28c3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ec3097a75c8226950ae083875a0975381c00506128abd2e76f834ec78422b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3097a75c8226950ae083875a0975381c00506128abd2e76f834ec78422b4f2->enter($__internal_ec3097a75c8226950ae083875a0975381c00506128abd2e76f834ec78422b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2352e735abd40c59228c7dc8f468ed412c3d1a730f38ed3a8221068c4c3c2679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2352e735abd40c59228c7dc8f468ed412c3d1a730f38ed3a8221068c4c3c2679->enter($__internal_2352e735abd40c59228c7dc8f468ed412c3d1a730f38ed3a8221068c4c3c2679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2352e735abd40c59228c7dc8f468ed412c3d1a730f38ed3a8221068c4c3c2679->leave($__internal_2352e735abd40c59228c7dc8f468ed412c3d1a730f38ed3a8221068c4c3c2679_prof);

        
        $__internal_ec3097a75c8226950ae083875a0975381c00506128abd2e76f834ec78422b4f2->leave($__internal_ec3097a75c8226950ae083875a0975381c00506128abd2e76f834ec78422b4f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
