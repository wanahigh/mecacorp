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
        $__internal_313d3e484688b7852a7222041e4a76bd7b3ff986cd01a7a0b75e4d4fbec5ec26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313d3e484688b7852a7222041e4a76bd7b3ff986cd01a7a0b75e4d4fbec5ec26->enter($__internal_313d3e484688b7852a7222041e4a76bd7b3ff986cd01a7a0b75e4d4fbec5ec26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_0c4927b1d8eb8eebc721c8979887784ca036e5d1bac0a52376317fb6054aa196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4927b1d8eb8eebc721c8979887784ca036e5d1bac0a52376317fb6054aa196->enter($__internal_0c4927b1d8eb8eebc721c8979887784ca036e5d1bac0a52376317fb6054aa196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_313d3e484688b7852a7222041e4a76bd7b3ff986cd01a7a0b75e4d4fbec5ec26->leave($__internal_313d3e484688b7852a7222041e4a76bd7b3ff986cd01a7a0b75e4d4fbec5ec26_prof);

        
        $__internal_0c4927b1d8eb8eebc721c8979887784ca036e5d1bac0a52376317fb6054aa196->leave($__internal_0c4927b1d8eb8eebc721c8979887784ca036e5d1bac0a52376317fb6054aa196_prof);

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
