<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3291887d83e06ba566c8d6ee109a5f35d50df06c7fe6b84c330471af2e6790a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3291887d83e06ba566c8d6ee109a5f35d50df06c7fe6b84c330471af2e6790a5->enter($__internal_3291887d83e06ba566c8d6ee109a5f35d50df06c7fe6b84c330471af2e6790a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1ab83873b7a8d6480e44dce919b6f2328e9e5a0349da68176c7a6db67f99194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab83873b7a8d6480e44dce919b6f2328e9e5a0349da68176c7a6db67f99194b->enter($__internal_1ab83873b7a8d6480e44dce919b6f2328e9e5a0349da68176c7a6db67f99194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3291887d83e06ba566c8d6ee109a5f35d50df06c7fe6b84c330471af2e6790a5->leave($__internal_3291887d83e06ba566c8d6ee109a5f35d50df06c7fe6b84c330471af2e6790a5_prof);

        
        $__internal_1ab83873b7a8d6480e44dce919b6f2328e9e5a0349da68176c7a6db67f99194b->leave($__internal_1ab83873b7a8d6480e44dce919b6f2328e9e5a0349da68176c7a6db67f99194b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6258c72f4cac72812973160a589d55e653b934cccd628a1961e527edac5b7ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6258c72f4cac72812973160a589d55e653b934cccd628a1961e527edac5b7ab8->enter($__internal_6258c72f4cac72812973160a589d55e653b934cccd628a1961e527edac5b7ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcbc8c00ee5c423b896f177d00803fe330db78f3adcfb5ce51ad1ed4c0cf8cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbc8c00ee5c423b896f177d00803fe330db78f3adcfb5ce51ad1ed4c0cf8cc3->enter($__internal_bcbc8c00ee5c423b896f177d00803fe330db78f3adcfb5ce51ad1ed4c0cf8cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_bcbc8c00ee5c423b896f177d00803fe330db78f3adcfb5ce51ad1ed4c0cf8cc3->leave($__internal_bcbc8c00ee5c423b896f177d00803fe330db78f3adcfb5ce51ad1ed4c0cf8cc3_prof);

        
        $__internal_6258c72f4cac72812973160a589d55e653b934cccd628a1961e527edac5b7ab8->leave($__internal_6258c72f4cac72812973160a589d55e653b934cccd628a1961e527edac5b7ab8_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74b958571a407e5597185788f98bc0768a33c564d73000ad974b58fdf97a49bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b958571a407e5597185788f98bc0768a33c564d73000ad974b58fdf97a49bf->enter($__internal_74b958571a407e5597185788f98bc0768a33c564d73000ad974b58fdf97a49bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0052a32a2c3574a15fadcc51cc777f66aa20fa8f8c5ae27355a902a405dd173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0052a32a2c3574a15fadcc51cc777f66aa20fa8f8c5ae27355a902a405dd173->enter($__internal_c0052a32a2c3574a15fadcc51cc777f66aa20fa8f8c5ae27355a902a405dd173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_c0052a32a2c3574a15fadcc51cc777f66aa20fa8f8c5ae27355a902a405dd173->leave($__internal_c0052a32a2c3574a15fadcc51cc777f66aa20fa8f8c5ae27355a902a405dd173_prof);

        
        $__internal_74b958571a407e5597185788f98bc0768a33c564d73000ad974b58fdf97a49bf->leave($__internal_74b958571a407e5597185788f98bc0768a33c564d73000ad974b58fdf97a49bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/fabien/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
