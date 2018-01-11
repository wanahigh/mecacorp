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
        $__internal_43876162685aa4c26c96cb51c1f95c3d64d24cbcc8d9653a118f714599f53b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43876162685aa4c26c96cb51c1f95c3d64d24cbcc8d9653a118f714599f53b1f->enter($__internal_43876162685aa4c26c96cb51c1f95c3d64d24cbcc8d9653a118f714599f53b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $__internal_f9e7fb972d0cac330249c8852a54f162eccf3b3e7423b6a8605568d2f1715ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e7fb972d0cac330249c8852a54f162eccf3b3e7423b6a8605568d2f1715ff8->enter($__internal_f9e7fb972d0cac330249c8852a54f162eccf3b3e7423b6a8605568d2f1715ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43876162685aa4c26c96cb51c1f95c3d64d24cbcc8d9653a118f714599f53b1f->leave($__internal_43876162685aa4c26c96cb51c1f95c3d64d24cbcc8d9653a118f714599f53b1f_prof);

        
        $__internal_f9e7fb972d0cac330249c8852a54f162eccf3b3e7423b6a8605568d2f1715ff8->leave($__internal_f9e7fb972d0cac330249c8852a54f162eccf3b3e7423b6a8605568d2f1715ff8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_16467b84fed78435776bb1a6978b57a135fcad751f97331cc14e957f82d2ca3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16467b84fed78435776bb1a6978b57a135fcad751f97331cc14e957f82d2ca3d->enter($__internal_16467b84fed78435776bb1a6978b57a135fcad751f97331cc14e957f82d2ca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d66ec4b1e1bd87b3e3741dcb45115f45a70a558f06ab35ba1c42b19b3842283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d66ec4b1e1bd87b3e3741dcb45115f45a70a558f06ab35ba1c42b19b3842283->enter($__internal_8d66ec4b1e1bd87b3e3741dcb45115f45a70a558f06ab35ba1c42b19b3842283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<div class=\"row col l4\">
<div class=\"col l4\">
    <iframe class=\"card large z-depth-5\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2169727146634!2d4.841073951561579!3d45.746795979002826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ0JzQ4LjUiTiA0wrA1MCczNS44IkU!5e0!3m2!1sfr!2sfr!4v1515673350762\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>

    <div class=\"container center col l8\">
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\">nom | pseudo</label>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Email</label>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
    </div>
    <div>
        <input class=\"input\" type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 40
        echo "    <div style=\"display:none\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"fct()\">
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>
</div>

    <script>function fct(){
        Materialize.toast('MESSAGE ENVOYÉ', 4000)
        }</script>


";
        
        $__internal_8d66ec4b1e1bd87b3e3741dcb45115f45a70a558f06ab35ba1c42b19b3842283->leave($__internal_8d66ec4b1e1bd87b3e3741dcb45115f45a70a558f06ab35ba1c42b19b3842283_prof);

        
        $__internal_16467b84fed78435776bb1a6978b57a135fcad751f97331cc14e957f82d2ca3d->leave($__internal_16467b84fed78435776bb1a6978b57a135fcad751f97331cc14e957f82d2ca3d_prof);

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
        return array (  117 => 45,  110 => 41,  107 => 40,  101 => 36,  94 => 32,  86 => 27,  78 => 22,  71 => 18,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"row col l4\">
<div class=\"col l4\">
    <iframe class=\"card large z-depth-5\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2169727146634!2d4.841073951561579!3d45.746795979002826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDQ0JzQ4LjUiTiA0wrA1MCczNS44IkU!5e0!3m2!1sfr!2sfr!4v1515673350762\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
</div>

    <div class=\"container center col l8\">
    {{ form_start(form) }}

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        {{ form_errors(form.subject) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\">nom | pseudo</label>
        {{ form_errors(form.name) }}
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Email</label>
        {{ form_errors(form.email) }}
    </div>
    <div>
        <input class=\"input\" type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        {{ form_errors(form.message) }}
    </div>

    {# Render CSRF token etc .#}
    <div style=\"display:none\">
        {{ form_rest(form) }}
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"fct()\">
    {{ form_end(form) }}

</div>
</div>

    <script>function fct(){
        Materialize.toast('MESSAGE ENVOYÉ', 4000)
        }</script>


{% endblock %}


", "::contact.html.twig", "/home/fabien/mecacorp/app/Resources/views/contact.html.twig");
    }
}
