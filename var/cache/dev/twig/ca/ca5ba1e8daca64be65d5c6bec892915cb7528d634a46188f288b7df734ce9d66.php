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
        $__internal_e5816430e3f3cfd78ee28fdc590539e44bc244b25c4137d9f115a16a5b345259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5816430e3f3cfd78ee28fdc590539e44bc244b25c4137d9f115a16a5b345259->enter($__internal_e5816430e3f3cfd78ee28fdc590539e44bc244b25c4137d9f115a16a5b345259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_f52f96b460180c2772c6fd9083e8d29897edb47ce7d0acfb624eba1a1db0532c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f96b460180c2772c6fd9083e8d29897edb47ce7d0acfb624eba1a1db0532c->enter($__internal_f52f96b460180c2772c6fd9083e8d29897edb47ce7d0acfb624eba1a1db0532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5816430e3f3cfd78ee28fdc590539e44bc244b25c4137d9f115a16a5b345259->leave($__internal_e5816430e3f3cfd78ee28fdc590539e44bc244b25c4137d9f115a16a5b345259_prof);

        
        $__internal_f52f96b460180c2772c6fd9083e8d29897edb47ce7d0acfb624eba1a1db0532c->leave($__internal_f52f96b460180c2772c6fd9083e8d29897edb47ce7d0acfb624eba1a1db0532c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c2aa86182efcacb45fd71c127ed04565451b1b563c3335809ca780edc31bcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2aa86182efcacb45fd71c127ed04565451b1b563c3335809ca780edc31bcc5->enter($__internal_6c2aa86182efcacb45fd71c127ed04565451b1b563c3335809ca780edc31bcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ebe2df6c11f852d527bbbcc735671c4ba8fc4b72754c67e6babcadfd39d9dac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe2df6c11f852d527bbbcc735671c4ba8fc4b72754c67e6babcadfd39d9dac6->enter($__internal_ebe2df6c11f852d527bbbcc735671c4ba8fc4b72754c67e6babcadfd39d9dac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_ebe2df6c11f852d527bbbcc735671c4ba8fc4b72754c67e6babcadfd39d9dac6->leave($__internal_ebe2df6c11f852d527bbbcc735671c4ba8fc4b72754c67e6babcadfd39d9dac6_prof);

        
        $__internal_6c2aa86182efcacb45fd71c127ed04565451b1b563c3335809ca780edc31bcc5->leave($__internal_6c2aa86182efcacb45fd71c127ed04565451b1b563c3335809ca780edc31bcc5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2c592f171b255fe66fa18e9259e35212baab02ea39884934cacd0a916220c664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c592f171b255fe66fa18e9259e35212baab02ea39884934cacd0a916220c664->enter($__internal_2c592f171b255fe66fa18e9259e35212baab02ea39884934cacd0a916220c664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_88f6f5b1de05ac329767e0727e4775ebc6b001789560b08b858390c55209d814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f6f5b1de05ac329767e0727e4775ebc6b001789560b08b858390c55209d814->enter($__internal_88f6f5b1de05ac329767e0727e4775ebc6b001789560b08b858390c55209d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_88f6f5b1de05ac329767e0727e4775ebc6b001789560b08b858390c55209d814->leave($__internal_88f6f5b1de05ac329767e0727e4775ebc6b001789560b08b858390c55209d814_prof);

        
        $__internal_2c592f171b255fe66fa18e9259e35212baab02ea39884934cacd0a916220c664->leave($__internal_2c592f171b255fe66fa18e9259e35212baab02ea39884934cacd0a916220c664_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5c5f02f12aea601e258e47452d7129563a9834bc515aaa7459dce34a54376bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5f02f12aea601e258e47452d7129563a9834bc515aaa7459dce34a54376bb5->enter($__internal_5c5f02f12aea601e258e47452d7129563a9834bc515aaa7459dce34a54376bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_14a6325df87725f2877eb74b55adba32b03b9455cd7125dabcadc5fb0320938a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a6325df87725f2877eb74b55adba32b03b9455cd7125dabcadc5fb0320938a->enter($__internal_14a6325df87725f2877eb74b55adba32b03b9455cd7125dabcadc5fb0320938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_14a6325df87725f2877eb74b55adba32b03b9455cd7125dabcadc5fb0320938a->leave($__internal_14a6325df87725f2877eb74b55adba32b03b9455cd7125dabcadc5fb0320938a_prof);

        
        $__internal_5c5f02f12aea601e258e47452d7129563a9834bc515aaa7459dce34a54376bb5->leave($__internal_5c5f02f12aea601e258e47452d7129563a9834bc515aaa7459dce34a54376bb5_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
