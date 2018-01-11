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
        $__internal_33092d8f1bc9add5ea313190c80d23d88c499b3540469a3143dbb57b4494454a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33092d8f1bc9add5ea313190c80d23d88c499b3540469a3143dbb57b4494454a->enter($__internal_33092d8f1bc9add5ea313190c80d23d88c499b3540469a3143dbb57b4494454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_5a277d0e01b5c8f3152434e52ea4a6bad11cb0294523f13cf2326e199cd641d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a277d0e01b5c8f3152434e52ea4a6bad11cb0294523f13cf2326e199cd641d3->enter($__internal_5a277d0e01b5c8f3152434e52ea4a6bad11cb0294523f13cf2326e199cd641d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array(),         // line 4
(isset($context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"]) || array_key_exists("__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea", $context) ? $context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea" does not exist.', 4, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 5
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "label", array()), array(),         // line 4
(isset($context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"]) || array_key_exists("__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea", $context) ? $context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea" does not exist.', 4, $this->getSourceContext()); })())));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33092d8f1bc9add5ea313190c80d23d88c499b3540469a3143dbb57b4494454a->leave($__internal_33092d8f1bc9add5ea313190c80d23d88c499b3540469a3143dbb57b4494454a_prof);

        
        $__internal_5a277d0e01b5c8f3152434e52ea4a6bad11cb0294523f13cf2326e199cd641d3->leave($__internal_5a277d0e01b5c8f3152434e52ea4a6bad11cb0294523f13cf2326e199cd641d3_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_2c3078d399f4e447457f8aa33aaa7d92bc41fd5bde2cb70eb7ddcaa324ab5ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3078d399f4e447457f8aa33aaa7d92bc41fd5bde2cb70eb7ddcaa324ab5ca6->enter($__internal_2c3078d399f4e447457f8aa33aaa7d92bc41fd5bde2cb70eb7ddcaa324ab5ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d896539385ec439e1e05f4934b515b2983b198a6d9b4505425349a46383ae30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d896539385ec439e1e05f4934b515b2983b198a6d9b4505425349a46383ae30a->enter($__internal_d896539385ec439e1e05f4934b515b2983b198a6d9b4505425349a46383ae30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_d896539385ec439e1e05f4934b515b2983b198a6d9b4505425349a46383ae30a->leave($__internal_d896539385ec439e1e05f4934b515b2983b198a6d9b4505425349a46383ae30a_prof);

        
        $__internal_2c3078d399f4e447457f8aa33aaa7d92bc41fd5bde2cb70eb7ddcaa324ab5ca6->leave($__internal_2c3078d399f4e447457f8aa33aaa7d92bc41fd5bde2cb70eb7ddcaa324ab5ca6_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3c37ec09c54f0e20da4f6496f0d166a0eacd48f31d15e43697716f8393918fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c37ec09c54f0e20da4f6496f0d166a0eacd48f31d15e43697716f8393918fe2->enter($__internal_3c37ec09c54f0e20da4f6496f0d166a0eacd48f31d15e43697716f8393918fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6242dbcc55cf06211d5eb1be0ec5f8590fcd1f226a2b2f1aad2a13c648c6a9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6242dbcc55cf06211d5eb1be0ec5f8590fcd1f226a2b2f1aad2a13c648c6a9b7->enter($__internal_6242dbcc55cf06211d5eb1be0ec5f8590fcd1f226a2b2f1aad2a13c648c6a9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_6242dbcc55cf06211d5eb1be0ec5f8590fcd1f226a2b2f1aad2a13c648c6a9b7->leave($__internal_6242dbcc55cf06211d5eb1be0ec5f8590fcd1f226a2b2f1aad2a13c648c6a9b7_prof);

        
        $__internal_3c37ec09c54f0e20da4f6496f0d166a0eacd48f31d15e43697716f8393918fe2->leave($__internal_3c37ec09c54f0e20da4f6496f0d166a0eacd48f31d15e43697716f8393918fe2_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_c93826a3d48ae11043dc95d7b02d071ec9a0101515c0ec4807fc14a676bf50ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93826a3d48ae11043dc95d7b02d071ec9a0101515c0ec4807fc14a676bf50ca->enter($__internal_c93826a3d48ae11043dc95d7b02d071ec9a0101515c0ec4807fc14a676bf50ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f940e5ee59f496bebc697fd177405c61777d13f1c16fc4bba73631067b2fb35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f940e5ee59f496bebc697fd177405c61777d13f1c16fc4bba73631067b2fb35b->enter($__internal_f940e5ee59f496bebc697fd177405c61777d13f1c16fc4bba73631067b2fb35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 15, $this->getSourceContext()); })()), "new", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()),         // line 4
(isset($context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"]) || array_key_exists("__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea", $context) ? $context["__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_2997204df68471e26157e4dc7de7376620e741429144acb9c6d7271e284aeeea" does not exist.', 4, $this->getSourceContext()); })()))) : (        // line 15
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f940e5ee59f496bebc697fd177405c61777d13f1c16fc4bba73631067b2fb35b->leave($__internal_f940e5ee59f496bebc697fd177405c61777d13f1c16fc4bba73631067b2fb35b_prof);

        
        $__internal_c93826a3d48ae11043dc95d7b02d071ec9a0101515c0ec4807fc14a676bf50ca->leave($__internal_c93826a3d48ae11043dc95d7b02d071ec9a0101515c0ec4807fc14a676bf50ca_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_a0f27af0f0592277ea198587740016511825fc29fa58e675649f70825a97d937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f27af0f0592277ea198587740016511825fc29fa58e675649f70825a97d937->enter($__internal_a0f27af0f0592277ea198587740016511825fc29fa58e675649f70825a97d937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_94e999eaaea517505fdc9b8d369512a36ea99adeaa6173b539fdcf9a8a284d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e999eaaea517505fdc9b8d369512a36ea99adeaa6173b539fdcf9a8a284d35->enter($__internal_94e999eaaea517505fdc9b8d369512a36ea99adeaa6173b539fdcf9a8a284d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_94e999eaaea517505fdc9b8d369512a36ea99adeaa6173b539fdcf9a8a284d35->leave($__internal_94e999eaaea517505fdc9b8d369512a36ea99adeaa6173b539fdcf9a8a284d35_prof);

        
        $__internal_a0f27af0f0592277ea198587740016511825fc29fa58e675649f70825a97d937->leave($__internal_a0f27af0f0592277ea198587740016511825fc29fa58e675649f70825a97d937_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_47cf051807281c884d00e160bed7740bbd9c7a3c18aeed4af7f11182f978cba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cf051807281c884d00e160bed7740bbd9c7a3c18aeed4af7f11182f978cba5->enter($__internal_47cf051807281c884d00e160bed7740bbd9c7a3c18aeed4af7f11182f978cba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_4be770a2de6b70e74d657575c80f2aebe021f9a85a1b10e0de9670f853f7f4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be770a2de6b70e74d657575c80f2aebe021f9a85a1b10e0de9670f853f7f4bc->enter($__internal_4be770a2de6b70e74d657575c80f2aebe021f9a85a1b10e0de9670f853f7f4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_4be770a2de6b70e74d657575c80f2aebe021f9a85a1b10e0de9670f853f7f4bc->leave($__internal_4be770a2de6b70e74d657575c80f2aebe021f9a85a1b10e0de9670f853f7f4bc_prof);

        
        $__internal_47cf051807281c884d00e160bed7740bbd9c7a3c18aeed4af7f11182f978cba5->leave($__internal_47cf051807281c884d00e160bed7740bbd9c7a3c18aeed4af7f11182f978cba5_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_8d1db3cd71f7915e0d5a3c5866d62fcd79cdf713ed77f5eff12fe2d85a5f77e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1db3cd71f7915e0d5a3c5866d62fcd79cdf713ed77f5eff12fe2d85a5f77e5->enter($__internal_8d1db3cd71f7915e0d5a3c5866d62fcd79cdf713ed77f5eff12fe2d85a5f77e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_518910c588fa4dd0774690393abdff167df03949ba0864d643a6192242bc46b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518910c588fa4dd0774690393abdff167df03949ba0864d643a6192242bc46b2->enter($__internal_518910c588fa4dd0774690393abdff167df03949ba0864d643a6192242bc46b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_518910c588fa4dd0774690393abdff167df03949ba0864d643a6192242bc46b2->leave($__internal_518910c588fa4dd0774690393abdff167df03949ba0864d643a6192242bc46b2_prof);

        
        $__internal_8d1db3cd71f7915e0d5a3c5866d62fcd79cdf713ed77f5eff12fe2d85a5f77e5->leave($__internal_8d1db3cd71f7915e0d5a3c5866d62fcd79cdf713ed77f5eff12fe2d85a5f77e5_prof);

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
", "@EasyAdmin/default/new.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
