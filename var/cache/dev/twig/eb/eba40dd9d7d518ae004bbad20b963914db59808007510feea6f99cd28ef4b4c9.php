<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_2e2f5d2617fdcbca73da4ba5917a9ad3d5f2b3c4faa57d28dd4f11a510d646a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747f896147feda259d2f080436d4ba22f0b24ec28accf50a89a813cc0da9ef86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747f896147feda259d2f080436d4ba22f0b24ec28accf50a89a813cc0da9ef86->enter($__internal_747f896147feda259d2f080436d4ba22f0b24ec28accf50a89a813cc0da9ef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_055db1328897d1d13f42060658cfecaaf1f0d3bcdf138e509c5d157b10c6cc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055db1328897d1d13f42060658cfecaaf1f0d3bcdf138e509c5d157b10c6cc9f->enter($__internal_055db1328897d1d13f42060658cfecaaf1f0d3bcdf138e509c5d157b10c6cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"]) || array_key_exists("__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c", $context) ? $context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"]) || array_key_exists("__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c", $context) ? $context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747f896147feda259d2f080436d4ba22f0b24ec28accf50a89a813cc0da9ef86->leave($__internal_747f896147feda259d2f080436d4ba22f0b24ec28accf50a89a813cc0da9ef86_prof);

        
        $__internal_055db1328897d1d13f42060658cfecaaf1f0d3bcdf138e509c5d157b10c6cc9f->leave($__internal_055db1328897d1d13f42060658cfecaaf1f0d3bcdf138e509c5d157b10c6cc9f_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5299cf16295f3a9f8a7fdbd590fcb138ad520c00a526a8ffa0d6c7748043ca0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5299cf16295f3a9f8a7fdbd590fcb138ad520c00a526a8ffa0d6c7748043ca0d->enter($__internal_5299cf16295f3a9f8a7fdbd590fcb138ad520c00a526a8ffa0d6c7748043ca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_2f6b2eec9cbbb3673c3cbe1d35e359a17f7062b308b1f452d932e4a4001d1907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6b2eec9cbbb3673c3cbe1d35e359a17f7062b308b1f452d932e4a4001d1907->enter($__internal_2f6b2eec9cbbb3673c3cbe1d35e359a17f7062b308b1f452d932e4a4001d1907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_2f6b2eec9cbbb3673c3cbe1d35e359a17f7062b308b1f452d932e4a4001d1907->leave($__internal_2f6b2eec9cbbb3673c3cbe1d35e359a17f7062b308b1f452d932e4a4001d1907_prof);

        
        $__internal_5299cf16295f3a9f8a7fdbd590fcb138ad520c00a526a8ffa0d6c7748043ca0d->leave($__internal_5299cf16295f3a9f8a7fdbd590fcb138ad520c00a526a8ffa0d6c7748043ca0d_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b615589dd517fbd25f237c3b499ad837a2c89efd46fc52e4f7f0032c9bd20493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b615589dd517fbd25f237c3b499ad837a2c89efd46fc52e4f7f0032c9bd20493->enter($__internal_b615589dd517fbd25f237c3b499ad837a2c89efd46fc52e4f7f0032c9bd20493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6a4b043680572639364944225018b5e275e688a68ba974856289acb6e2b7e1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b043680572639364944225018b5e275e688a68ba974856289acb6e2b7e1a2->enter($__internal_6a4b043680572639364944225018b5e275e688a68ba974856289acb6e2b7e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_6a4b043680572639364944225018b5e275e688a68ba974856289acb6e2b7e1a2->leave($__internal_6a4b043680572639364944225018b5e275e688a68ba974856289acb6e2b7e1a2_prof);

        
        $__internal_b615589dd517fbd25f237c3b499ad837a2c89efd46fc52e4f7f0032c9bd20493->leave($__internal_b615589dd517fbd25f237c3b499ad837a2c89efd46fc52e4f7f0032c9bd20493_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7458e0128da7bf7d97d29557ca8a2f428772603d6efa27f1ee319cac1ad4620d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7458e0128da7bf7d97d29557ca8a2f428772603d6efa27f1ee319cac1ad4620d->enter($__internal_7458e0128da7bf7d97d29557ca8a2f428772603d6efa27f1ee319cac1ad4620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_310bd5f58b13a8bacae5c384a36d09f1ae387f2ff71e3fcaec8edc8028f08aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310bd5f58b13a8bacae5c384a36d09f1ae387f2ff71e3fcaec8edc8028f08aac->enter($__internal_310bd5f58b13a8bacae5c384a36d09f1ae387f2ff71e3fcaec8edc8028f08aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"]) || array_key_exists("__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c", $context) ? $context["__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_13cc9b6441f91de31fc00e0791788cc490466250872273342ce9f6b2af749a1c" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_310bd5f58b13a8bacae5c384a36d09f1ae387f2ff71e3fcaec8edc8028f08aac->leave($__internal_310bd5f58b13a8bacae5c384a36d09f1ae387f2ff71e3fcaec8edc8028f08aac_prof);

        
        $__internal_7458e0128da7bf7d97d29557ca8a2f428772603d6efa27f1ee319cac1ad4620d->leave($__internal_7458e0128da7bf7d97d29557ca8a2f428772603d6efa27f1ee319cac1ad4620d_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_ef998332d9fb3ff10da986bb82bd0b6034833b0f36efcc51804d28270546182d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef998332d9fb3ff10da986bb82bd0b6034833b0f36efcc51804d28270546182d->enter($__internal_ef998332d9fb3ff10da986bb82bd0b6034833b0f36efcc51804d28270546182d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_e7e3b955ac0e835787934fdb8c5e4b65bffe8f7d4f5ffb1836b49f416a7370cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e3b955ac0e835787934fdb8c5e4b65bffe8f7d4f5ffb1836b49f416a7370cb->enter($__internal_e7e3b955ac0e835787934fdb8c5e4b65bffe8f7d4f5ffb1836b49f416a7370cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_e7e3b955ac0e835787934fdb8c5e4b65bffe8f7d4f5ffb1836b49f416a7370cb->leave($__internal_e7e3b955ac0e835787934fdb8c5e4b65bffe8f7d4f5ffb1836b49f416a7370cb_prof);

        
        $__internal_ef998332d9fb3ff10da986bb82bd0b6034833b0f36efcc51804d28270546182d->leave($__internal_ef998332d9fb3ff10da986bb82bd0b6034833b0f36efcc51804d28270546182d_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1754cc2cac0b5dea8d9e5e23237c803d946c9773ec670dc60de9eae16a594fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1754cc2cac0b5dea8d9e5e23237c803d946c9773ec670dc60de9eae16a594fb0->enter($__internal_1754cc2cac0b5dea8d9e5e23237c803d946c9773ec670dc60de9eae16a594fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_ce176b6b60ef099af6eabea6d3716e0eccf7044ea1cd2133682631b2efd7d734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce176b6b60ef099af6eabea6d3716e0eccf7044ea1cd2133682631b2efd7d734->enter($__internal_ce176b6b60ef099af6eabea6d3716e0eccf7044ea1cd2133682631b2efd7d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_ce176b6b60ef099af6eabea6d3716e0eccf7044ea1cd2133682631b2efd7d734->leave($__internal_ce176b6b60ef099af6eabea6d3716e0eccf7044ea1cd2133682631b2efd7d734_prof);

        
        $__internal_1754cc2cac0b5dea8d9e5e23237c803d946c9773ec670dc60de9eae16a594fb0->leave($__internal_1754cc2cac0b5dea8d9e5e23237c803d946c9773ec670dc60de9eae16a594fb0_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a45b8d70e5c9462bfa3721f7f0ac5782e4023085e4173ac7a35d6d614c2f813d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45b8d70e5c9462bfa3721f7f0ac5782e4023085e4173ac7a35d6d614c2f813d->enter($__internal_a45b8d70e5c9462bfa3721f7f0ac5782e4023085e4173ac7a35d6d614c2f813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_10481525a24f02588c30e176959eaeccfa69ef30a1a5fe5d0a730bf231803ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10481525a24f02588c30e176959eaeccfa69ef30a1a5fe5d0a730bf231803ae5->enter($__internal_10481525a24f02588c30e176959eaeccfa69ef30a1a5fe5d0a730bf231803ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_10481525a24f02588c30e176959eaeccfa69ef30a1a5fe5d0a730bf231803ae5->leave($__internal_10481525a24f02588c30e176959eaeccfa69ef30a1a5fe5d0a730bf231803ae5_prof);

        
        $__internal_a45b8d70e5c9462bfa3721f7f0ac5782e4023085e4173ac7a35d6d614c2f813d->leave($__internal_a45b8d70e5c9462bfa3721f7f0ac5782e4023085e4173ac7a35d6d614c2f813d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
