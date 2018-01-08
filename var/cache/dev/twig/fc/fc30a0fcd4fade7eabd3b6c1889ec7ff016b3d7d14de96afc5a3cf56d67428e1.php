<?php

/* :entity/advert:new.html.twig */
class __TwigTemplate_3fb1e3ec63bd6756283c8992cdf464575d7f273c82093b2ce0e7b6cfb104ae90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:new.html.twig", 1);
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
        $__internal_90d7e7e879cb7309581d1d39fe81de1039fb5f7d3a265955be02066ab23ef194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d7e7e879cb7309581d1d39fe81de1039fb5f7d3a265955be02066ab23ef194->enter($__internal_90d7e7e879cb7309581d1d39fe81de1039fb5f7d3a265955be02066ab23ef194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:new.html.twig"));

        $__internal_1f02d0de6ae0f903a667d7814081f1a84be217bf9cf5b8b0598d9420e4b92f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f02d0de6ae0f903a667d7814081f1a84be217bf9cf5b8b0598d9420e4b92f17->enter($__internal_1f02d0de6ae0f903a667d7814081f1a84be217bf9cf5b8b0598d9420e4b92f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d7e7e879cb7309581d1d39fe81de1039fb5f7d3a265955be02066ab23ef194->leave($__internal_90d7e7e879cb7309581d1d39fe81de1039fb5f7d3a265955be02066ab23ef194_prof);

        
        $__internal_1f02d0de6ae0f903a667d7814081f1a84be217bf9cf5b8b0598d9420e4b92f17->leave($__internal_1f02d0de6ae0f903a667d7814081f1a84be217bf9cf5b8b0598d9420e4b92f17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54d4be5449ccdd3e2366b219a372d142147df00d8cfb93d10b7fabc0f69549ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d4be5449ccdd3e2366b219a372d142147df00d8cfb93d10b7fabc0f69549ec->enter($__internal_54d4be5449ccdd3e2366b219a372d142147df00d8cfb93d10b7fabc0f69549ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a0e95b96020c5c4e9b730fb87e9a7e8aa1048d4263526e2e465bbcadc569099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0e95b96020c5c4e9b730fb87e9a7e8aa1048d4263526e2e465bbcadc569099->enter($__internal_3a0e95b96020c5c4e9b730fb87e9a7e8aa1048d4263526e2e465bbcadc569099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "



    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\">Retour</a>
     </li>
    </ul>
";
        
        $__internal_3a0e95b96020c5c4e9b730fb87e9a7e8aa1048d4263526e2e465bbcadc569099->leave($__internal_3a0e95b96020c5c4e9b730fb87e9a7e8aa1048d4263526e2e465bbcadc569099_prof);

        
        $__internal_54d4be5449ccdd3e2366b219a372d142147df00d8cfb93d10b7fabc0f69549ec->leave($__internal_54d4be5449ccdd3e2366b219a372d142147df00d8cfb93d10b7fabc0f69549ec_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
    {{ form_start(form) }}



    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\">Retour</a>
     </li>
    </ul>
{% endblock %}
", ":entity/advert:new.html.twig", "/home/fabien/symfony-stg/app/Resources/views/entity/advert/new.html.twig");
    }
}
