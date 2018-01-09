<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4f6bd73c70d5b65f2d76616a4f2b5172a0235f88827707beaeaf1b941624ef81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_99f84eb352db7d527003ac6f4a77bbfdb70f1485db64b0e318eaff4b47693124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f84eb352db7d527003ac6f4a77bbfdb70f1485db64b0e318eaff4b47693124->enter($__internal_99f84eb352db7d527003ac6f4a77bbfdb70f1485db64b0e318eaff4b47693124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_3302055a5f0370dc2a2070928763e4f12c0db21556905a519927ad8d9f4e06b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3302055a5f0370dc2a2070928763e4f12c0db21556905a519927ad8d9f4e06b3->enter($__internal_3302055a5f0370dc2a2070928763e4f12c0db21556905a519927ad8d9f4e06b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f84eb352db7d527003ac6f4a77bbfdb70f1485db64b0e318eaff4b47693124->leave($__internal_99f84eb352db7d527003ac6f4a77bbfdb70f1485db64b0e318eaff4b47693124_prof);

        
        $__internal_3302055a5f0370dc2a2070928763e4f12c0db21556905a519927ad8d9f4e06b3->leave($__internal_3302055a5f0370dc2a2070928763e4f12c0db21556905a519927ad8d9f4e06b3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c174fa69f6d890c821097ab77899591f672f51ab6039155091d28e6afe3ae58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c174fa69f6d890c821097ab77899591f672f51ab6039155091d28e6afe3ae58->enter($__internal_8c174fa69f6d890c821097ab77899591f672f51ab6039155091d28e6afe3ae58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4595ef94b9dc89aa9d01ee5244b572347664dcd5d3791424e34152e1e975226b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4595ef94b9dc89aa9d01ee5244b572347664dcd5d3791424e34152e1e975226b->enter($__internal_4595ef94b9dc89aa9d01ee5244b572347664dcd5d3791424e34152e1e975226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4595ef94b9dc89aa9d01ee5244b572347664dcd5d3791424e34152e1e975226b->leave($__internal_4595ef94b9dc89aa9d01ee5244b572347664dcd5d3791424e34152e1e975226b_prof);

        
        $__internal_8c174fa69f6d890c821097ab77899591f672f51ab6039155091d28e6afe3ae58->leave($__internal_8c174fa69f6d890c821097ab77899591f672f51ab6039155091d28e6afe3ae58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
