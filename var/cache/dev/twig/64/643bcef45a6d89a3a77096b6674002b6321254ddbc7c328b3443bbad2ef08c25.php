<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_7c26a4760af57f29266d93bcbb634a10d70252b29d99d63493adfc1d33601c8e extends Twig_Template
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
        $__internal_5f0b4c1b8a14941f81e2855579b276afcb21b4f1b0f3c19eb8dc9e2470faefac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0b4c1b8a14941f81e2855579b276afcb21b4f1b0f3c19eb8dc9e2470faefac->enter($__internal_5f0b4c1b8a14941f81e2855579b276afcb21b4f1b0f3c19eb8dc9e2470faefac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_15a596cac49eb8f2068e3aac710cacb8907a3f69d4982329281485e7517983cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a596cac49eb8f2068e3aac710cacb8907a3f69d4982329281485e7517983cf->enter($__internal_15a596cac49eb8f2068e3aac710cacb8907a3f69d4982329281485e7517983cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "










    ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "
<form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
<div class=\"login-container\">

    <div class=\"row\">
        <div class=\"col s10 m6 l3 offset-l5 offset-s1  offset-m3\">
            <div class=\"card z-depth-2\">
                <div class=\"card-header\">
                    <img  src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/logo-filiere-spmeca-01.png"), "html", null, true);
        echo "\" alt=\"\">

                </div>
                <div class=\"card-content\">
                    <form action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"input-field\">
                                <i class=\"material-icons prefix\">account_circle</i>
                                <label for=\"username\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pseudo", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field\">
                                <i class=\"material-icons prefix\">lock_outline</i>
                                <label for=\"password\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"row\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>
                        <div class=\"row\">
                            ";
        // line 48
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 48, $this->getSourceContext()); })())) {
            // line 49
            echo "                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                            ";
        }
        // line 51
        echo "                            <button class=\"btn-large pink\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Envoyer", array(), "FOSUserBundle"), "html", null, true);
        echo "\" ><i class=\"material-icons\">send</i></button>

                        </div>
                    </form>
                </div>
                <div class=\"card-action\">
                    <a href=\"/register\">SIGN UP</a>
                    <a href=\"#\">FORGOT PASSWORD</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        height: 100%;
        width: 100%;
        display: table;

    }

    .login-container {
        display: table-cell;
        vertical-align: middle;

    }

    .login-container {
        width: 20%;
        margin: 0 auto;
    }

    .card-header{

        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

</style>
";
        
        $__internal_5f0b4c1b8a14941f81e2855579b276afcb21b4f1b0f3c19eb8dc9e2470faefac->leave($__internal_5f0b4c1b8a14941f81e2855579b276afcb21b4f1b0f3c19eb8dc9e2470faefac_prof);

        
        $__internal_15a596cac49eb8f2068e3aac710cacb8907a3f69d4982329281485e7517983cf->leave($__internal_15a596cac49eb8f2068e3aac710cacb8907a3f69d4982329281485e7517983cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  100 => 49,  98 => 48,  92 => 45,  83 => 39,  74 => 33,  70 => 32,  59 => 24,  49 => 17,  46 => 16,  40 => 14,  38 => 13,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}











    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
<div class=\"login-container\">

    <div class=\"row\">
        <div class=\"col s10 m6 l3 offset-l5 offset-s1  offset-m3\">
            <div class=\"card z-depth-2\">
                <div class=\"card-header\">
                    <img  src=\"{{ asset('../../../images/logo-filiere-spmeca-01.png') }}\" alt=\"\">

                </div>
                <div class=\"card-content\">
                    <form action=\"\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"input-field\">
                                <i class=\"material-icons prefix\">account_circle</i>
                                <label for=\"username\">{{ 'Pseudo'|trans }}</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field\">
                                <i class=\"material-icons prefix\">lock_outline</i>
                                <label for=\"password\">{{ 'Password'|trans }}</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            </div>
                        </div>
                        <div class=\"row\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'remember me'|trans }}</label>
                        </div>
                        <div class=\"row\">
                            {% if csrf_token %}
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            {% endif %}
                            <button class=\"btn-large pink\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Envoyer'|trans }}\" ><i class=\"material-icons\">send</i></button>

                        </div>
                    </form>
                </div>
                <div class=\"card-action\">
                    <a href=\"/register\">SIGN UP</a>
                    <a href=\"#\">FORGOT PASSWORD</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        height: 100%;
        width: 100%;
        display: table;

    }

    .login-container {
        display: table-cell;
        vertical-align: middle;

    }

    .login-container {
        width: 20%;
        margin: 0 auto;
    }

    .card-header{

        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

</style>
", "@FOSUser/Security/login_content.html.twig", "/home/fabien/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
