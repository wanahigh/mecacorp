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
        $__internal_56dc6623b5a10ffe09814d6fe7cd9e8025972c024f532b7584d6b629965547f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dc6623b5a10ffe09814d6fe7cd9e8025972c024f532b7584d6b629965547f0->enter($__internal_56dc6623b5a10ffe09814d6fe7cd9e8025972c024f532b7584d6b629965547f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_902272142fde689d0a39100214d09a18a79d92e614727d214e161a0d89143b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902272142fde689d0a39100214d09a18a79d92e614727d214e161a0d89143b4c->enter($__internal_902272142fde689d0a39100214d09a18a79d92e614727d214e161a0d89143b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"]) || array_key_exists("__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9", $context) ? $context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"]) || array_key_exists("__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9", $context) ? $context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56dc6623b5a10ffe09814d6fe7cd9e8025972c024f532b7584d6b629965547f0->leave($__internal_56dc6623b5a10ffe09814d6fe7cd9e8025972c024f532b7584d6b629965547f0_prof);

        
        $__internal_902272142fde689d0a39100214d09a18a79d92e614727d214e161a0d89143b4c->leave($__internal_902272142fde689d0a39100214d09a18a79d92e614727d214e161a0d89143b4c_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_79ac1e66295bcebe9505de4adc6e21981dca768fda82b651a61ef4c80b74d3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ac1e66295bcebe9505de4adc6e21981dca768fda82b651a61ef4c80b74d3cd->enter($__internal_79ac1e66295bcebe9505de4adc6e21981dca768fda82b651a61ef4c80b74d3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1a7ae342fe75218e04da01def28b8126f5578718ba6184d87a0ee200dc97df54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7ae342fe75218e04da01def28b8126f5578718ba6184d87a0ee200dc97df54->enter($__internal_1a7ae342fe75218e04da01def28b8126f5578718ba6184d87a0ee200dc97df54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_1a7ae342fe75218e04da01def28b8126f5578718ba6184d87a0ee200dc97df54->leave($__internal_1a7ae342fe75218e04da01def28b8126f5578718ba6184d87a0ee200dc97df54_prof);

        
        $__internal_79ac1e66295bcebe9505de4adc6e21981dca768fda82b651a61ef4c80b74d3cd->leave($__internal_79ac1e66295bcebe9505de4adc6e21981dca768fda82b651a61ef4c80b74d3cd_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e0f8ec94b9fd92270e388b05669917bf31ad3d3ccfe2715bf2719175ddce8988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f8ec94b9fd92270e388b05669917bf31ad3d3ccfe2715bf2719175ddce8988->enter($__internal_e0f8ec94b9fd92270e388b05669917bf31ad3d3ccfe2715bf2719175ddce8988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_b81091510d75a2cac093ec9a511cdfa6f7aa9adc9fc787b0520188f68b6ed860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81091510d75a2cac093ec9a511cdfa6f7aa9adc9fc787b0520188f68b6ed860->enter($__internal_b81091510d75a2cac093ec9a511cdfa6f7aa9adc9fc787b0520188f68b6ed860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_b81091510d75a2cac093ec9a511cdfa6f7aa9adc9fc787b0520188f68b6ed860->leave($__internal_b81091510d75a2cac093ec9a511cdfa6f7aa9adc9fc787b0520188f68b6ed860_prof);

        
        $__internal_e0f8ec94b9fd92270e388b05669917bf31ad3d3ccfe2715bf2719175ddce8988->leave($__internal_e0f8ec94b9fd92270e388b05669917bf31ad3d3ccfe2715bf2719175ddce8988_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6f926ae9790f7927ff99019d0ae6e44f71a3fa2a9560a22fd614e1e234dd1368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f926ae9790f7927ff99019d0ae6e44f71a3fa2a9560a22fd614e1e234dd1368->enter($__internal_6f926ae9790f7927ff99019d0ae6e44f71a3fa2a9560a22fd614e1e234dd1368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_07f67a270bbea558eaac869c60087f4b91f7460230d328fa6dac64200c641cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f67a270bbea558eaac869c60087f4b91f7460230d328fa6dac64200c641cd0->enter($__internal_07f67a270bbea558eaac869c60087f4b91f7460230d328fa6dac64200c641cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"]) || array_key_exists("__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9", $context) ? $context["__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9846b3117b9594577c6e1e115bb623fd9521b26085f9293f40a8122ef0d4d9c9" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_07f67a270bbea558eaac869c60087f4b91f7460230d328fa6dac64200c641cd0->leave($__internal_07f67a270bbea558eaac869c60087f4b91f7460230d328fa6dac64200c641cd0_prof);

        
        $__internal_6f926ae9790f7927ff99019d0ae6e44f71a3fa2a9560a22fd614e1e234dd1368->leave($__internal_6f926ae9790f7927ff99019d0ae6e44f71a3fa2a9560a22fd614e1e234dd1368_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_25ac5c7ec1c5d5da40ff001390873476b720502904407dd14e3e7ec9aa14ec3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ac5c7ec1c5d5da40ff001390873476b720502904407dd14e3e7ec9aa14ec3a->enter($__internal_25ac5c7ec1c5d5da40ff001390873476b720502904407dd14e3e7ec9aa14ec3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5c33e5decb5bfe83a834ed402511fcdfc93c32c7f2c0ca13d028cd15f4b92c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c33e5decb5bfe83a834ed402511fcdfc93c32c7f2c0ca13d028cd15f4b92c64->enter($__internal_5c33e5decb5bfe83a834ed402511fcdfc93c32c7f2c0ca13d028cd15f4b92c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_5c33e5decb5bfe83a834ed402511fcdfc93c32c7f2c0ca13d028cd15f4b92c64->leave($__internal_5c33e5decb5bfe83a834ed402511fcdfc93c32c7f2c0ca13d028cd15f4b92c64_prof);

        
        $__internal_25ac5c7ec1c5d5da40ff001390873476b720502904407dd14e3e7ec9aa14ec3a->leave($__internal_25ac5c7ec1c5d5da40ff001390873476b720502904407dd14e3e7ec9aa14ec3a_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_0d01e8830ec3b685e0936dd6facf4ba2d2f197e2d2f887c4b7902cc75d305b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d01e8830ec3b685e0936dd6facf4ba2d2f197e2d2f887c4b7902cc75d305b54->enter($__internal_0d01e8830ec3b685e0936dd6facf4ba2d2f197e2d2f887c4b7902cc75d305b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_78d6803536a8df128ef5b16342484bd58b21b3870b44d7fdfb1a33a4247a75d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d6803536a8df128ef5b16342484bd58b21b3870b44d7fdfb1a33a4247a75d0->enter($__internal_78d6803536a8df128ef5b16342484bd58b21b3870b44d7fdfb1a33a4247a75d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_78d6803536a8df128ef5b16342484bd58b21b3870b44d7fdfb1a33a4247a75d0->leave($__internal_78d6803536a8df128ef5b16342484bd58b21b3870b44d7fdfb1a33a4247a75d0_prof);

        
        $__internal_0d01e8830ec3b685e0936dd6facf4ba2d2f197e2d2f887c4b7902cc75d305b54->leave($__internal_0d01e8830ec3b685e0936dd6facf4ba2d2f197e2d2f887c4b7902cc75d305b54_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_ab2218e5130cc3fb4dac5495ee878c720dc4823b750c60b21de24170a844e4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2218e5130cc3fb4dac5495ee878c720dc4823b750c60b21de24170a844e4ce->enter($__internal_ab2218e5130cc3fb4dac5495ee878c720dc4823b750c60b21de24170a844e4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_00271f3d35ccf8297c407cfec36d02fd16340148877c0240878797b11f9b8940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00271f3d35ccf8297c407cfec36d02fd16340148877c0240878797b11f9b8940->enter($__internal_00271f3d35ccf8297c407cfec36d02fd16340148877c0240878797b11f9b8940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_00271f3d35ccf8297c407cfec36d02fd16340148877c0240878797b11f9b8940->leave($__internal_00271f3d35ccf8297c407cfec36d02fd16340148877c0240878797b11f9b8940_prof);

        
        $__internal_ab2218e5130cc3fb4dac5495ee878c720dc4823b750c60b21de24170a844e4ce->leave($__internal_ab2218e5130cc3fb4dac5495ee878c720dc4823b750c60b21de24170a844e4ce_prof);

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
", "EasyAdminBundle:default:new.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
