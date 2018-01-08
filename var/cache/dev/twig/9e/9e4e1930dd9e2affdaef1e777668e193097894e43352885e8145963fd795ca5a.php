<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_95555cb5c439cb35d5706fc780aaec9784f43f91cdfa86687f318679ad098767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ada1125c10cb6df21efe5984333a0f67ef3c926d7f0d3871f84193af4cac913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ada1125c10cb6df21efe5984333a0f67ef3c926d7f0d3871f84193af4cac913->enter($__internal_6ada1125c10cb6df21efe5984333a0f67ef3c926d7f0d3871f84193af4cac913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_8f4d329c7a5e37259a72f5a3b5a40a91de026d1e0f13a57b628acc5173e09151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4d329c7a5e37259a72f5a3b5a40a91de026d1e0f13a57b628acc5173e09151->enter($__internal_8f4d329c7a5e37259a72f5a3b5a40a91de026d1e0f13a57b628acc5173e09151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_6ada1125c10cb6df21efe5984333a0f67ef3c926d7f0d3871f84193af4cac913->leave($__internal_6ada1125c10cb6df21efe5984333a0f67ef3c926d7f0d3871f84193af4cac913_prof);

        
        $__internal_8f4d329c7a5e37259a72f5a3b5a40a91de026d1e0f13a57b628acc5173e09151->leave($__internal_8f4d329c7a5e37259a72f5a3b5a40a91de026d1e0f13a57b628acc5173e09151_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
