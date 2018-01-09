<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_5617934a1cba2d17388c36cfac6cabd8a82c9c44fd1d7d94af42bbbc1229305b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_408d38428f05aa1bd8822e3c7c081ca47797b5bd15ec0f79c1022121302fa1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408d38428f05aa1bd8822e3c7c081ca47797b5bd15ec0f79c1022121302fa1bb->enter($__internal_408d38428f05aa1bd8822e3c7c081ca47797b5bd15ec0f79c1022121302fa1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_fced16c22fb9f826d05aff16611c53d1f5b086322f387992b08b356739ee4ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fced16c22fb9f826d05aff16611c53d1f5b086322f387992b08b356739ee4ff4->enter($__internal_fced16c22fb9f826d05aff16611c53d1f5b086322f387992b08b356739ee4ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_408d38428f05aa1bd8822e3c7c081ca47797b5bd15ec0f79c1022121302fa1bb->leave($__internal_408d38428f05aa1bd8822e3c7c081ca47797b5bd15ec0f79c1022121302fa1bb_prof);

        
        $__internal_fced16c22fb9f826d05aff16611c53d1f5b086322f387992b08b356739ee4ff4->leave($__internal_fced16c22fb9f826d05aff16611c53d1f5b086322f387992b08b356739ee4ff4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27a60e65dbdebed5bf0bd1eb321e5fe30ce22146bfe4e5ff86e19c6bd7f43f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a60e65dbdebed5bf0bd1eb321e5fe30ce22146bfe4e5ff86e19c6bd7f43f64->enter($__internal_27a60e65dbdebed5bf0bd1eb321e5fe30ce22146bfe4e5ff86e19c6bd7f43f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f9b222a7f12a680b3bf0c880ae55abaa4258f63103d8dd15efc73fac8be79d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9b222a7f12a680b3bf0c880ae55abaa4258f63103d8dd15efc73fac8be79d0->enter($__internal_7f9b222a7f12a680b3bf0c880ae55abaa4258f63103d8dd15efc73fac8be79d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7f9b222a7f12a680b3bf0c880ae55abaa4258f63103d8dd15efc73fac8be79d0->leave($__internal_7f9b222a7f12a680b3bf0c880ae55abaa4258f63103d8dd15efc73fac8be79d0_prof);

        
        $__internal_27a60e65dbdebed5bf0bd1eb321e5fe30ce22146bfe4e5ff86e19c6bd7f43f64->leave($__internal_27a60e65dbdebed5bf0bd1eb321e5fe30ce22146bfe4e5ff86e19c6bd7f43f64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
