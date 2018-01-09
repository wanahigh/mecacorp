<?php

/* AcmeWorkBundle:Default:index.html.twig */
class __TwigTemplate_d283fe70ec489f9c25b142e6a035c2825a8e7030089c0c85db450f0ac5b4c3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeWorkBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3f227d37e0d6424d576500182726e25104653e267e8a064acd743e11ab7adba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f227d37e0d6424d576500182726e25104653e267e8a064acd743e11ab7adba->enter($__internal_c3f227d37e0d6424d576500182726e25104653e267e8a064acd743e11ab7adba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $__internal_f1b77934e27f577682091ed5a2da096dd854cb8ab6f132abfc3410c73d81ff51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b77934e27f577682091ed5a2da096dd854cb8ab6f132abfc3410c73d81ff51->enter($__internal_f1b77934e27f577682091ed5a2da096dd854cb8ab6f132abfc3410c73d81ff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f227d37e0d6424d576500182726e25104653e267e8a064acd743e11ab7adba->leave($__internal_c3f227d37e0d6424d576500182726e25104653e267e8a064acd743e11ab7adba_prof);

        
        $__internal_f1b77934e27f577682091ed5a2da096dd854cb8ab6f132abfc3410c73d81ff51->leave($__internal_f1b77934e27f577682091ed5a2da096dd854cb8ab6f132abfc3410c73d81ff51_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_442cb20098f502fb4223ab3e199ceb37e8ef36702c4ab1fe5f0310cedc876a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442cb20098f502fb4223ab3e199ceb37e8ef36702c4ab1fe5f0310cedc876a80->enter($__internal_442cb20098f502fb4223ab3e199ceb37e8ef36702c4ab1fe5f0310cedc876a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_803b1b93f70f3f254a8c706e520fb07250a00a40157638a29318a27da8993f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803b1b93f70f3f254a8c706e520fb07250a00a40157638a29318a27da8993f7f->enter($__internal_803b1b93f70f3f254a8c706e520fb07250a00a40157638a29318a27da8993f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>hello world</h1>

";
        
        $__internal_803b1b93f70f3f254a8c706e520fb07250a00a40157638a29318a27da8993f7f->leave($__internal_803b1b93f70f3f254a8c706e520fb07250a00a40157638a29318a27da8993f7f_prof);

        
        $__internal_442cb20098f502fb4223ab3e199ceb37e8ef36702c4ab1fe5f0310cedc876a80->leave($__internal_442cb20098f502fb4223ab3e199ceb37e8ef36702c4ab1fe5f0310cedc876a80_prof);

    }

    public function getTemplateName()
    {
        return "AcmeWorkBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  40 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}




{% block body %}
<h1>hello world</h1>

{% endblock %}









", "AcmeWorkBundle:Default:index.html.twig", "/var/www/monsite1/mecacorp/src/Acme/WorkBundle/Resources/views/Default/index.html.twig");
    }
}
