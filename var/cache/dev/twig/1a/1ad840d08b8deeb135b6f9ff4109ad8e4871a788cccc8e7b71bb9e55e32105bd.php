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
        $__internal_694d6ced23249655985901d7975b75cde7904f3d644729d8ac6fbc5afd08f633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694d6ced23249655985901d7975b75cde7904f3d644729d8ac6fbc5afd08f633->enter($__internal_694d6ced23249655985901d7975b75cde7904f3d644729d8ac6fbc5afd08f633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_8dcfb599b964ad62dc117abe35785f05064bc7c5db31361ad25a752ca2472cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcfb599b964ad62dc117abe35785f05064bc7c5db31361ad25a752ca2472cf4->enter($__internal_8dcfb599b964ad62dc117abe35785f05064bc7c5db31361ad25a752ca2472cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694d6ced23249655985901d7975b75cde7904f3d644729d8ac6fbc5afd08f633->leave($__internal_694d6ced23249655985901d7975b75cde7904f3d644729d8ac6fbc5afd08f633_prof);

        
        $__internal_8dcfb599b964ad62dc117abe35785f05064bc7c5db31361ad25a752ca2472cf4->leave($__internal_8dcfb599b964ad62dc117abe35785f05064bc7c5db31361ad25a752ca2472cf4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c1d3ad89cf824fca99e4d47e833fdda4b2da6741611d00e5a514c9314e260a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c1d3ad89cf824fca99e4d47e833fdda4b2da6741611d00e5a514c9314e260a->enter($__internal_b8c1d3ad89cf824fca99e4d47e833fdda4b2da6741611d00e5a514c9314e260a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7a87a8f11bcccc77a3f1d0cf518d50ba16b4fa5a5f87d1c095dcc779fecbb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a87a8f11bcccc77a3f1d0cf518d50ba16b4fa5a5f87d1c095dcc779fecbb40->enter($__internal_f7a87a8f11bcccc77a3f1d0cf518d50ba16b4fa5a5f87d1c095dcc779fecbb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <h1 class=\"header\">LE CLUSTER</h1>



    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) || array_key_exists("actors", $context) ? $context["actors"] : (function () { throw new Twig_Error_Runtime('Variable "actors" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 12
            echo "        <div class=\"container\">
            <div class=\"card medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo "</a><i class=\"material-icons right\">more_vert</i></span>
                    <p><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</a></p>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                    <ul>
                        <li> <i class=\"material-icons\">place</i>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
                        <li><i class=\"material-icons\">phone</i> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
                        <li><i class=\"material-icons\">mail</i> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "mail", array()), "html", null, true);
            echo " </li>
                        <li> <i class=\"material-icons\">facebook</i> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo " </li>
                        <li><i class=\"material-icons\">linkedin</i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
                        <li> <i class=\"material-icons\">twitter</i> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo " </li>
                        <li><i class=\"material-icons\">instragram</i> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo " </li>
                        <li>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "secteur", array()), "html", null, true);
            echo " </li>
                        <li><i class=\"material-icons\">arrow</i>  ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "description", array()), "html", null, true);
            echo " </li>
                        <li>  ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "competences", array()), "html", null, true);
            echo " </li>
                        <li> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo " </li>
                    </ul>
                        <ul>
                            <li>
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "








";
        
        $__internal_f7a87a8f11bcccc77a3f1d0cf518d50ba16b4fa5a5f87d1c095dcc779fecbb40->leave($__internal_f7a87a8f11bcccc77a3f1d0cf518d50ba16b4fa5a5f87d1c095dcc779fecbb40_prof);

        
        $__internal_b8c1d3ad89cf824fca99e4d47e833fdda4b2da6741611d00e5a514c9314e260a->leave($__internal_b8c1d3ad89cf824fca99e4d47e833fdda4b2da6741611d00e5a514c9314e260a_prof);

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
        return array (  146 => 45,  133 => 38,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  81 => 22,  75 => 19,  69 => 18,  61 => 12,  57 => 11,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}


    <h1 class=\"header\">LE CLUSTER</h1>



    {% for actor in actors %}
        <div class=\"container\">
            <div class=\"card medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator grey-text text-darken-4\"><a href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">{{ actor.raisonsocial }}</a><i class=\"material-icons right\">more_vert</i></span>
                    <p><a href=\"#\">{{ actor.siteweb }}</a></p>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>{{ actor.nomdudirigeant }}<i class=\"material-icons right\">close</i></span>
                    <ul>
                        <li> <i class=\"material-icons\">place</i>{{ actor.adresse }} </li>
                        <li><i class=\"material-icons\">phone</i> {{ actor.tel }} </li>
                        <li><i class=\"material-icons\">mail</i> {{ actor.mail }} </li>
                        <li> <i class=\"material-icons\">facebook</i> {{ actor.facebook }} </li>
                        <li><i class=\"material-icons\">linkedin</i> {{ actor.linkedin }} </li>
                        <li> <i class=\"material-icons\">twitter</i> {{actor.twitter }} </li>
                        <li><i class=\"material-icons\">instragram</i> {{ actor.instagram }} </li>
                        <li>{{ actor.secteur}} </li>
                        <li><i class=\"material-icons\">arrow</i>  {{ actor.description }} </li>
                        <li>  {{ actor.competences }} </li>
                        <li> {{ actor.raisonsocial }} </li>
                    </ul>
                        <ul>
                            <li>
                                <a href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">show</a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    {% endfor %}









{% endblock %}
", "actors/index.html.twig", "/home/fabien/symfony-stg/app/Resources/views/actors/index.html.twig");
    }
}
