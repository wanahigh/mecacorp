<?php

/* @EasyAdmin/default/new.html.twig */
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 7, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e74eb59121b1b298d168a7e60877d79b0eaa0026302df583c02499115d96b65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74eb59121b1b298d168a7e60877d79b0eaa0026302df583c02499115d96b65c->enter($__internal_e74eb59121b1b298d168a7e60877d79b0eaa0026302df583c02499115d96b65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_54c97d08823e05caf43e15f20f6de0b508ac71ba271011f3210fea65f2a76307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c97d08823e05caf43e15f20f6de0b508ac71ba271011f3210fea65f2a76307->enter($__internal_54c97d08823e05caf43e15f20f6de0b508ac71ba271011f3210fea65f2a76307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"]) || array_key_exists("__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a", $context) ? $context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"]) || array_key_exists("__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a", $context) ? $context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74eb59121b1b298d168a7e60877d79b0eaa0026302df583c02499115d96b65c->leave($__internal_e74eb59121b1b298d168a7e60877d79b0eaa0026302df583c02499115d96b65c_prof);

        
        $__internal_54c97d08823e05caf43e15f20f6de0b508ac71ba271011f3210fea65f2a76307->leave($__internal_54c97d08823e05caf43e15f20f6de0b508ac71ba271011f3210fea65f2a76307_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_bfb8a9c84fce45a3d79205f36267a0388fd6b46272e40e3039b835ebff4b1044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb8a9c84fce45a3d79205f36267a0388fd6b46272e40e3039b835ebff4b1044->enter($__internal_bfb8a9c84fce45a3d79205f36267a0388fd6b46272e40e3039b835ebff4b1044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e10b2745b0eac0b22607c8239417d1c78bd1df09d9c021db14f1646d1a8aaaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10b2745b0eac0b22607c8239417d1c78bd1df09d9c021db14f1646d1a8aaaa2->enter($__internal_e10b2745b0eac0b22607c8239417d1c78bd1df09d9c021db14f1646d1a8aaaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_e10b2745b0eac0b22607c8239417d1c78bd1df09d9c021db14f1646d1a8aaaa2->leave($__internal_e10b2745b0eac0b22607c8239417d1c78bd1df09d9c021db14f1646d1a8aaaa2_prof);

        
        $__internal_bfb8a9c84fce45a3d79205f36267a0388fd6b46272e40e3039b835ebff4b1044->leave($__internal_bfb8a9c84fce45a3d79205f36267a0388fd6b46272e40e3039b835ebff4b1044_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8971ff4711f626e00fb624aba249ef73c6ca8fa84c1b4b4631bcf3a9d091c2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8971ff4711f626e00fb624aba249ef73c6ca8fa84c1b4b4631bcf3a9d091c2c4->enter($__internal_8971ff4711f626e00fb624aba249ef73c6ca8fa84c1b4b4631bcf3a9d091c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_971948c3d9184c81f69aa0b0efd6633a0032d689f8842aa272b8c05c4b0d8a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971948c3d9184c81f69aa0b0efd6633a0032d689f8842aa272b8c05c4b0d8a87->enter($__internal_971948c3d9184c81f69aa0b0efd6633a0032d689f8842aa272b8c05c4b0d8a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_971948c3d9184c81f69aa0b0efd6633a0032d689f8842aa272b8c05c4b0d8a87->leave($__internal_971948c3d9184c81f69aa0b0efd6633a0032d689f8842aa272b8c05c4b0d8a87_prof);

        
        $__internal_8971ff4711f626e00fb624aba249ef73c6ca8fa84c1b4b4631bcf3a9d091c2c4->leave($__internal_8971ff4711f626e00fb624aba249ef73c6ca8fa84c1b4b4631bcf3a9d091c2c4_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4eceb95166636a5cc1675e23a8dea29be581f73313ed4fc147d8cd91ba913215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eceb95166636a5cc1675e23a8dea29be581f73313ed4fc147d8cd91ba913215->enter($__internal_4eceb95166636a5cc1675e23a8dea29be581f73313ed4fc147d8cd91ba913215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e1e36fad076e84b8d06c726d7831d2364eca91bda43cb40de0b1b94c86ed477b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e36fad076e84b8d06c726d7831d2364eca91bda43cb40de0b1b94c86ed477b->enter($__internal_e1e36fad076e84b8d06c726d7831d2364eca91bda43cb40de0b1b94c86ed477b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"]) || array_key_exists("__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a", $context) ? $context["__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_d398ef8376f4cf6e23ccee543ae9f9978769579f2b7324ea921d91db25586c6a" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e1e36fad076e84b8d06c726d7831d2364eca91bda43cb40de0b1b94c86ed477b->leave($__internal_e1e36fad076e84b8d06c726d7831d2364eca91bda43cb40de0b1b94c86ed477b_prof);

        
        $__internal_4eceb95166636a5cc1675e23a8dea29be581f73313ed4fc147d8cd91ba913215->leave($__internal_4eceb95166636a5cc1675e23a8dea29be581f73313ed4fc147d8cd91ba913215_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_a397485a4328ee2a7f7dcc8db5ba08cc989c2309f16792b7efecc8c41c13d855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a397485a4328ee2a7f7dcc8db5ba08cc989c2309f16792b7efecc8c41c13d855->enter($__internal_a397485a4328ee2a7f7dcc8db5ba08cc989c2309f16792b7efecc8c41c13d855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_00d870aea0dd7a42187b0a89aeee74220873e4fc8a371cc4814ce755f0af07bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d870aea0dd7a42187b0a89aeee74220873e4fc8a371cc4814ce755f0af07bb->enter($__internal_00d870aea0dd7a42187b0a89aeee74220873e4fc8a371cc4814ce755f0af07bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_00d870aea0dd7a42187b0a89aeee74220873e4fc8a371cc4814ce755f0af07bb->leave($__internal_00d870aea0dd7a42187b0a89aeee74220873e4fc8a371cc4814ce755f0af07bb_prof);

        
        $__internal_a397485a4328ee2a7f7dcc8db5ba08cc989c2309f16792b7efecc8c41c13d855->leave($__internal_a397485a4328ee2a7f7dcc8db5ba08cc989c2309f16792b7efecc8c41c13d855_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_cbbe2f79973736501df7426d00d3ed9acf34113eeb36f606511911404dabb3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbe2f79973736501df7426d00d3ed9acf34113eeb36f606511911404dabb3f6->enter($__internal_cbbe2f79973736501df7426d00d3ed9acf34113eeb36f606511911404dabb3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_18bfcf561edf86ed73a8bc33d9dd8846f35335d1c1319013b2ab09e8c8ec13d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bfcf561edf86ed73a8bc33d9dd8846f35335d1c1319013b2ab09e8c8ec13d5->enter($__internal_18bfcf561edf86ed73a8bc33d9dd8846f35335d1c1319013b2ab09e8c8ec13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_18bfcf561edf86ed73a8bc33d9dd8846f35335d1c1319013b2ab09e8c8ec13d5->leave($__internal_18bfcf561edf86ed73a8bc33d9dd8846f35335d1c1319013b2ab09e8c8ec13d5_prof);

        
        $__internal_cbbe2f79973736501df7426d00d3ed9acf34113eeb36f606511911404dabb3f6->leave($__internal_cbbe2f79973736501df7426d00d3ed9acf34113eeb36f606511911404dabb3f6_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_de46e3854cbaf15e2a500728004ff75907924eed533c76411da83c5805a7ff10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de46e3854cbaf15e2a500728004ff75907924eed533c76411da83c5805a7ff10->enter($__internal_de46e3854cbaf15e2a500728004ff75907924eed533c76411da83c5805a7ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_3ac8895b324192664a47f75620ea71dc1a4bca3c2f8775a6a9f60490da6605ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac8895b324192664a47f75620ea71dc1a4bca3c2f8775a6a9f60490da6605ae->enter($__internal_3ac8895b324192664a47f75620ea71dc1a4bca3c2f8775a6a9f60490da6605ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_3ac8895b324192664a47f75620ea71dc1a4bca3c2f8775a6a9f60490da6605ae->leave($__internal_3ac8895b324192664a47f75620ea71dc1a4bca3c2f8775a6a9f60490da6605ae_prof);

        
        $__internal_de46e3854cbaf15e2a500728004ff75907924eed533c76411da83c5805a7ff10->leave($__internal_de46e3854cbaf15e2a500728004ff75907924eed533c76411da83c5805a7ff10_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
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
", "@EasyAdmin/default/new.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
