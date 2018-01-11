<?php

/* entity/advert/index.html.twig */
class __TwigTemplate_663b3a9dfb9e6933a5e4f84547f82ed26be1a4dc6286b61de001e22392c77f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "entity/advert/index.html.twig", 1);
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
        $__internal_317da8d638cf08bff878cb0e1c7518ebed82b9b60d6ba0cadaf3f4a0ac32cd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317da8d638cf08bff878cb0e1c7518ebed82b9b60d6ba0cadaf3f4a0ac32cd0b->enter($__internal_317da8d638cf08bff878cb0e1c7518ebed82b9b60d6ba0cadaf3f4a0ac32cd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/advert/index.html.twig"));

        $__internal_05f7f15ede1e82f41624e72b469b019121dd889e6f9c659c55d792bb439e13d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f7f15ede1e82f41624e72b469b019121dd889e6f9c659c55d792bb439e13d5->enter($__internal_05f7f15ede1e82f41624e72b469b019121dd889e6f9c659c55d792bb439e13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entity/advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317da8d638cf08bff878cb0e1c7518ebed82b9b60d6ba0cadaf3f4a0ac32cd0b->leave($__internal_317da8d638cf08bff878cb0e1c7518ebed82b9b60d6ba0cadaf3f4a0ac32cd0b_prof);

        
        $__internal_05f7f15ede1e82f41624e72b469b019121dd889e6f9c659c55d792bb439e13d5->leave($__internal_05f7f15ede1e82f41624e72b469b019121dd889e6f9c659c55d792bb439e13d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cc4dd894b87cbad29797116462e4e820792fc2810845e444678680436376e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc4dd894b87cbad29797116462e4e820792fc2810845e444678680436376e89->enter($__internal_7cc4dd894b87cbad29797116462e4e820792fc2810845e444678680436376e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c8aabed89b78e51e457b47a44ac61ab0206b5687049030b817047ebec35d9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8aabed89b78e51e457b47a44ac61ab0206b5687049030b817047ebec35d9b7->enter($__internal_7c8aabed89b78e51e457b47a44ac61ab0206b5687049030b817047ebec35d9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <article id=\"two card-panel\">

            <h1 class=\"header\"> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "</h1>
            <p>    <a class=\"card red\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    <img class=\"responsive\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "image", array()))), "html", null, true);
            echo "\" height=\"300px\" width=\"600px\" ></a>
                <i class=\"material-icons\">swatch</i>";
            // line 16
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "Y-m-d H"), "html", null, true);
            }
            // line 17
            echo "
                <blockquote>  <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">  ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo "</strong></blockquote>
            <a class=\"btn-large green\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">Lire</a>

            <hr>

            </p>



        </article>




</table> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>  <div class=\"text-center\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 32, $this->getSourceContext()); })()));
        echo "</div>


    <script>\$('a').click(function(){
            \$('html, body').animate({
                scrollTop: \$(\$(this).attr('href')).offset().top - 30
            }, 500);
            return false;
        });</script>
";
        
        $__internal_7c8aabed89b78e51e457b47a44ac61ab0206b5687049030b817047ebec35d9b7->leave($__internal_7c8aabed89b78e51e457b47a44ac61ab0206b5687049030b817047ebec35d9b7_prof);

        
        $__internal_7cc4dd894b87cbad29797116462e4e820792fc2810845e444678680436376e89->leave($__internal_7cc4dd894b87cbad29797116462e4e820792fc2810845e444678680436376e89_prof);

    }

    public function getTemplateName()
    {
        return "entity/advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}



<div class=\"container\">
        {% for advert in adverts %}
<table>

        <article id=\"two card-panel\">

            <h1 class=\"header\"> {{ advert.title }}</h1>
            <p>    <a class=\"card red\" href=\"{{ path('entity_advert_show',{ 'id': advert.id }) }}\">
                    <img class=\"responsive\" src=\"{{ asset('uploads/images/' ~ advert.image) }}\" height=\"300px\" width=\"600px\" ></a>
                <i class=\"material-icons\">swatch</i>{% if advert.date %}{{ advert.date|date('Y-m-d H') }}{% endif %}

                <blockquote>  <i class=\"material-icons\">book</i><strong style=\"color:dodgerblue;\">  {{ advert.author }}</strong></blockquote>
            <a class=\"btn-large green\" href=\"{{ path('entity_advert_show',{ 'id': advert.id }) }}\">Lire</a>

            <hr>

            </p>



        </article>




</table> {% endfor %}</div>  <div class=\"text-center\">{{ knp_pagination_render(adverts) }}</div>


    <script>\$('a').click(function(){
            \$('html, body').animate({
                scrollTop: \$(\$(this).attr('href')).offset().top - 30
            }, 500);
            return false;
        });</script>
{% endblock %}
", "entity/advert/index.html.twig", "/home/sunshine/Documents/mecacorp/app/Resources/views/entity/advert/index.html.twig");
    }
}
