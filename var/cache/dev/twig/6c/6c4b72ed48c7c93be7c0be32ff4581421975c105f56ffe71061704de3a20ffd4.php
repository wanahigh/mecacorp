<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_1cb32c82a8ed3898327590fb7988deff29d20fdbd59c2455a844d7e9a9ecf9ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_687790b622b0a58e6dd7a2becb0cda6436691cbd88c9bc747dda1bfd5ea95f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687790b622b0a58e6dd7a2becb0cda6436691cbd88c9bc747dda1bfd5ea95f0f->enter($__internal_687790b622b0a58e6dd7a2becb0cda6436691cbd88c9bc747dda1bfd5ea95f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_a664d6bf54079e0b4f2a85bd5fed2d53c1ed9efb262be2437315233c1de8e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a664d6bf54079e0b4f2a85bd5fed2d53c1ed9efb262be2437315233c1de8e872->enter($__internal_a664d6bf54079e0b4f2a85bd5fed2d53c1ed9efb262be2437315233c1de8e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_687790b622b0a58e6dd7a2becb0cda6436691cbd88c9bc747dda1bfd5ea95f0f->leave($__internal_687790b622b0a58e6dd7a2becb0cda6436691cbd88c9bc747dda1bfd5ea95f0f_prof);

        
        $__internal_a664d6bf54079e0b4f2a85bd5fed2d53c1ed9efb262be2437315233c1de8e872->leave($__internal_a664d6bf54079e0b4f2a85bd5fed2d53c1ed9efb262be2437315233c1de8e872_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_20bbca2322cc807b4fc8d07057b736441487b953015559ea07ccaf9ac90518da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bbca2322cc807b4fc8d07057b736441487b953015559ea07ccaf9ac90518da->enter($__internal_20bbca2322cc807b4fc8d07057b736441487b953015559ea07ccaf9ac90518da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8fcb43d2c99540807331f540b57a4beb219817bd0917808e04a86d78ce1fc32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcb43d2c99540807331f540b57a4beb219817bd0917808e04a86d78ce1fc32c->enter($__internal_8fcb43d2c99540807331f540b57a4beb219817bd0917808e04a86d78ce1fc32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_8fcb43d2c99540807331f540b57a4beb219817bd0917808e04a86d78ce1fc32c->leave($__internal_8fcb43d2c99540807331f540b57a4beb219817bd0917808e04a86d78ce1fc32c_prof);

        
        $__internal_20bbca2322cc807b4fc8d07057b736441487b953015559ea07ccaf9ac90518da->leave($__internal_20bbca2322cc807b4fc8d07057b736441487b953015559ea07ccaf9ac90518da_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_cc86cb893a3270b3abf08cabddf0206bd1fbef398a3d6c185949693d0f905071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc86cb893a3270b3abf08cabddf0206bd1fbef398a3d6c185949693d0f905071->enter($__internal_cc86cb893a3270b3abf08cabddf0206bd1fbef398a3d6c185949693d0f905071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a74ec26140dca6688fb4a2710a7e2acc35c87e4c71962501c37458b40bfa4e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74ec26140dca6688fb4a2710a7e2acc35c87e4c71962501c37458b40bfa4e5a->enter($__internal_a74ec26140dca6688fb4a2710a7e2acc35c87e4c71962501c37458b40bfa4e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_a74ec26140dca6688fb4a2710a7e2acc35c87e4c71962501c37458b40bfa4e5a->leave($__internal_a74ec26140dca6688fb4a2710a7e2acc35c87e4c71962501c37458b40bfa4e5a_prof);

        
        $__internal_cc86cb893a3270b3abf08cabddf0206bd1fbef398a3d6c185949693d0f905071->leave($__internal_cc86cb893a3270b3abf08cabddf0206bd1fbef398a3d6c185949693d0f905071_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d189e1ce7e48d21ce2972d9b4b49684910a3c474abe1fb9d109c74a96a1f576e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d189e1ce7e48d21ce2972d9b4b49684910a3c474abe1fb9d109c74a96a1f576e->enter($__internal_d189e1ce7e48d21ce2972d9b4b49684910a3c474abe1fb9d109c74a96a1f576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_580bdb7de6573d0ba3881e4a8e963997677c51ce74121db8cebea919de74d3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580bdb7de6573d0ba3881e4a8e963997677c51ce74121db8cebea919de74d3b5->enter($__internal_580bdb7de6573d0ba3881e4a8e963997677c51ce74121db8cebea919de74d3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "publicMessage", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_580bdb7de6573d0ba3881e4a8e963997677c51ce74121db8cebea919de74d3b5->leave($__internal_580bdb7de6573d0ba3881e4a8e963997677c51ce74121db8cebea919de74d3b5_prof);

        
        $__internal_d189e1ce7e48d21ce2972d9b4b49684910a3c474abe1fb9d109c74a96a1f576e->leave($__internal_d189e1ce7e48d21ce2972d9b4b49684910a3c474abe1fb9d109c74a96a1f576e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
