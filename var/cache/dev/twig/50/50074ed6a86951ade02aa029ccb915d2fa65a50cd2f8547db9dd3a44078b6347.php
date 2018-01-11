<?php

/* entity/advert/show.html.twig */
class __TwigTemplate_19fcd8277d1ee29c0a3cbb126777e5c419bd7a2970fbfd1d7c6f48609a92d994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "entity/advert/show.html.twig", 1);
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
        $__internal_b6a1db8b16950878f2f50b1009f431270a813f04bf03872767bfb16b1bd60ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a1db8b16950878f2f50b1009f431270a813f04bf03872767bfb16b1bd60ada->enter($__internal_b6a1db8b16950878f2f50b1009f431270a813f04bf03872767bfb16b1bd60ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/advert/show.html.twig"));

        $__internal_0b288110d6adee71a3660fdf26d74b2bf794e2921eaf343b2607a7ed7c005e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b288110d6adee71a3660fdf26d74b2bf794e2921eaf343b2607a7ed7c005e2a->enter($__internal_0b288110d6adee71a3660fdf26d74b2bf794e2921eaf343b2607a7ed7c005e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/advert/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a1db8b16950878f2f50b1009f431270a813f04bf03872767bfb16b1bd60ada->leave($__internal_b6a1db8b16950878f2f50b1009f431270a813f04bf03872767bfb16b1bd60ada_prof);

        
        $__internal_0b288110d6adee71a3660fdf26d74b2bf794e2921eaf343b2607a7ed7c005e2a->leave($__internal_0b288110d6adee71a3660fdf26d74b2bf794e2921eaf343b2607a7ed7c005e2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13d36d4055a4205f280f5ce1846c070e6b237716f906cf090b433140f69a04d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d36d4055a4205f280f5ce1846c070e6b237716f906cf090b433140f69a04d6->enter($__internal_13d36d4055a4205f280f5ce1846c070e6b237716f906cf090b433140f69a04d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_855029e56a2f36f585b0d5134ab7eda8617312b102443259cb60e30ca6852a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855029e56a2f36f585b0d5134ab7eda8617312b102443259cb60e30ca6852a1b->enter($__internal_855029e56a2f36f585b0d5134ab7eda8617312b102443259cb60e30ca6852a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"header\">  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 4, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 9, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                    <article id=\"two card-panel\">


                        <p><a class=\"card red\" href=\"\">
                                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" height=\"300px\" width=\"600px\" ></a>
                            <i class=\"material-icons\">swatch</i>";
        // line 15
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 15, $this->getSourceContext()); })()), "date", array()), "Y-m-d H"), "html", null, true);
        }
        // line 16
        echo "
                        <blockquote>  <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">  ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo "</strong></blockquote>
                        <hr>
                        </p>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 20, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "

                    </article>
    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\" class=\"btn-large blue\" >Retour</a>
        </li>
        <li>
            <a  class=\"btn-large green\"href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 28, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Editer</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input class=\"btn red\" type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_855029e56a2f36f585b0d5134ab7eda8617312b102443259cb60e30ca6852a1b->leave($__internal_855029e56a2f36f585b0d5134ab7eda8617312b102443259cb60e30ca6852a1b_prof);

        
        $__internal_13d36d4055a4205f280f5ce1846c070e6b237716f906cf090b433140f69a04d6->leave($__internal_13d36d4055a4205f280f5ce1846c070e6b237716f906cf090b433140f69a04d6_prof);

    }

    public function getTemplateName()
    {
        return "entity/advert/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  103 => 31,  97 => 28,  91 => 25,  83 => 20,  77 => 17,  74 => 16,  70 => 15,  66 => 14,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"header\">  {{ advert.title }}</h1>

    <table>
        <tbody>
            <tr>
                <td>{{ advert.id }}</td>
                    <article id=\"two card-panel\">


                        <p><a class=\"card red\" href=\"\">
                                <img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"300px\" width=\"600px\" ></a>
                            <i class=\"material-icons\">swatch</i>{% if advert.date %}{{ advert.date|date('Y-m-d H') }}{% endif %}

                        <blockquote>  <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">  {{ advert.author }}</strong></blockquote>
                        <hr>
                        </p>
                        {{ advert.content }}

                    </article>
    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\" class=\"btn-large blue\" >Retour</a>
        </li>
        <li>
            <a  class=\"btn-large green\"href=\"{{ path('entity_advert_edit', { 'id': advert.id }) }}\">Editer</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn red\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "entity/advert/show.html.twig", "/home/fabien/mecacorp/app/Resources/views/entity/advert/show.html.twig");
    }
}
