<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_34e99009582291607115d5764258520022d6b9db4f8973514c50e8eea510fcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d750e7d219edbc024352520346c3044c6b3711fcd27a3cc5340a07c98eee39ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d750e7d219edbc024352520346c3044c6b3711fcd27a3cc5340a07c98eee39ef->enter($__internal_d750e7d219edbc024352520346c3044c6b3711fcd27a3cc5340a07c98eee39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8be54c1928b9910695bc182da44c60b711d93eb57f74da93abe9f3ef3099a149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be54c1928b9910695bc182da44c60b711d93eb57f74da93abe9f3ef3099a149->enter($__internal_8be54c1928b9910695bc182da44c60b711d93eb57f74da93abe9f3ef3099a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d750e7d219edbc024352520346c3044c6b3711fcd27a3cc5340a07c98eee39ef->leave($__internal_d750e7d219edbc024352520346c3044c6b3711fcd27a3cc5340a07c98eee39ef_prof);

        
        $__internal_8be54c1928b9910695bc182da44c60b711d93eb57f74da93abe9f3ef3099a149->leave($__internal_8be54c1928b9910695bc182da44c60b711d93eb57f74da93abe9f3ef3099a149_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0ca3075c3607bc559f8f8b7ebb07c14c6248f851aad26d5458c547826ab56a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ca3075c3607bc559f8f8b7ebb07c14c6248f851aad26d5458c547826ab56a9->enter($__internal_c0ca3075c3607bc559f8f8b7ebb07c14c6248f851aad26d5458c547826ab56a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4922bbe03bf4de5bc6b5a7cb5667d95fd949ea23e78174e80fdf442d7249f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4922bbe03bf4de5bc6b5a7cb5667d95fd949ea23e78174e80fdf442d7249f7d->enter($__internal_a4922bbe03bf4de5bc6b5a7cb5667d95fd949ea23e78174e80fdf442d7249f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a4922bbe03bf4de5bc6b5a7cb5667d95fd949ea23e78174e80fdf442d7249f7d->leave($__internal_a4922bbe03bf4de5bc6b5a7cb5667d95fd949ea23e78174e80fdf442d7249f7d_prof);

        
        $__internal_c0ca3075c3607bc559f8f8b7ebb07c14c6248f851aad26d5458c547826ab56a9->leave($__internal_c0ca3075c3607bc559f8f8b7ebb07c14c6248f851aad26d5458c547826ab56a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
