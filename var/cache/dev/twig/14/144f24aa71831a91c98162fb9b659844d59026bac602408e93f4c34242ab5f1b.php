<?php

/* :entity/advert:index.html.twig */
class __TwigTemplate_663b3a9dfb9e6933a5e4f84547f82ed26be1a4dc6286b61de001e22392c77f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":entity/advert:index.html.twig", 1);
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
        $__internal_042c877246f6b0cc4d2ec48ba7d47eb84e59beb15802d9bf5276a2918d15dfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042c877246f6b0cc4d2ec48ba7d47eb84e59beb15802d9bf5276a2918d15dfca->enter($__internal_042c877246f6b0cc4d2ec48ba7d47eb84e59beb15802d9bf5276a2918d15dfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:index.html.twig"));

        $__internal_94e3af2dfd82b45447ef6c8a0c9f60be86c5f66df1dfc05a18330af74f274c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e3af2dfd82b45447ef6c8a0c9f60be86c5f66df1dfc05a18330af74f274c2f->enter($__internal_94e3af2dfd82b45447ef6c8a0c9f60be86c5f66df1dfc05a18330af74f274c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042c877246f6b0cc4d2ec48ba7d47eb84e59beb15802d9bf5276a2918d15dfca->leave($__internal_042c877246f6b0cc4d2ec48ba7d47eb84e59beb15802d9bf5276a2918d15dfca_prof);

        
        $__internal_94e3af2dfd82b45447ef6c8a0c9f60be86c5f66df1dfc05a18330af74f274c2f->leave($__internal_94e3af2dfd82b45447ef6c8a0c9f60be86c5f66df1dfc05a18330af74f274c2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_557742665c95995e3a470d6fd8f78f4de9d7b611c27968540d91166bd83095c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557742665c95995e3a470d6fd8f78f4de9d7b611c27968540d91166bd83095c5->enter($__internal_557742665c95995e3a470d6fd8f78f4de9d7b611c27968540d91166bd83095c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9ae442ed0302c9d7588667656cd4ebd709a256f4a4c73136fe0f57f2c1e94f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ae442ed0302c9d7588667656cd4ebd709a256f4a4c73136fe0f57f2c1e94f5->enter($__internal_b9ae442ed0302c9d7588667656cd4ebd709a256f4a4c73136fe0f57f2c1e94f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div class=\"container\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 9
            echo "<table>
    <section>
        <article id=\"two card-panel\">
            <h1> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</h1>
            <p>    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "image", array()))), "html", null, true);
            echo "\" height=\"150px\" width=\"300px\" ></a>
                <i class=\"material-icons\">swatch</i>";
            // line 15
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "Y-m-d H"), "html", null, true);
            }
            // line 16
            echo "
                <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo "</strong>
            <hr>
                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "content", array()), "html", null, true);
            echo " </p>

        </article>




    </section>

