<?php

/* ::contact.html.twig */
class __TwigTemplate_4b2fb4ba7becfe791e5b2e0f3ba139d1e3cd56a0e4bdc0bcd3f4b4d2a853643e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::contact.html.twig", 1);
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
        $__internal_37bd4625dca862e7453acbf26a1f235ba24f1a82b7d8eb73179b44b75a8d1ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bd4625dca862e7453acbf26a1f235ba24f1a82b7d8eb73179b44b75a8d1ffb->enter($__internal_37bd4625dca862e7453acbf26a1f235ba24f1a82b7d8eb73179b44b75a8d1ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $__internal_4c4459b124552d3c1682300609ed7e6bd30b087537ae3aac6657c9d8f728f377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4459b124552d3c1682300609ed7e6bd30b087537ae3aac6657c9d8f728f377->enter($__internal_4c4459b124552d3c1682300609ed7e6bd30b087537ae3aac6657c9d8f728f377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37bd4625dca862e7453acbf26a1f235ba24f1a82b7d8eb73179b44b75a8d1ffb->leave($__internal_37bd4625dca862e7453acbf26a1f235ba24f1a82b7d8eb73179b44b75a8d1ffb_prof);

        
        $__internal_4c4459b124552d3c1682300609ed7e6bd30b087537ae3aac6657c9d8f728f377->leave($__internal_4c4459b124552d3c1682300609ed7e6bd30b087537ae3aac6657c9d8f728f377_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a551469b9258b10a632ece207a7a2b63f10c96e3189ec36f04d59d6a45358fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a551469b9258b10a632ece207a7a2b63f10c96e3189ec36f04d59d6a45358fc6->enter($__internal_a551469b9258b10a632ece207a7a2b63f10c96e3189ec36f04d59d6a45358fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_177647f13024c0853e9b18ceb95aa6ca1fa7a9f7b09e38cdab4d57e6eabf6902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177647f13024c0853e9b18ceb95aa6ca1fa7a9f7b09e38cdab4d57e6eabf6902->enter($__internal_177647f13024c0853e9b18ceb95aa6ca1fa7a9f7b09e38cdab4d57e6eabf6902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-3.2.1.js"), "html", null, true);
        echo " integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>


    <h1 class=\"header\">NOUS CONTACTER</h1>

<div class=\"container center\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 29
        echo "    <div style=\"display:none\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"Materialize.toast('Message envoyé !', 4000)\">
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>



";
        
        $__internal_177647f13024c0853e9b18ceb95aa6ca1fa7a9f7b09e38cdab4d57e6eabf6902->leave($__internal_177647f13024c0853e9b18ceb95aa6ca1fa7a9f7b09e38cdab4d57e6eabf6902_prof);

        
        $__internal_a551469b9258b10a632ece207a7a2b63f10c96e3189ec36f04d59d6a45358fc6->leave($__internal_a551469b9258b10a632ece207a7a2b63f10c96e3189ec36f04d59d6a45358fc6_prof);

    }

    public function getTemplateName()
    {
        return "::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  96 => 30,  93 => 29,  87 => 25,  80 => 21,  73 => 17,  66 => 13,  59 => 9,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
    <script src={{ asset('https://code.jquery.com/jquery-3.2.1.js') }} integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>


    <h1 class=\"header\">NOUS CONTACTER</h1>

<div class=\"container center\">
    {{ form_start(form) }}

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        {{ form_errors(form.subject) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        {{ form_errors(form.name) }}
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        {{ form_errors(form.email) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        {{ form_errors(form.message) }}
    </div>

    {# Render CSRF token etc .#}
    <div style=\"display:none\">
        {{ form_rest(form) }}
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"Materialize.toast('Message envoyé !', 4000)\">
    {{ form_end(form) }}

</div>



{% endblock %}


", "::contact.html.twig", "/home/fabien/symfony-stg/app/Resources/views/contact.html.twig");
    }
}
