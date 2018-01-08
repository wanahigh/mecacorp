<?php

/* AcmeHomeBundle:Default:index.html.twig */
class __TwigTemplate_739ce29508576ccf2f62c775819e55fd4fbca7fec69e21de4eddb02dfc0e8f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHomeBundle:Default:index.html.twig", 1);
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
        $__internal_da7ddbd88ae70317361ac42fb182aa26f717d005bd4106c5e79645865b74f925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7ddbd88ae70317361ac42fb182aa26f717d005bd4106c5e79645865b74f925->enter($__internal_da7ddbd88ae70317361ac42fb182aa26f717d005bd4106c5e79645865b74f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $__internal_3270d3f43dd14509c7797f4cb698343e0d7990bc31840774744750929ad98e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3270d3f43dd14509c7797f4cb698343e0d7990bc31840774744750929ad98e27->enter($__internal_3270d3f43dd14509c7797f4cb698343e0d7990bc31840774744750929ad98e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7ddbd88ae70317361ac42fb182aa26f717d005bd4106c5e79645865b74f925->leave($__internal_da7ddbd88ae70317361ac42fb182aa26f717d005bd4106c5e79645865b74f925_prof);

        
        $__internal_3270d3f43dd14509c7797f4cb698343e0d7990bc31840774744750929ad98e27->leave($__internal_3270d3f43dd14509c7797f4cb698343e0d7990bc31840774744750929ad98e27_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8b25595a35ca26e461bc85fd5da7d7b32259893e9af35dd91d72d39514eb195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b25595a35ca26e461bc85fd5da7d7b32259893e9af35dd91d72d39514eb195->enter($__internal_d8b25595a35ca26e461bc85fd5da7d7b32259893e9af35dd91d72d39514eb195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e91bd310577725a00d18e341859d21974ef1212d51f2aae6e85a78ce88e56436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91bd310577725a00d18e341859d21974ef1212d51f2aae6e85a78ce88e56436->enter($__internal_e91bd310577725a00d18e341859d21974ef1212d51f2aae6e85a78ce88e56436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div><div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-3\">Fluid jumbotron</h1>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>



";
        
        $__internal_e91bd310577725a00d18e341859d21974ef1212d51f2aae6e85a78ce88e56436->leave($__internal_e91bd310577725a00d18e341859d21974ef1212d51f2aae6e85a78ce88e56436_prof);

        
        $__internal_d8b25595a35ca26e461bc85fd5da7d7b32259893e9af35dd91d72d39514eb195->leave($__internal_d8b25595a35ca26e461bc85fd5da7d7b32259893e9af35dd91d72d39514eb195_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\"  %}


{% block body  %}
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>


    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-3\">Fluid jumbotron</h1>
            <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div><div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-3\">Fluid jumbotron</h1>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>



{% endblock %}", "AcmeHomeBundle:Default:index.html.twig", "/home/fabien/symfony-stg/src/Acme/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
