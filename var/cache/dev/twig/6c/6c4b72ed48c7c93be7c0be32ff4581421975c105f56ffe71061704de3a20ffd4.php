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
        $__internal_59c635a963f92db00c4ac4b5e94909fa9694171732a4f6d0761993d9978f6e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c635a963f92db00c4ac4b5e94909fa9694171732a4f6d0761993d9978f6e54->enter($__internal_59c635a963f92db00c4ac4b5e94909fa9694171732a4f6d0761993d9978f6e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_55f4c74e7be3adfb25e46f42596312b1afb65864f70a0f1cf7febd686cd96a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f4c74e7be3adfb25e46f42596312b1afb65864f70a0f1cf7febd686cd96a3a->enter($__internal_55f4c74e7be3adfb25e46f42596312b1afb65864f70a0f1cf7febd686cd96a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59c635a963f92db00c4ac4b5e94909fa9694171732a4f6d0761993d9978f6e54->leave($__internal_59c635a963f92db00c4ac4b5e94909fa9694171732a4f6d0761993d9978f6e54_prof);

        
        $__internal_55f4c74e7be3adfb25e46f42596312b1afb65864f70a0f1cf7febd686cd96a3a->leave($__internal_55f4c74e7be3adfb25e46f42596312b1afb65864f70a0f1cf7febd686cd96a3a_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d8a29e97a237c338350e6476523d592175b18e847ed97eb21eb05e260c9cf51c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a29e97a237c338350e6476523d592175b18e847ed97eb21eb05e260c9cf51c->enter($__internal_d8a29e97a237c338350e6476523d592175b18e847ed97eb21eb05e260c9cf51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_bdac46c272bece9d779f8f3b852aa1e82d5312e88916b04e2f96ba9cdfc41fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdac46c272bece9d779f8f3b852aa1e82d5312e88916b04e2f96ba9cdfc41fbe->enter($__internal_bdac46c272bece9d779f8f3b852aa1e82d5312e88916b04e2f96ba9cdfc41fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_bdac46c272bece9d779f8f3b852aa1e82d5312e88916b04e2f96ba9cdfc41fbe->leave($__internal_bdac46c272bece9d779f8f3b852aa1e82d5312e88916b04e2f96ba9cdfc41fbe_prof);

        
        $__internal_d8a29e97a237c338350e6476523d592175b18e847ed97eb21eb05e260c9cf51c->leave($__internal_d8a29e97a237c338350e6476523d592175b18e847ed97eb21eb05e260c9cf51c_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_bbc4f27566a98a795c4c4c39a54b74da0efcabe135b992e6e9635bece6ef660b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc4f27566a98a795c4c4c39a54b74da0efcabe135b992e6e9635bece6ef660b->enter($__internal_bbc4f27566a98a795c4c4c39a54b74da0efcabe135b992e6e9635bece6ef660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_de7324dfc5dbb8204545c03ac2c2d8ed1f1a4a68bf0d7b1fd719720a59f3b93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7324dfc5dbb8204545c03ac2c2d8ed1f1a4a68bf0d7b1fd719720a59f3b93d->enter($__internal_de7324dfc5dbb8204545c03ac2c2d8ed1f1a4a68bf0d7b1fd719720a59f3b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_de7324dfc5dbb8204545c03ac2c2d8ed1f1a4a68bf0d7b1fd719720a59f3b93d->leave($__internal_de7324dfc5dbb8204545c03ac2c2d8ed1f1a4a68bf0d7b1fd719720a59f3b93d_prof);

        
        $__internal_bbc4f27566a98a795c4c4c39a54b74da0efcabe135b992e6e9635bece6ef660b->leave($__internal_bbc4f27566a98a795c4c4c39a54b74da0efcabe135b992e6e9635bece6ef660b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e76071ba51ce59417071eb1039c9c29ce5567482b5221ccc5101d7ee2548f232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76071ba51ce59417071eb1039c9c29ce5567482b5221ccc5101d7ee2548f232->enter($__internal_e76071ba51ce59417071eb1039c9c29ce5567482b5221ccc5101d7ee2548f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_23255749aca5121d67fbc08a8d9bc0a01fa5237cb49077a01241cd60c17fb365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23255749aca5121d67fbc08a8d9bc0a01fa5237cb49077a01241cd60c17fb365->enter($__internal_23255749aca5121d67fbc08a8d9bc0a01fa5237cb49077a01241cd60c17fb365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_23255749aca5121d67fbc08a8d9bc0a01fa5237cb49077a01241cd60c17fb365->leave($__internal_23255749aca5121d67fbc08a8d9bc0a01fa5237cb49077a01241cd60c17fb365_prof);

        
        $__internal_e76071ba51ce59417071eb1039c9c29ce5567482b5221ccc5101d7ee2548f232->leave($__internal_e76071ba51ce59417071eb1039c9c29ce5567482b5221ccc5101d7ee2548f232_prof);

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
", "EasyAdminBundle:default:exception.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
