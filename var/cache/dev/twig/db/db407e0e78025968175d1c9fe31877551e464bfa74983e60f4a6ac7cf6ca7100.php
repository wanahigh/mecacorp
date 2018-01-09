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
        $__internal_ed3fbecdb0b14218ea3b4f935e55c3f0de111c81154b4cbcfab7901a9dbca9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3fbecdb0b14218ea3b4f935e55c3f0de111c81154b4cbcfab7901a9dbca9f0->enter($__internal_ed3fbecdb0b14218ea3b4f935e55c3f0de111c81154b4cbcfab7901a9dbca9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_630cd887289a7ba4348a3c055de662709d16c0b9403c089de8f6854a89cc215e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630cd887289a7ba4348a3c055de662709d16c0b9403c089de8f6854a89cc215e->enter($__internal_630cd887289a7ba4348a3c055de662709d16c0b9403c089de8f6854a89cc215e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3fbecdb0b14218ea3b4f935e55c3f0de111c81154b4cbcfab7901a9dbca9f0->leave($__internal_ed3fbecdb0b14218ea3b4f935e55c3f0de111c81154b4cbcfab7901a9dbca9f0_prof);

        
        $__internal_630cd887289a7ba4348a3c055de662709d16c0b9403c089de8f6854a89cc215e->leave($__internal_630cd887289a7ba4348a3c055de662709d16c0b9403c089de8f6854a89cc215e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00e0aff6c6fde2e8802ca1ec2ae5229871443bb1f99e9664e1b8280f704e88bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e0aff6c6fde2e8802ca1ec2ae5229871443bb1f99e9664e1b8280f704e88bc->enter($__internal_00e0aff6c6fde2e8802ca1ec2ae5229871443bb1f99e9664e1b8280f704e88bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_66b5acb012caf6b0d7cd23553177ca2a6eded11dbf800329a9b85602b0d9d286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b5acb012caf6b0d7cd23553177ca2a6eded11dbf800329a9b85602b0d9d286->enter($__internal_66b5acb012caf6b0d7cd23553177ca2a6eded11dbf800329a9b85602b0d9d286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_66b5acb012caf6b0d7cd23553177ca2a6eded11dbf800329a9b85602b0d9d286->leave($__internal_66b5acb012caf6b0d7cd23553177ca2a6eded11dbf800329a9b85602b0d9d286_prof);

        
        $__internal_00e0aff6c6fde2e8802ca1ec2ae5229871443bb1f99e9664e1b8280f704e88bc->leave($__internal_00e0aff6c6fde2e8802ca1ec2ae5229871443bb1f99e9664e1b8280f704e88bc_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
