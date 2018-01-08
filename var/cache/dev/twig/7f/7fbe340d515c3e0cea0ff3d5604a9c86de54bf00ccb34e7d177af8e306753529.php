<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7cd2e5784d9a56ad1015c41728304dd8c5db5b2e51fb0fc6ef60966268480c83 extends Twig_Template
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
        $__internal_274cb4fe51f1767e5a330e5adbddbf86af5f8af14d707ea1a896e0edd0d77d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274cb4fe51f1767e5a330e5adbddbf86af5f8af14d707ea1a896e0edd0d77d1f->enter($__internal_274cb4fe51f1767e5a330e5adbddbf86af5f8af14d707ea1a896e0edd0d77d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_934e809499acc82e739f4c8fece1c3699d9d8fcd24cbccd82f114bb418345b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934e809499acc82e739f4c8fece1c3699d9d8fcd24cbccd82f114bb418345b0c->enter($__internal_934e809499acc82e739f4c8fece1c3699d9d8fcd24cbccd82f114bb418345b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_274cb4fe51f1767e5a330e5adbddbf86af5f8af14d707ea1a896e0edd0d77d1f->leave($__internal_274cb4fe51f1767e5a330e5adbddbf86af5f8af14d707ea1a896e0edd0d77d1f_prof);

        
        $__internal_934e809499acc82e739f4c8fece1c3699d9d8fcd24cbccd82f114bb418345b0c->leave($__internal_934e809499acc82e739f4c8fece1c3699d9d8fcd24cbccd82f114bb418345b0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
