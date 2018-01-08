<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a6b688a534f7f2aba134244aec062237fbd5ef372be52b473817465e52652745 extends Twig_Template
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
        $__internal_f3c31ebcf76dd97288594a0b28bc6009ee8df2f050bd2df47ba0be41251faebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c31ebcf76dd97288594a0b28bc6009ee8df2f050bd2df47ba0be41251faebd->enter($__internal_f3c31ebcf76dd97288594a0b28bc6009ee8df2f050bd2df47ba0be41251faebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_07fd6103ff6f232da3dc58286a78acdb05df513f57c682795d2b9d186f17dbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fd6103ff6f232da3dc58286a78acdb05df513f57c682795d2b9d186f17dbac->enter($__internal_07fd6103ff6f232da3dc58286a78acdb05df513f57c682795d2b9d186f17dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3c31ebcf76dd97288594a0b28bc6009ee8df2f050bd2df47ba0be41251faebd->leave($__internal_f3c31ebcf76dd97288594a0b28bc6009ee8df2f050bd2df47ba0be41251faebd_prof);

        
        $__internal_07fd6103ff6f232da3dc58286a78acdb05df513f57c682795d2b9d186f17dbac->leave($__internal_07fd6103ff6f232da3dc58286a78acdb05df513f57c682795d2b9d186f17dbac_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e7da3bbf1c5647d1593befa17662463951a94b26e0209e1666c2adeb28bae634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7da3bbf1c5647d1593befa17662463951a94b26e0209e1666c2adeb28bae634->enter($__internal_e7da3bbf1c5647d1593befa17662463951a94b26e0209e1666c2adeb28bae634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d56566d81c2e9dec86d8de364732d7a547c8679d1d9afed628e76c9a02a76ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56566d81c2e9dec86d8de364732d7a547c8679d1d9afed628e76c9a02a76ae5->enter($__internal_d56566d81c2e9dec86d8de364732d7a547c8679d1d9afed628e76c9a02a76ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_d56566d81c2e9dec86d8de364732d7a547c8679d1d9afed628e76c9a02a76ae5->leave($__internal_d56566d81c2e9dec86d8de364732d7a547c8679d1d9afed628e76c9a02a76ae5_prof);

        
        $__internal_e7da3bbf1c5647d1593befa17662463951a94b26e0209e1666c2adeb28bae634->leave($__internal_e7da3bbf1c5647d1593befa17662463951a94b26e0209e1666c2adeb28bae634_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5fed84d15edd9e50d602c1305ef1ed1e167852f539a78f4a1da139f46c2c63fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fed84d15edd9e50d602c1305ef1ed1e167852f539a78f4a1da139f46c2c63fe->enter($__internal_5fed84d15edd9e50d602c1305ef1ed1e167852f539a78f4a1da139f46c2c63fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7179429e5a86c4e827acd49b651c971b322a73d0ceb91f8170b6e33cd9d0cad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7179429e5a86c4e827acd49b651c971b322a73d0ceb91f8170b6e33cd9d0cad5->enter($__internal_7179429e5a86c4e827acd49b651c971b322a73d0ceb91f8170b6e33cd9d0cad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7179429e5a86c4e827acd49b651c971b322a73d0ceb91f8170b6e33cd9d0cad5->leave($__internal_7179429e5a86c4e827acd49b651c971b322a73d0ceb91f8170b6e33cd9d0cad5_prof);

        
        $__internal_5fed84d15edd9e50d602c1305ef1ed1e167852f539a78f4a1da139f46c2c63fe->leave($__internal_5fed84d15edd9e50d602c1305ef1ed1e167852f539a78f4a1da139f46c2c63fe_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c951a7485021595eb1d43413efcf13ff9a75f66aee6ff6a0db395315931d9733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c951a7485021595eb1d43413efcf13ff9a75f66aee6ff6a0db395315931d9733->enter($__internal_c951a7485021595eb1d43413efcf13ff9a75f66aee6ff6a0db395315931d9733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4e26098e74461c2825b2877cebf0a433ba9618724b5acc06be2f2cb233d88ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e26098e74461c2825b2877cebf0a433ba9618724b5acc06be2f2cb233d88ff5->enter($__internal_4e26098e74461c2825b2877cebf0a433ba9618724b5acc06be2f2cb233d88ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4e26098e74461c2825b2877cebf0a433ba9618724b5acc06be2f2cb233d88ff5->leave($__internal_4e26098e74461c2825b2877cebf0a433ba9618724b5acc06be2f2cb233d88ff5_prof);

        
        $__internal_c951a7485021595eb1d43413efcf13ff9a75f66aee6ff6a0db395315931d9733->leave($__internal_c951a7485021595eb1d43413efcf13ff9a75f66aee6ff6a0db395315931d9733_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
