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
        $__internal_4d68a0641db1aedafca35ff641d71b10d7bd79acf824bab081c8d9334ff4391e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d68a0641db1aedafca35ff641d71b10d7bd79acf824bab081c8d9334ff4391e->enter($__internal_4d68a0641db1aedafca35ff641d71b10d7bd79acf824bab081c8d9334ff4391e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_04b0f364553778dd6eed4d7fcab22e160b95853cffbb479382a57622611643f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b0f364553778dd6eed4d7fcab22e160b95853cffbb479382a57622611643f8->enter($__internal_04b0f364553778dd6eed4d7fcab22e160b95853cffbb479382a57622611643f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_4d68a0641db1aedafca35ff641d71b10d7bd79acf824bab081c8d9334ff4391e->leave($__internal_4d68a0641db1aedafca35ff641d71b10d7bd79acf824bab081c8d9334ff4391e_prof);

        
        $__internal_04b0f364553778dd6eed4d7fcab22e160b95853cffbb479382a57622611643f8->leave($__internal_04b0f364553778dd6eed4d7fcab22e160b95853cffbb479382a57622611643f8_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}