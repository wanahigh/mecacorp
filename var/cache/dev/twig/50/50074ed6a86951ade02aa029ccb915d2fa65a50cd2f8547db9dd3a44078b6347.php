<?php

/* :entity/advert:show.html.twig */
class __TwigTemplate_19fcd8277d1ee29c0a3cbb126777e5c419bd7a2970fbfd1d7c6f48609a92d994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:show.html.twig", 1);
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
        $__internal_7c7598db96a0c4acbfb86409d2d4624f24b14038e6845112972fbde9f1803d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7598db96a0c4acbfb86409d2d4624f24b14038e6845112972fbde9f1803d9d->enter($__internal_7c7598db96a0c4acbfb86409d2d4624f24b14038e6845112972fbde9f1803d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:show.html.twig"));

        $__internal_17ab29e0555ceabd2554f70eceec935c34b1c66c3b6e31fae303d2cc8cff2dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ab29e0555ceabd2554f70eceec935c34b1c66c3b6e31fae303d2cc8cff2dca->enter($__internal_17ab29e0555ceabd2554f70eceec935c34b1c66c3b6e31fae303d2cc8cff2dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c7598db96a0c4acbfb86409d2d4624f24b14038e6845112972fbde9f1803d9d->leave($__internal_7c7598db96a0c4acbfb86409d2d4624f24b14038e6845112972fbde9f1803d9d_prof);

        
        $__internal_17ab29e0555ceabd2554f70eceec935c34b1c66c3b6e31fae303d2cc8cff2dca->leave($__internal_17ab29e0555ceabd2554f70eceec935c34b1c66c3b6e31fae303d2cc8cff2dca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c2cdbdcfb9bdf4d5dc19cdd0bc662bb44635bb73c77d5b0315ff6d8f67f75f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2cdbdcfb9bdf4d5dc19cdd0bc662bb44635bb73c77d5b0315ff6d8f67f75f9->enter($__internal_8c2cdbdcfb9bdf4d5dc19cdd0bc662bb44635bb73c77d5b0315ff6d8f67f75f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_170a07e58637e9baf9e829a6b3f152407e92215b47c0746c0575f916fb94ac63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170a07e58637e9baf9e829a6b3f152407e92215b47c0746c0575f916fb94ac63->enter($__internal_170a07e58637e9baf9e829a6b3f152407e92215b47c0746c0575f916fb94ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 14, $this->getSourceContext()); })()), "date", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 18, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 22, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 26, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 30, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" height=\"100px\" width=\"250px\"></td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 34, $this->getSourceContext()); })()), "categories", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\" class=\"btn-large blue\" >Retour</a>
        </li>
        <li>
            <a  class=\"btn-large green\"href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 44, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Editer</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 47, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input class=\"btn red\" type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 49, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_170a07e58637e9baf9e829a6b3f152407e92215b47c0746c0575f916fb94ac63->leave($__internal_170a07e58637e9baf9e829a6b3f152407e92215b47c0746c0575f916fb94ac63_prof);

        
        $__internal_8c2cdbdcfb9bdf4d5dc19cdd0bc662bb44635bb73c77d5b0315ff6d8f67f75f9->leave($__internal_8c2cdbdcfb9bdf4d5dc19cdd0bc662bb44635bb73c77d5b0315ff6d8f67f75f9_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 47,  117 => 44,  111 => 41,  101 => 34,  94 => 30,  87 => 26,  80 => 22,  73 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ advert.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if advert.date %}{{ advert.date|date('Y-m-d H:i') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ advert.title }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ advert.author }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ advert.content }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td><img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"100px\" width=\"250px\"></td>
            </tr>
            <tr>
                <th>Categories</th>
                <td>{{ advert.categories }}</td>
            </tr>
        </tbody>
    </table>

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
", ":entity/advert:show.html.twig", "/var/www/monsite1/mecacorp/app/Resources/views/entity/advert/show.html.twig");
    }
}
