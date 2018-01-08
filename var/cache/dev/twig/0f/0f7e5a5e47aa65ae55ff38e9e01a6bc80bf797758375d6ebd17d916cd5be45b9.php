<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4f6bd73c70d5b65f2d76616a4f2b5172a0235f88827707beaeaf1b941624ef81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_4133319557a17632c702e6adf3a5806d2fddba6320d25ed4f3a0200818e905e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4133319557a17632c702e6adf3a5806d2fddba6320d25ed4f3a0200818e905e9->enter($__internal_4133319557a17632c702e6adf3a5806d2fddba6320d25ed4f3a0200818e905e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ce0fe91abbb8c070aa85d14e966cdc22c49d6a9dbf8d7536ede7febd2fff09ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0fe91abbb8c070aa85d14e966cdc22c49d6a9dbf8d7536ede7febd2fff09ff->enter($__internal_ce0fe91abbb8c070aa85d14e966cdc22c49d6a9dbf8d7536ede7febd2fff09ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4133319557a17632c702e6adf3a5806d2fddba6320d25ed4f3a0200818e905e9->leave($__internal_4133319557a17632c702e6adf3a5806d2fddba6320d25ed4f3a0200818e905e9_prof);

        
        $__internal_ce0fe91abbb8c070aa85d14e966cdc22c49d6a9dbf8d7536ede7febd2fff09ff->leave($__internal_ce0fe91abbb8c070aa85d14e966cdc22c49d6a9dbf8d7536ede7febd2fff09ff_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a5d5ecf588a2375f7fb0b9693df3ff7e35d0db1605321ae95f400286466e228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d5ecf588a2375f7fb0b9693df3ff7e35d0db1605321ae95f400286466e228->enter($__internal_7a5d5ecf588a2375f7fb0b9693df3ff7e35d0db1605321ae95f400286466e228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38fc101c8bea50963b22adfe83c5a6db6e08d47042f6b094d0e37d43b9366af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fc101c8bea50963b22adfe83c5a6db6e08d47042f6b094d0e37d43b9366af0->enter($__internal_38fc101c8bea50963b22adfe83c5a6db6e08d47042f6b094d0e37d43b9366af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_38fc101c8bea50963b22adfe83c5a6db6e08d47042f6b094d0e37d43b9366af0->leave($__internal_38fc101c8bea50963b22adfe83c5a6db6e08d47042f6b094d0e37d43b9366af0_prof);

        
        $__internal_7a5d5ecf588a2375f7fb0b9693df3ff7e35d0db1605321ae95f400286466e228->leave($__internal_7a5d5ecf588a2375f7fb0b9693df3ff7e35d0db1605321ae95f400286466e228_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
