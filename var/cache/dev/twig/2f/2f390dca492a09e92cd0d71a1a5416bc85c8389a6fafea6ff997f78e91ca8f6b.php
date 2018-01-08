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
        $__internal_93108e23063c1e79482997fceb5d6af37c18dedee4d3e4d35f805cb6814cf10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93108e23063c1e79482997fceb5d6af37c18dedee4d3e4d35f805cb6814cf10b->enter($__internal_93108e23063c1e79482997fceb5d6af37c18dedee4d3e4d35f805cb6814cf10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_69b365a84fe66c9e8cb545836319373f3445343cb28ef9836f2535132501f425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b365a84fe66c9e8cb545836319373f3445343cb28ef9836f2535132501f425->enter($__internal_69b365a84fe66c9e8cb545836319373f3445343cb28ef9836f2535132501f425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93108e23063c1e79482997fceb5d6af37c18dedee4d3e4d35f805cb6814cf10b->leave($__internal_93108e23063c1e79482997fceb5d6af37c18dedee4d3e4d35f805cb6814cf10b_prof);

        
        $__internal_69b365a84fe66c9e8cb545836319373f3445343cb28ef9836f2535132501f425->leave($__internal_69b365a84fe66c9e8cb545836319373f3445343cb28ef9836f2535132501f425_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44ec8bd6f5c7a8f03b25044bea6d2f1e814c799085097e62823acb1299cbf051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ec8bd6f5c7a8f03b25044bea6d2f1e814c799085097e62823acb1299cbf051->enter($__internal_44ec8bd6f5c7a8f03b25044bea6d2f1e814c799085097e62823acb1299cbf051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cce17226adb08f68c4655b4d17a05716368dd03b2073b15a6862a16231bff093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce17226adb08f68c4655b4d17a05716368dd03b2073b15a6862a16231bff093->enter($__internal_cce17226adb08f68c4655b4d17a05716368dd03b2073b15a6862a16231bff093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cce17226adb08f68c4655b4d17a05716368dd03b2073b15a6862a16231bff093->leave($__internal_cce17226adb08f68c4655b4d17a05716368dd03b2073b15a6862a16231bff093_prof);

        
        $__internal_44ec8bd6f5c7a8f03b25044bea6d2f1e814c799085097e62823acb1299cbf051->leave($__internal_44ec8bd6f5c7a8f03b25044bea6d2f1e814c799085097e62823acb1299cbf051_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
