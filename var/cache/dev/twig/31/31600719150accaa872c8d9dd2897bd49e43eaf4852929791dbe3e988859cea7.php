<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_34e99009582291607115d5764258520022d6b9db4f8973514c50e8eea510fcd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_c557f591833cd856046d64c8d424bf40cb27667c37acbbe6211c0b4a0a52ead6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c557f591833cd856046d64c8d424bf40cb27667c37acbbe6211c0b4a0a52ead6->enter($__internal_c557f591833cd856046d64c8d424bf40cb27667c37acbbe6211c0b4a0a52ead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a66e7ad239d354901fbbe4b20bcd544f50c5b3f169c03106710c5f06ed2288ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66e7ad239d354901fbbe4b20bcd544f50c5b3f169c03106710c5f06ed2288ee->enter($__internal_a66e7ad239d354901fbbe4b20bcd544f50c5b3f169c03106710c5f06ed2288ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c557f591833cd856046d64c8d424bf40cb27667c37acbbe6211c0b4a0a52ead6->leave($__internal_c557f591833cd856046d64c8d424bf40cb27667c37acbbe6211c0b4a0a52ead6_prof);

        
        $__internal_a66e7ad239d354901fbbe4b20bcd544f50c5b3f169c03106710c5f06ed2288ee->leave($__internal_a66e7ad239d354901fbbe4b20bcd544f50c5b3f169c03106710c5f06ed2288ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_669d5eac93dd7141a27e84d0bd2a394779cc6cdb4c55aa4461c6dcf2561341ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669d5eac93dd7141a27e84d0bd2a394779cc6cdb4c55aa4461c6dcf2561341ce->enter($__internal_669d5eac93dd7141a27e84d0bd2a394779cc6cdb4c55aa4461c6dcf2561341ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0278eee4d34c12f8b622306d356d7098c48bf9c6f14cbdf167ae24d06f6693b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0278eee4d34c12f8b622306d356d7098c48bf9c6f14cbdf167ae24d06f6693b4->enter($__internal_0278eee4d34c12f8b622306d356d7098c48bf9c6f14cbdf167ae24d06f6693b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0278eee4d34c12f8b622306d356d7098c48bf9c6f14cbdf167ae24d06f6693b4->leave($__internal_0278eee4d34c12f8b622306d356d7098c48bf9c6f14cbdf167ae24d06f6693b4_prof);

        
        $__internal_669d5eac93dd7141a27e84d0bd2a394779cc6cdb4c55aa4461c6dcf2561341ce->leave($__internal_669d5eac93dd7141a27e84d0bd2a394779cc6cdb4c55aa4461c6dcf2561341ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/fabien/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
