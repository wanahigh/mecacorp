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
        $__internal_73aa58557c81b31894cdb0dfff4e5cde8c1fce2014a2b33f276d0dcb34211dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aa58557c81b31894cdb0dfff4e5cde8c1fce2014a2b33f276d0dcb34211dbb->enter($__internal_73aa58557c81b31894cdb0dfff4e5cde8c1fce2014a2b33f276d0dcb34211dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $__internal_624900f4612af326be11d01126d39abafc464b14352d5b622f3cdb67879f09d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624900f4612af326be11d01126d39abafc464b14352d5b622f3cdb67879f09d3->enter($__internal_624900f4612af326be11d01126d39abafc464b14352d5b622f3cdb67879f09d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73aa58557c81b31894cdb0dfff4e5cde8c1fce2014a2b33f276d0dcb34211dbb->leave($__internal_73aa58557c81b31894cdb0dfff4e5cde8c1fce2014a2b33f276d0dcb34211dbb_prof);

        
        $__internal_624900f4612af326be11d01126d39abafc464b14352d5b622f3cdb67879f09d3->leave($__internal_624900f4612af326be11d01126d39abafc464b14352d5b622f3cdb67879f09d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2c133eb6f90145fde13193dcd7265fc394976ea8d07e8168b60d37cedbd220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2c133eb6f90145fde13193dcd7265fc394976ea8d07e8168b60d37cedbd220->enter($__internal_4e2c133eb6f90145fde13193dcd7265fc394976ea8d07e8168b60d37cedbd220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7dfa1dfeb0b8e832ba9bf7b1237b3d0b18220d9b82f6600c0e10e3c7775d7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dfa1dfeb0b8e832ba9bf7b1237b3d0b18220d9b82f6600c0e10e3c7775d7a7->enter($__internal_f7dfa1dfeb0b8e832ba9bf7b1237b3d0b18220d9b82f6600c0e10e3c7775d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-3.2.1.js"), "html", null, true);
        echo " integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
    <style>
        body{
            background-image:url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/wallpaper-2561368_960_720.jpg"), "html", null, true);
        echo "');
            background-size:cover;
        }
    </style>

    <h1 class=\"header\">NOUS CONTACTER</h1>

<div class=\"container center\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 34
        echo "    <div style=\"display:none\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"Materialize.toast('Message envoyé !', 4000)\">
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>



";
        
        $__internal_f7dfa1dfeb0b8e832ba9bf7b1237b3d0b18220d9b82f6600c0e10e3c7775d7a7->leave($__internal_f7dfa1dfeb0b8e832ba9bf7b1237b3d0b18220d9b82f6600c0e10e3c7775d7a7_prof);

        
        $__internal_4e2c133eb6f90145fde13193dcd7265fc394976ea8d07e8168b60d37cedbd220->leave($__internal_4e2c133eb6f90145fde13193dcd7265fc394976ea8d07e8168b60d37cedbd220_prof);

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
        return array (  111 => 39,  104 => 35,  101 => 34,  95 => 30,  88 => 26,  81 => 22,  74 => 18,  67 => 14,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
    <script src={{ asset('https://code.jquery.com/jquery-3.2.1.js') }} integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
    <style>
        body{
            background-image:url('{{ asset('../../../images/wallpaper-2561368_960_720.jpg') }}');
            background-size:cover;
        }
    </style>

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


", "::contact.html.twig", "/home/fabien/mecacorp/app/Resources/views/contact.html.twig");
    }
}
