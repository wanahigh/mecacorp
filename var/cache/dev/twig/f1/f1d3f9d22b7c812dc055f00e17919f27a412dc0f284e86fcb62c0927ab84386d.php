<?php

/* AcmeFilialeBundle:Default:index.html.twig */
class __TwigTemplate_6688ac73920445d25ea55fc18c1d5911513fd47642f10897256241eca6c6cbe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeFilialeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b225e559085fad6845b60e8083651675926b25f1e6c245a8301aa4971ff6e217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b225e559085fad6845b60e8083651675926b25f1e6c245a8301aa4971ff6e217->enter($__internal_b225e559085fad6845b60e8083651675926b25f1e6c245a8301aa4971ff6e217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $__internal_b18c77fb9c5ee1996dee83daf1090bdd62e66450265d8417d8cba0b301ad6341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18c77fb9c5ee1996dee83daf1090bdd62e66450265d8417d8cba0b301ad6341->enter($__internal_b18c77fb9c5ee1996dee83daf1090bdd62e66450265d8417d8cba0b301ad6341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b225e559085fad6845b60e8083651675926b25f1e6c245a8301aa4971ff6e217->leave($__internal_b225e559085fad6845b60e8083651675926b25f1e6c245a8301aa4971ff6e217_prof);

        
        $__internal_b18c77fb9c5ee1996dee83daf1090bdd62e66450265d8417d8cba0b301ad6341->leave($__internal_b18c77fb9c5ee1996dee83daf1090bdd62e66450265d8417d8cba0b301ad6341_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_18df33bdf90a4825707d27288eb9cbe7eda472330fc3fe2d4b146a1d606280e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18df33bdf90a4825707d27288eb9cbe7eda472330fc3fe2d4b146a1d606280e1->enter($__internal_18df33bdf90a4825707d27288eb9cbe7eda472330fc3fe2d4b146a1d606280e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_191ec60e02983b6e7b0a742603c01f12399beb9a93e7b97ca78309770b8fbb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191ec60e02983b6e7b0a742603c01f12399beb9a93e7b97ca78309770b8fbb31->enter($__internal_191ec60e02983b6e7b0a742603c01f12399beb9a93e7b97ca78309770b8fbb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col s12 m9 l10\">
            <div id=\"introduction\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"structure\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"initialization\" class=\"section scrollspy\">
                <p>Content </p>
            </div>
        </div>
        <div class=\"col hide-on-small-only m3 l2\">
            <ul class=\"section table-of-contents\">
                <li><a href=\"#introduction\">Introduction</a></li>
                <li><a href=\"#structure\">Structure</a></li>
                <li><a href=\"#initialization\">Intialization</a></li>
            </ul>
        </div>
    </div>

    <script>  \$(document).ready(function(){
            \$('.scrollspy').scrollSpy();
        });</script>


";
        
        $__internal_191ec60e02983b6e7b0a742603c01f12399beb9a93e7b97ca78309770b8fbb31->leave($__internal_191ec60e02983b6e7b0a742603c01f12399beb9a93e7b97ca78309770b8fbb31_prof);

        
        $__internal_18df33bdf90a4825707d27288eb9cbe7eda472330fc3fe2d4b146a1d606280e1->leave($__internal_18df33bdf90a4825707d27288eb9cbe7eda472330fc3fe2d4b146a1d606280e1_prof);

    }

    public function getTemplateName()
    {
        return "AcmeFilialeBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{#------------------------------------------HEADER END---------------------------------------------------------------    #}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m9 l10\">
            <div id=\"introduction\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"structure\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"initialization\" class=\"section scrollspy\">
                <p>Content </p>
            </div>
        </div>
        <div class=\"col hide-on-small-only m3 l2\">
            <ul class=\"section table-of-contents\">
                <li><a href=\"#introduction\">Introduction</a></li>
                <li><a href=\"#structure\">Structure</a></li>
                <li><a href=\"#initialization\">Intialization</a></li>
            </ul>
        </div>
    </div>

    <script>  \$(document).ready(function(){
            \$('.scrollspy').scrollSpy();
        });</script>


{% endblock %}






    {#-------------------------------------------FOOTER BEGIN---------------------------------------------------    #}


", "AcmeFilialeBundle:Default:index.html.twig", "/home/fabien/symfony-stg/src/Acme/FilialeBundle/Resources/views/Default/index.html.twig");
    }
}
