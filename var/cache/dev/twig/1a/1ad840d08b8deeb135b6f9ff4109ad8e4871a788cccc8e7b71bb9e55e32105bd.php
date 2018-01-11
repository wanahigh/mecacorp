<?php

/* actors/index.html.twig */
class __TwigTemplate_3425300761e105d7093ec33cef7609426b783ef2f4e53a426381ef0929081275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "actors/index.html.twig", 2);
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
        $__internal_da8a3a269538a769e401763dd13ae586c7c82e26fe2a43444d73306f7d1ae2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8a3a269538a769e401763dd13ae586c7c82e26fe2a43444d73306f7d1ae2ba->enter($__internal_da8a3a269538a769e401763dd13ae586c7c82e26fe2a43444d73306f7d1ae2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_e3d05996355e8b6509c87cbd286174f4ad5056c9622d428ee71e75f4451a16dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d05996355e8b6509c87cbd286174f4ad5056c9622d428ee71e75f4451a16dc->enter($__internal_e3d05996355e8b6509c87cbd286174f4ad5056c9622d428ee71e75f4451a16dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da8a3a269538a769e401763dd13ae586c7c82e26fe2a43444d73306f7d1ae2ba->leave($__internal_da8a3a269538a769e401763dd13ae586c7c82e26fe2a43444d73306f7d1ae2ba_prof);

        
        $__internal_e3d05996355e8b6509c87cbd286174f4ad5056c9622d428ee71e75f4451a16dc->leave($__internal_e3d05996355e8b6509c87cbd286174f4ad5056c9622d428ee71e75f4451a16dc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb740fc6efb41624647970e8dbc0b44a96ac9b08b825f184e12425fedc2d953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb740fc6efb41624647970e8dbc0b44a96ac9b08b825f184e12425fedc2d953->enter($__internal_dbb740fc6efb41624647970e8dbc0b44a96ac9b08b825f184e12425fedc2d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a645221819dacf1b9d87c0913c88531eedba4749c9960520764d0454dfeb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a645221819dacf1b9d87c0913c88531eedba4749c9960520764d0454dfeb38->enter($__internal_d7a645221819dacf1b9d87c0913c88531eedba4749c9960520764d0454dfeb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        section{
    background-color: #0D47A1;

        }
    </style>

    <h1 class=\"header\">LE CLUSTER</h1>
    <table>

        ";
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 17
            echo "            <div  class=\"row\">

            <div  class=\"container\">
            <div  class=\"card medium z-depth-5 hover\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img  class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
            </div>
            <div  class=\"card-content\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo "</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</a></p>
            </div>
            <div  class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">phone</i> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">mail</i> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "mail", array()), "html", null, true);
            echo " </li>
            <li><i \" class=\"material-icons\">arrow</i> <blockquote> <strong>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "secteur", array()), "html", null, true);
            echo " </strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "description", array()), "html", null, true);
            echo "</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">linkedin</i> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
            <li><a  href=\"\"><i class=\"material-icons\">twitter</i> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</a> </li>
            <li><i  class=\"material-icons\">instragram</i> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo " </li>
            <li></li>
            <li>  ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "competences", array()), "html", null, true);
            echo " </li>
            </ul>
            <ul>
            <li>
            <a class=\"btn-large green\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">Voir +</a>
            </li>
            </ul>
            </div>
            </div>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </table>
    ";
        // line 55
        echo "    <div class=\"navigation\">
        ";
        // line 56
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 56, $this->getSourceContext()); })()));
        echo "
    </div>






";
        
        $__internal_d7a645221819dacf1b9d87c0913c88531eedba4749c9960520764d0454dfeb38->leave($__internal_d7a645221819dacf1b9d87c0913c88531eedba4749c9960520764d0454dfeb38_prof);

        
        $__internal_dbb740fc6efb41624647970e8dbc0b44a96ac9b08b825f184e12425fedc2d953->leave($__internal_dbb740fc6efb41624647970e8dbc0b44a96ac9b08b825f184e12425fedc2d953_prof);

    }

    public function getTemplateName()
    {
        return "actors/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  153 => 55,  150 => 53,  136 => 45,  129 => 41,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  88 => 29,  82 => 26,  76 => 25,  66 => 17,  61 => 16,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    <style>
        section{
    background-color: #0D47A1;

        }
    </style>

    <h1 class=\"header\">LE CLUSTER</h1>
    <table>

        {# table body #}
        {% for actor in pagination %}
            <div  class=\"row\">

            <div  class=\"container\">
            <div  class=\"card medium z-depth-5 hover\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img  class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
            </div>
            <div  class=\"card-content\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">{{ actor.raisonsocial }}</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">{{ actor.siteweb }}</a></p>
            </div>
            <div  class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>{{ actor.nomdudirigeant }}<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>{{ actor.adresse }} </li>
            <li><i  class=\"material-icons\">phone</i> {{ actor.tel }} </li>
            <li><i  class=\"material-icons\">mail</i> {{ actor.mail }} </li>
            <li><i \" class=\"material-icons\">arrow</i> <blockquote> <strong>{{ actor.secteur}} </strong> {{ actor.description }}</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> {{ actor.facebook }} </li>
            <li><i  class=\"material-icons\">linkedin</i> {{ actor.linkedin }} </li>
            <li><a  href=\"\"><i class=\"material-icons\">twitter</i> {{actor.twitter }}</a> </li>
            <li><i  class=\"material-icons\">instragram</i> {{ actor.instagram }} </li>
            <li></li>
            <li>  {{ actor.competences }} </li>
            </ul>
            <ul>
            <li>
            <a class=\"btn-large green\" href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">Voir +</a>
            </li>
            </ul>
            </div>
            </div>
            </div>
            </div>
        {% endfor %}
    </table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>






{% endblock %}
", "actors/index.html.twig", "/home/fabien/mecacorp/app/Resources/views/actors/index.html.twig");
    }
}
