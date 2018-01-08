<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_409ee9a8195f878264d8ed05f0bece799630f21d48bbddc4497bae5c2343ac73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1b87b70f3a3cdbf3de4308bbf09945bd61624d51b0d79b07885d153c14bb2ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b87b70f3a3cdbf3de4308bbf09945bd61624d51b0d79b07885d153c14bb2ba9->enter($__internal_1b87b70f3a3cdbf3de4308bbf09945bd61624d51b0d79b07885d153c14bb2ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_e595e461b38852fdb741e254e8de6b864d7a5e667c89966a5cd7890a6340b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e595e461b38852fdb741e254e8de6b864d7a5e667c89966a5cd7890a6340b2f0->enter($__internal_e595e461b38852fdb741e254e8de6b864d7a5e667c89966a5cd7890a6340b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b87b70f3a3cdbf3de4308bbf09945bd61624d51b0d79b07885d153c14bb2ba9->leave($__internal_1b87b70f3a3cdbf3de4308bbf09945bd61624d51b0d79b07885d153c14bb2ba9_prof);

        
        $__internal_e595e461b38852fdb741e254e8de6b864d7a5e667c89966a5cd7890a6340b2f0->leave($__internal_e595e461b38852fdb741e254e8de6b864d7a5e667c89966a5cd7890a6340b2f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7a4a534cfd9eb04f1fc98d5fc64ed1072453f892695bb1188b1784fad0e0ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a4a534cfd9eb04f1fc98d5fc64ed1072453f892695bb1188b1784fad0e0ac5->enter($__internal_d7a4a534cfd9eb04f1fc98d5fc64ed1072453f892695bb1188b1784fad0e0ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e3a7301c8a1419dc8c72312f7094119b44c4ec7511c4f64248061a5de7a762f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a7301c8a1419dc8c72312f7094119b44c4ec7511c4f64248061a5de7a762f6->enter($__internal_e3a7301c8a1419dc8c72312f7094119b44c4ec7511c4f64248061a5de7a762f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e3a7301c8a1419dc8c72312f7094119b44c4ec7511c4f64248061a5de7a762f6->leave($__internal_e3a7301c8a1419dc8c72312f7094119b44c4ec7511c4f64248061a5de7a762f6_prof);

        
        $__internal_d7a4a534cfd9eb04f1fc98d5fc64ed1072453f892695bb1188b1784fad0e0ac5->leave($__internal_d7a4a534cfd9eb04f1fc98d5fc64ed1072453f892695bb1188b1784fad0e0ac5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
