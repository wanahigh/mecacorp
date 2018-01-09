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
        $__internal_8d709cd3d29ed18cf58eb18853e130f4c9118827199ad30c8e7f243a65284ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d709cd3d29ed18cf58eb18853e130f4c9118827199ad30c8e7f243a65284ce4->enter($__internal_8d709cd3d29ed18cf58eb18853e130f4c9118827199ad30c8e7f243a65284ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_cb03c43b7d9dd44890e51817c22887fa1e137f7ad9f5e3cedbb2498f649534a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb03c43b7d9dd44890e51817c22887fa1e137f7ad9f5e3cedbb2498f649534a2->enter($__internal_cb03c43b7d9dd44890e51817c22887fa1e137f7ad9f5e3cedbb2498f649534a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d709cd3d29ed18cf58eb18853e130f4c9118827199ad30c8e7f243a65284ce4->leave($__internal_8d709cd3d29ed18cf58eb18853e130f4c9118827199ad30c8e7f243a65284ce4_prof);

        
        $__internal_cb03c43b7d9dd44890e51817c22887fa1e137f7ad9f5e3cedbb2498f649534a2->leave($__internal_cb03c43b7d9dd44890e51817c22887fa1e137f7ad9f5e3cedbb2498f649534a2_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f4d05e2b463164ff24e8465e5a4a2dd18f7968787ac545265a9683407ddaf573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d05e2b463164ff24e8465e5a4a2dd18f7968787ac545265a9683407ddaf573->enter($__internal_f4d05e2b463164ff24e8465e5a4a2dd18f7968787ac545265a9683407ddaf573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8fb4790fe38a5021071d3de141c2cdc52fe6d11a13d7eb7d1133a4bad469da0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb4790fe38a5021071d3de141c2cdc52fe6d11a13d7eb7d1133a4bad469da0c->enter($__internal_8fb4790fe38a5021071d3de141c2cdc52fe6d11a13d7eb7d1133a4bad469da0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_8fb4790fe38a5021071d3de141c2cdc52fe6d11a13d7eb7d1133a4bad469da0c->leave($__internal_8fb4790fe38a5021071d3de141c2cdc52fe6d11a13d7eb7d1133a4bad469da0c_prof);

        
        $__internal_f4d05e2b463164ff24e8465e5a4a2dd18f7968787ac545265a9683407ddaf573->leave($__internal_f4d05e2b463164ff24e8465e5a4a2dd18f7968787ac545265a9683407ddaf573_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a2c91daab01087e02fb57e74bb29d1bebc3c30499a16e4c8b7216bc1ad32b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2c91daab01087e02fb57e74bb29d1bebc3c30499a16e4c8b7216bc1ad32b46->enter($__internal_2a2c91daab01087e02fb57e74bb29d1bebc3c30499a16e4c8b7216bc1ad32b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_0c28d6271d7a8830d20f0a45bb48e5bdf61c2c9567f65395fdf5a06e29e27799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c28d6271d7a8830d20f0a45bb48e5bdf61c2c9567f65395fdf5a06e29e27799->enter($__internal_0c28d6271d7a8830d20f0a45bb48e5bdf61c2c9567f65395fdf5a06e29e27799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_0c28d6271d7a8830d20f0a45bb48e5bdf61c2c9567f65395fdf5a06e29e27799->leave($__internal_0c28d6271d7a8830d20f0a45bb48e5bdf61c2c9567f65395fdf5a06e29e27799_prof);

        
        $__internal_2a2c91daab01087e02fb57e74bb29d1bebc3c30499a16e4c8b7216bc1ad32b46->leave($__internal_2a2c91daab01087e02fb57e74bb29d1bebc3c30499a16e4c8b7216bc1ad32b46_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_819a461079c54e7e3e0950a85b589be01dd6641faf0aa330355003583943fef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819a461079c54e7e3e0950a85b589be01dd6641faf0aa330355003583943fef1->enter($__internal_819a461079c54e7e3e0950a85b589be01dd6641faf0aa330355003583943fef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b8fe683d98350006a7c0e6e2ac489b5e08de205f95fa6446d8d7da60c85fe720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fe683d98350006a7c0e6e2ac489b5e08de205f95fa6446d8d7da60c85fe720->enter($__internal_b8fe683d98350006a7c0e6e2ac489b5e08de205f95fa6446d8d7da60c85fe720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b8fe683d98350006a7c0e6e2ac489b5e08de205f95fa6446d8d7da60c85fe720->leave($__internal_b8fe683d98350006a7c0e6e2ac489b5e08de205f95fa6446d8d7da60c85fe720_prof);

        
        $__internal_819a461079c54e7e3e0950a85b589be01dd6641faf0aa330355003583943fef1->leave($__internal_819a461079c54e7e3e0950a85b589be01dd6641faf0aa330355003583943fef1_prof);

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
", "EasyAdminBundle:default:exception.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
