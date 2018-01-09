<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3da58e6046f07e1dbff60436cf94378270002850c8b0054ed51f2a947c2108e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dc47b86dbcca02e56643fa0fb01795c88d03ff37d695ccc6ad7acda292abad95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc47b86dbcca02e56643fa0fb01795c88d03ff37d695ccc6ad7acda292abad95->enter($__internal_dc47b86dbcca02e56643fa0fb01795c88d03ff37d695ccc6ad7acda292abad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8a17c1c1ba32ca714750f230759166d63693620d536eef7e855e100a028de09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a17c1c1ba32ca714750f230759166d63693620d536eef7e855e100a028de09b->enter($__internal_8a17c1c1ba32ca714750f230759166d63693620d536eef7e855e100a028de09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc47b86dbcca02e56643fa0fb01795c88d03ff37d695ccc6ad7acda292abad95->leave($__internal_dc47b86dbcca02e56643fa0fb01795c88d03ff37d695ccc6ad7acda292abad95_prof);

        
        $__internal_8a17c1c1ba32ca714750f230759166d63693620d536eef7e855e100a028de09b->leave($__internal_8a17c1c1ba32ca714750f230759166d63693620d536eef7e855e100a028de09b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42100b790b1432a635a43367eaebb29ffeab6e0450c8d3adf29a1d36197937cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42100b790b1432a635a43367eaebb29ffeab6e0450c8d3adf29a1d36197937cb->enter($__internal_42100b790b1432a635a43367eaebb29ffeab6e0450c8d3adf29a1d36197937cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c448940a850b4472a7b4a638efcfc4ad8a0e7b11d74710173dd5e0817dc637d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c448940a850b4472a7b4a638efcfc4ad8a0e7b11d74710173dd5e0817dc637d8->enter($__internal_c448940a850b4472a7b4a638efcfc4ad8a0e7b11d74710173dd5e0817dc637d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c448940a850b4472a7b4a638efcfc4ad8a0e7b11d74710173dd5e0817dc637d8->leave($__internal_c448940a850b4472a7b4a638efcfc4ad8a0e7b11d74710173dd5e0817dc637d8_prof);

        
        $__internal_42100b790b1432a635a43367eaebb29ffeab6e0450c8d3adf29a1d36197937cb->leave($__internal_42100b790b1432a635a43367eaebb29ffeab6e0450c8d3adf29a1d36197937cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