</table> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>  <div class=\"text-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 28, $this->getSourceContext()); })()));
        echo "</div>

    <div class=\"fixed-action-btn horizontal\">
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_new");
        echo "\" class=\"btn-floating btn-large red\">
            <i class=\"large material-icons\">mode_edit</i>
        </a>
        <ul>
            <li><a  class=\"btn-floating red\"><i class=\"material-icons\">insert_chart</i></a></li>
            <li><a class=\"btn-floating yellow darken-1\"><i class=\"material-icons\">format_quote</i></a></li>
            <li><a class=\"btn-floating green\"><i class=\"material-icons\">publish</i></a></li>
            <li><a class=\"btn-floating blue\"><i class=\"material-icons\">attach_file</i></a></li>
        </ul>
    </div>


    <style>@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
        * {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        html, body {
            min-height: 100%;
        }

        body {
            background-color:dimgrey;
            font-size: 15px;
            color: #554E49;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        h1 {
            font-weight: 300;
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }


        section {
            position: relative;
            margin-left: 4em;
            max-width: 40em;
            padding: 2.5em 0;
        }
        section:before {
            height: 100%;
            width: 1px;
            background-color: red;
            content: \"\";
            position: absolute;
            left: -2em;
            top: 0;
        }
        section article {
            position: relative;
            background: #f5f6f6;
            width: 100%;
            padding: 1.333em;
            margin-bottom: 2.5em;
            transition: all 0.5s ease;
        }
        section article:last-child {
            margin-bottom: 0;
        }
        section article:before {
            content: \"\";
            width: 1px;
            height: 2.7em;
            background: red;
            position: absolute;
            left: -1em;
            top: -2.3em;
            transform: rotate(-45deg);
            transition: all 0.5s ease;
        }
        section article:after {
            content: \"\";
            width: 0.667em;
            height: 0.667em;
            position: absolute;
            background: red;
            top: 0;
            left: 0;
            transition: all 0.5s ease;
        }
        section article:hover {
            box-shadow: 0 0 0 0.667em #554E49;
        }
        section article:hover:before, section article:hover:after {
            background: #FAA718;
        }
    </style>
    <script>\$('a').click(function(){
            \$('html, body').animate({
                scrollTop: \$(\$(this).attr('href')).offset().top - 30
            }, 500);
            return false;
        });</script>
";
        
        $__internal_b9ae442ed0302c9d7588667656cd4ebd709a256f4a4c73136fe0f57f2c1e94f5->leave($__internal_b9ae442ed0302c9d7588667656cd4ebd709a256f4a4c73136fe0f57f2c1e94f5_prof);

        
        $__internal_557742665c95995e3a470d6fd8f78f4de9d7b611c27968540d91166bd83095c5->leave($__internal_557742665c95995e3a470d6fd8f78f4de9d7b611c27968540d91166bd83095c5_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  104 => 28,  88 => 19,  83 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}



<div class=\"container\">
        {% for advert in adverts %}
<table>
    <section>
        <article id=\"two card-panel\">
            <h1> {{ advert.title }}</h1>
            <p>    <a href=\"{{ path('entity_advert_show',{ 'id': advert.id }) }}\">
                    <img src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"150px\" width=\"300px\" ></a>
                <i class=\"material-icons\">swatch</i>{% if advert.date %}{{ advert.date|date('Y-m-d H') }}{% endif %}

                <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">{{ advert.author }}</strong>
            <hr>
                {{ advert.content }} </p>

        </article>




    </section>

</table> {% endfor %}</div>  <div class=\"text-center\">{{ knp_pagination_render(adverts) }}</div>

    <div class=\"fixed-action-btn horizontal\">
        <a href=\"{{ path('entity_advert_new') }}\" class=\"btn-floating btn-large red\">
            <i class=\"large material-icons\">mode_edit</i>
        </a>
        <ul>
            <li><a  class=\"btn-floating red\"><i class=\"material-icons\">insert_chart</i></a></li>
            <li><a class=\"btn-floating yellow darken-1\"><i class=\"material-icons\">format_quote</i></a></li>
            <li><a class=\"btn-floating green\"><i class=\"material-icons\">publish</i></a></li>
            <li><a class=\"btn-floating blue\"><i class=\"material-icons\">attach_file</i></a></li>
        </ul>
    </div>


    <style>@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
        * {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        html, body {
            min-height: 100%;
        }

        body {
            background-color:dimgrey;
            font-size: 15px;
            color: #554E49;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        h1 {
            font-weight: 300;
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }


        section {
            position: relative;
            margin-left: 4em;
            max-width: 40em;
            padding: 2.5em 0;
        }
        section:before {
            height: 100%;
            width: 1px;
            background-color: red;
            content: \"\";
            position: absolute;
            left: -2em;
            top: 0;
        }
        section article {
            position: relative;
            background: #f5f6f6;
            width: 100%;
            padding: 1.333em;
            margin-bottom: 2.5em;
            transition: all 0.5s ease;
        }
        section article:last-child {
            margin-bottom: 0;
        }
        section article:before {
            content: \"\";
            width: 1px;
            height: 2.7em;
            background: red;
            position: absolute;
            left: -1em;
            top: -2.3em;
            transform: rotate(-45deg);
            transition: all 0.5s ease;
        }
        section article:after {
            content: \"\";
            width: 0.667em;
            height: 0.667em;
            position: absolute;
            background: red;
            top: 0;
            left: 0;
            transition: all 0.5s ease;
        }
        section article:hover {
            box-shadow: 0 0 0 0.667em #554E49;
        }
        section article:hover:before, section article:hover:after {
            background: #FAA718;
        }
    </style>
    <script>\$('a').click(function(){
            \$('html, body').animate({
                scrollTop: \$(\$(this).attr('href')).offset().top - 30
            }, 500);
            return false;
        });</script>
{% endblock %}
", ":entity/advert:index.html.twig", "/home/fabien/symfony-stg/app/Resources/views/entity/advert/index.html.twig");
    }
}
