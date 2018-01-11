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
        $__internal_dbf88e1d7709ad6a276052d071ba99c7bdff6473d4c0ae7eae9850ace013da4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf88e1d7709ad6a276052d071ba99c7bdff6473d4c0ae7eae9850ace013da4b->enter($__internal_dbf88e1d7709ad6a276052d071ba99c7bdff6473d4c0ae7eae9850ace013da4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $__internal_5282a0002976517180c5356064b0ccee59aa625827232a1b57943f17f7bd1472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5282a0002976517180c5356064b0ccee59aa625827232a1b57943f17f7bd1472->enter($__internal_5282a0002976517180c5356064b0ccee59aa625827232a1b57943f17f7bd1472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf88e1d7709ad6a276052d071ba99c7bdff6473d4c0ae7eae9850ace013da4b->leave($__internal_dbf88e1d7709ad6a276052d071ba99c7bdff6473d4c0ae7eae9850ace013da4b_prof);

        
        $__internal_5282a0002976517180c5356064b0ccee59aa625827232a1b57943f17f7bd1472->leave($__internal_5282a0002976517180c5356064b0ccee59aa625827232a1b57943f17f7bd1472_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a451781114cfb94ba399df7b4262d073983782ed782539123ccdea78ffd55305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a451781114cfb94ba399df7b4262d073983782ed782539123ccdea78ffd55305->enter($__internal_a451781114cfb94ba399df7b4262d073983782ed782539123ccdea78ffd55305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52654c70ca2d9034f91aad941d0329aa34dc87e449df452bdb130e933cb0963e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52654c70ca2d9034f91aad941d0329aa34dc87e449df452bdb130e933cb0963e->enter($__internal_52654c70ca2d9034f91aad941d0329aa34dc87e449df452bdb130e933cb0963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<div class=\"row\">
<div class=\"col l4\">
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2784.2169727146634!2d4.841073951561579!3d45.746795979002826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!1s0x0%3A0x2b0aa8acf363740e!5e0!3m2!1sfr!2sfr!4v1515675127606\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></div>
<div class=\"row\">
    <div class=\"container center col l8\">
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\"> Sujet</label>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "subject", array()), 'errors');
        echo "
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\">Nom</label>
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
        <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Message</label>
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "message", array()), 'errors');
        echo "
    </div>

    ";
        // line 41
        echo "    <div style=\"display:none\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        echo "
    </div>

    <input class=\"btn-large pink\" type=\"submit\" value=\"Submit\" onclick=\"fct()\">
    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>
</div>

    <script>function fct(){
        Materialize.toast('MESSAGE ENVOYÉ', 2000)
        }</script>


";
        
        $__internal_52654c70ca2d9034f91aad941d0329aa34dc87e449df452bdb130e933cb0963e->leave($__internal_52654c70ca2d9034f91aad941d0329aa34dc87e449df452bdb130e933cb0963e_prof);

        
        $__internal_a451781114cfb94ba399df7b4262d073983782ed782539123ccdea78ffd55305->leave($__internal_a451781114cfb94ba399df7b4262d073983782ed782539123ccdea78ffd55305_prof);

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
        return array (  118 => 46,  111 => 42,  108 => 41,  102 => 37,  94 => 32,  86 => 27,  78 => 22,  70 => 17,  56 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
<div class=\"row\">
<div class=\"col l4\">
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2784.2169727146634!2d4.841073951561579!3d45.746795979002826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!1s0x0%3A0x2b0aa8acf363740e!5e0!3m2!1sfr!2sfr!4v1515675127606\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></div>
<div class=\"row\">
    <div class=\"container center col l8\">
    {{ form_start(form) }}

    <div>
        <input type=\"text\" required id=\"form.subject\" placeholder=\"Votre sujet\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\"> Sujet</label>
        {{ form_errors(form.subject) }}
    </div>
    <div>
        <input type=\"text\" required id=\"form.name\" placeholder=\"Votre nom\">
        <label for=\"text\" data-error=\"wrong\" data-success=\"right\">Nom</label>
        {{ form_errors(form.name) }}
    </div>
    <div>
        <input type=\"email\" required id=\"form.email\" placeholder=\"exemple@exemple.com\">
        <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Email</label>
        {{ form_errors(form.email) }}
    </div>
    <div>
        <input class=\"input\" type=\"text\" required id=\"form.message\" placeholder=\"Message\">
        <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Message</label>
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
        Materialize.toast('MESSAGE ENVOYÉ', 2000)
        }</script>


{% endblock %}


", "::contact.html.twig", "/home/fabien/mecacorp/app/Resources/views/contact.html.twig");
    }
}
