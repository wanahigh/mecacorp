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
        $__internal_a3e321237f62507888c2578826ecbc94898f94e48c1094c7ba82bf1f0c7439b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e321237f62507888c2578826ecbc94898f94e48c1094c7ba82bf1f0c7439b4->enter($__internal_a3e321237f62507888c2578826ecbc94898f94e48c1094c7ba82bf1f0c7439b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $__internal_40b2bdb947b73d2748ae429620cd507b565da600f0ecb652835ec98f4bb502d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b2bdb947b73d2748ae429620cd507b565da600f0ecb652835ec98f4bb502d0->enter($__internal_40b2bdb947b73d2748ae429620cd507b565da600f0ecb652835ec98f4bb502d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e321237f62507888c2578826ecbc94898f94e48c1094c7ba82bf1f0c7439b4->leave($__internal_a3e321237f62507888c2578826ecbc94898f94e48c1094c7ba82bf1f0c7439b4_prof);

        
        $__internal_40b2bdb947b73d2748ae429620cd507b565da600f0ecb652835ec98f4bb502d0->leave($__internal_40b2bdb947b73d2748ae429620cd507b565da600f0ecb652835ec98f4bb502d0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_94980b42ec21bcdbe35f53c2dbc99eaf00ff76be5ba6083f43dfee2674f4f9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94980b42ec21bcdbe35f53c2dbc99eaf00ff76be5ba6083f43dfee2674f4f9da->enter($__internal_94980b42ec21bcdbe35f53c2dbc99eaf00ff76be5ba6083f43dfee2674f4f9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_233a860ee889784ef45e8e274f136fe6feaea598054e6b53a8f3619471239254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233a860ee889784ef45e8e274f136fe6feaea598054e6b53a8f3619471239254->enter($__internal_233a860ee889784ef45e8e274f136fe6feaea598054e6b53a8f3619471239254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_233a860ee889784ef45e8e274f136fe6feaea598054e6b53a8f3619471239254->leave($__internal_233a860ee889784ef45e8e274f136fe6feaea598054e6b53a8f3619471239254_prof);

        
        $__internal_94980b42ec21bcdbe35f53c2dbc99eaf00ff76be5ba6083f43dfee2674f4f9da->leave($__internal_94980b42ec21bcdbe35f53c2dbc99eaf00ff76be5ba6083f43dfee2674f4f9da_prof);

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



{% endblock %}", "AcmeHomeBundle:Default:index.html.twig", "/var/www/monsite1/mecacorp/src/Acme/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
