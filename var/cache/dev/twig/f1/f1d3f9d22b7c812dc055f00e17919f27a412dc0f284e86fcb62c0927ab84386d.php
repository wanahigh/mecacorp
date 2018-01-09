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
        $__internal_6522776a04c0dcb3e227029c1708b9c02427646b5cfbce868e6d0949906af1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6522776a04c0dcb3e227029c1708b9c02427646b5cfbce868e6d0949906af1ab->enter($__internal_6522776a04c0dcb3e227029c1708b9c02427646b5cfbce868e6d0949906af1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $__internal_fd880972109ef60c52f105dbae564d6b3fd80c43bc9674cf8e770297384df666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd880972109ef60c52f105dbae564d6b3fd80c43bc9674cf8e770297384df666->enter($__internal_fd880972109ef60c52f105dbae564d6b3fd80c43bc9674cf8e770297384df666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6522776a04c0dcb3e227029c1708b9c02427646b5cfbce868e6d0949906af1ab->leave($__internal_6522776a04c0dcb3e227029c1708b9c02427646b5cfbce868e6d0949906af1ab_prof);

        
        $__internal_fd880972109ef60c52f105dbae564d6b3fd80c43bc9674cf8e770297384df666->leave($__internal_fd880972109ef60c52f105dbae564d6b3fd80c43bc9674cf8e770297384df666_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9825c6ab1a6e24ef37690f41525b069285f5ada3c90ad02011d269495abad9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9825c6ab1a6e24ef37690f41525b069285f5ada3c90ad02011d269495abad9d4->enter($__internal_9825c6ab1a6e24ef37690f41525b069285f5ada3c90ad02011d269495abad9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_946713618750fc6c99bb425a990f77f6470b11e035ed91e1e2bf2e9e5ef0e9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946713618750fc6c99bb425a990f77f6470b11e035ed91e1e2bf2e9e5ef0e9da->enter($__internal_946713618750fc6c99bb425a990f77f6470b11e035ed91e1e2bf2e9e5ef0e9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_946713618750fc6c99bb425a990f77f6470b11e035ed91e1e2bf2e9e5ef0e9da->leave($__internal_946713618750fc6c99bb425a990f77f6470b11e035ed91e1e2bf2e9e5ef0e9da_prof);

        
        $__internal_9825c6ab1a6e24ef37690f41525b069285f5ada3c90ad02011d269495abad9d4->leave($__internal_9825c6ab1a6e24ef37690f41525b069285f5ada3c90ad02011d269495abad9d4_prof);

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


", "AcmeFilialeBundle:Default:index.html.twig", "/var/www/monsite1/mecacorp/src/Acme/FilialeBundle/Resources/views/Default/index.html.twig");
    }
}
