<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2780448b4b95799c267a6858931371062e29749910f2f2d0f10254f39ada5c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57b46bc9514c04e956158011e54d244c22d64a399b6f0c4c7dcf580ff82a8178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b46bc9514c04e956158011e54d244c22d64a399b6f0c4c7dcf580ff82a8178->enter($__internal_57b46bc9514c04e956158011e54d244c22d64a399b6f0c4c7dcf580ff82a8178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_319efdfb88598820d432e8b6e9b2e0543e001839b87d8912185a1d7721275432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319efdfb88598820d432e8b6e9b2e0543e001839b87d8912185a1d7721275432->enter($__internal_319efdfb88598820d432e8b6e9b2e0543e001839b87d8912185a1d7721275432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b46bc9514c04e956158011e54d244c22d64a399b6f0c4c7dcf580ff82a8178->leave($__internal_57b46bc9514c04e956158011e54d244c22d64a399b6f0c4c7dcf580ff82a8178_prof);

        
        $__internal_319efdfb88598820d432e8b6e9b2e0543e001839b87d8912185a1d7721275432->leave($__internal_319efdfb88598820d432e8b6e9b2e0543e001839b87d8912185a1d7721275432_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f3c4f88d1c60508fac2ebf80e4cfa1430043e2a973530447c638b4cdbccb8ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c4f88d1c60508fac2ebf80e4cfa1430043e2a973530447c638b4cdbccb8ecb->enter($__internal_f3c4f88d1c60508fac2ebf80e4cfa1430043e2a973530447c638b4cdbccb8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0876f2c7119d276f40df2595b475845ca0c64598e0e31d8629fa43b24079d313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0876f2c7119d276f40df2595b475845ca0c64598e0e31d8629fa43b24079d313->enter($__internal_0876f2c7119d276f40df2595b475845ca0c64598e0e31d8629fa43b24079d313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0876f2c7119d276f40df2595b475845ca0c64598e0e31d8629fa43b24079d313->leave($__internal_0876f2c7119d276f40df2595b475845ca0c64598e0e31d8629fa43b24079d313_prof);

        
        $__internal_f3c4f88d1c60508fac2ebf80e4cfa1430043e2a973530447c638b4cdbccb8ecb->leave($__internal_f3c4f88d1c60508fac2ebf80e4cfa1430043e2a973530447c638b4cdbccb8ecb_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dab5ef9fc79d4155b1661f2e43792afefe6a317fb3be94267991a5592f9f143a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab5ef9fc79d4155b1661f2e43792afefe6a317fb3be94267991a5592f9f143a->enter($__internal_dab5ef9fc79d4155b1661f2e43792afefe6a317fb3be94267991a5592f9f143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2636b6ebf4d7840ced5682517aac61318f8e533a0d363b2979650ca120e05067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2636b6ebf4d7840ced5682517aac61318f8e533a0d363b2979650ca120e05067->enter($__internal_2636b6ebf4d7840ced5682517aac61318f8e533a0d363b2979650ca120e05067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2636b6ebf4d7840ced5682517aac61318f8e533a0d363b2979650ca120e05067->leave($__internal_2636b6ebf4d7840ced5682517aac61318f8e533a0d363b2979650ca120e05067_prof);

        
        $__internal_dab5ef9fc79d4155b1661f2e43792afefe6a317fb3be94267991a5592f9f143a->leave($__internal_dab5ef9fc79d4155b1661f2e43792afefe6a317fb3be94267991a5592f9f143a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
