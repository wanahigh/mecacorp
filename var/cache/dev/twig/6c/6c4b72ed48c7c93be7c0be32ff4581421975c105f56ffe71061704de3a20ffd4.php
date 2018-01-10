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
        $__internal_96befd017d17bd2188941027f67d564d692e0f2ca85959bb4da6e3db7407d998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96befd017d17bd2188941027f67d564d692e0f2ca85959bb4da6e3db7407d998->enter($__internal_96befd017d17bd2188941027f67d564d692e0f2ca85959bb4da6e3db7407d998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_1161fbf30cc1ce5b11e279ede3ad1a7d5077b6980ea8961b1caa90aa66142999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1161fbf30cc1ce5b11e279ede3ad1a7d5077b6980ea8961b1caa90aa66142999->enter($__internal_1161fbf30cc1ce5b11e279ede3ad1a7d5077b6980ea8961b1caa90aa66142999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96befd017d17bd2188941027f67d564d692e0f2ca85959bb4da6e3db7407d998->leave($__internal_96befd017d17bd2188941027f67d564d692e0f2ca85959bb4da6e3db7407d998_prof);

        
        $__internal_1161fbf30cc1ce5b11e279ede3ad1a7d5077b6980ea8961b1caa90aa66142999->leave($__internal_1161fbf30cc1ce5b11e279ede3ad1a7d5077b6980ea8961b1caa90aa66142999_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4e86caa3b793a45ed7305919efd1dea87546cc27a4dafeda8701fcd17ad83ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e86caa3b793a45ed7305919efd1dea87546cc27a4dafeda8701fcd17ad83ec2->enter($__internal_4e86caa3b793a45ed7305919efd1dea87546cc27a4dafeda8701fcd17ad83ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_32fcc8ffa18a93742e1b65cc389bc86f304a4c6807880138daf1c6ffe7025d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fcc8ffa18a93742e1b65cc389bc86f304a4c6807880138daf1c6ffe7025d30->enter($__internal_32fcc8ffa18a93742e1b65cc389bc86f304a4c6807880138daf1c6ffe7025d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_32fcc8ffa18a93742e1b65cc389bc86f304a4c6807880138daf1c6ffe7025d30->leave($__internal_32fcc8ffa18a93742e1b65cc389bc86f304a4c6807880138daf1c6ffe7025d30_prof);

        
        $__internal_4e86caa3b793a45ed7305919efd1dea87546cc27a4dafeda8701fcd17ad83ec2->leave($__internal_4e86caa3b793a45ed7305919efd1dea87546cc27a4dafeda8701fcd17ad83ec2_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8ba228dd03ebb658d37683aa58c2553aa0e9e1f90c4fd2fc66317a6513852fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba228dd03ebb658d37683aa58c2553aa0e9e1f90c4fd2fc66317a6513852fed->enter($__internal_8ba228dd03ebb658d37683aa58c2553aa0e9e1f90c4fd2fc66317a6513852fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a41631f400d9e04840ac0317a6a8ecd2b279b80fec539ea243367f1ff720482a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41631f400d9e04840ac0317a6a8ecd2b279b80fec539ea243367f1ff720482a->enter($__internal_a41631f400d9e04840ac0317a6a8ecd2b279b80fec539ea243367f1ff720482a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_a41631f400d9e04840ac0317a6a8ecd2b279b80fec539ea243367f1ff720482a->leave($__internal_a41631f400d9e04840ac0317a6a8ecd2b279b80fec539ea243367f1ff720482a_prof);

        
        $__internal_8ba228dd03ebb658d37683aa58c2553aa0e9e1f90c4fd2fc66317a6513852fed->leave($__internal_8ba228dd03ebb658d37683aa58c2553aa0e9e1f90c4fd2fc66317a6513852fed_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9f8032b0aec63c148dc59097a51806917044359851cc4e4d384fa576da9a532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f8032b0aec63c148dc59097a51806917044359851cc4e4d384fa576da9a532->enter($__internal_c9f8032b0aec63c148dc59097a51806917044359851cc4e4d384fa576da9a532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8c2ec5fff926e110578e49c5c83c4f9b98acd2b0ed31ff2c0daafe46ec8df163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2ec5fff926e110578e49c5c83c4f9b98acd2b0ed31ff2c0daafe46ec8df163->enter($__internal_8c2ec5fff926e110578e49c5c83c4f9b98acd2b0ed31ff2c0daafe46ec8df163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8c2ec5fff926e110578e49c5c83c4f9b98acd2b0ed31ff2c0daafe46ec8df163->leave($__internal_8c2ec5fff926e110578e49c5c83c4f9b98acd2b0ed31ff2c0daafe46ec8df163_prof);

        
        $__internal_c9f8032b0aec63c148dc59097a51806917044359851cc4e4d384fa576da9a532->leave($__internal_c9f8032b0aec63c148dc59097a51806917044359851cc4e4d384fa576da9a532_prof);

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
