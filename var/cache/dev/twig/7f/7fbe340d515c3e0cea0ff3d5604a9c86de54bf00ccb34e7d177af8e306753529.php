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
        $__internal_48f220d8293cda2f5e23e89fdf7d0d428cc83489cc3e38ae7adcadf0a8a76fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f220d8293cda2f5e23e89fdf7d0d428cc83489cc3e38ae7adcadf0a8a76fac->enter($__internal_48f220d8293cda2f5e23e89fdf7d0d428cc83489cc3e38ae7adcadf0a8a76fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d632f39d8453ea0bf16300ca3dd81d8f8027747cc0c6dfc173e858d5ad0603d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d632f39d8453ea0bf16300ca3dd81d8f8027747cc0c6dfc173e858d5ad0603d6->enter($__internal_d632f39d8453ea0bf16300ca3dd81d8f8027747cc0c6dfc173e858d5ad0603d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_48f220d8293cda2f5e23e89fdf7d0d428cc83489cc3e38ae7adcadf0a8a76fac->leave($__internal_48f220d8293cda2f5e23e89fdf7d0d428cc83489cc3e38ae7adcadf0a8a76fac_prof);

        
        $__internal_d632f39d8453ea0bf16300ca3dd81d8f8027747cc0c6dfc173e858d5ad0603d6->leave($__internal_d632f39d8453ea0bf16300ca3dd81d8f8027747cc0c6dfc173e858d5ad0603d6_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
