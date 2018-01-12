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
        $__internal_371ce18451d86a328e330b50b1dcc295508476dbb056918eaebbe6b557ed7bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371ce18451d86a328e330b50b1dcc295508476dbb056918eaebbe6b557ed7bbf->enter($__internal_371ce18451d86a328e330b50b1dcc295508476dbb056918eaebbe6b557ed7bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_c47ef65ca1f327ff8c05c0fb0c594136b214ecaaaa0f5796e2692510dd0de43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47ef65ca1f327ff8c05c0fb0c594136b214ecaaaa0f5796e2692510dd0de43d->enter($__internal_c47ef65ca1f327ff8c05c0fb0c594136b214ecaaaa0f5796e2692510dd0de43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_371ce18451d86a328e330b50b1dcc295508476dbb056918eaebbe6b557ed7bbf->leave($__internal_371ce18451d86a328e330b50b1dcc295508476dbb056918eaebbe6b557ed7bbf_prof);

        
        $__internal_c47ef65ca1f327ff8c05c0fb0c594136b214ecaaaa0f5796e2692510dd0de43d->leave($__internal_c47ef65ca1f327ff8c05c0fb0c594136b214ecaaaa0f5796e2692510dd0de43d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a82986aa7855ca19f78ebfd32eed1abeebcf56f101163ca004e6874068855e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a82986aa7855ca19f78ebfd32eed1abeebcf56f101163ca004e6874068855e0->enter($__internal_4a82986aa7855ca19f78ebfd32eed1abeebcf56f101163ca004e6874068855e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6f9d982f25d2d12d595d59cbbaa0d52434161a86589f706c736349aadfbca56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f9d982f25d2d12d595d59cbbaa0d52434161a86589f706c736349aadfbca56->enter($__internal_a6f9d982f25d2d12d595d59cbbaa0d52434161a86589f706c736349aadfbca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h1 class=\"header\">LE CLUSTER</h1>
    <table>

        ";
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 11
            echo "            <div  class=\"row\">

            <div  class=\"container\">
            <div  class=\"card medium z-depth-5 hover black\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img id=\"blur\" class=\"activator\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "image", array()))), "html", null, true);
            echo "\" height=\"300px\" width=\"600px\">

            </div>
            <div  class=\"card-content z-depth-10 white\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo "</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</a></p>
            </div>
            <div  class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">phone</i> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">mail</i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "mail", array()), "html", null, true);
            echo " </li>
            <li><i \" class=\"material-icons\">arrow</i> <blockquote> <strong>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "secteur", array()), "html", null, true);
            echo " </strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "description", array()), "html", null, true);
            echo "</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">linkedin</i> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
            <li><a  href=\"\"><i class=\"material-icons\">twitter</i> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</a> </li>
            <li><i  class=\"material-icons\">instragram</i> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo " </li>
            <li></li>
            <li>  ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "competences", array()), "html", null, true);
            echo " </li>
            </ul>
            <ul>
            <li>
            <a class=\"btn-large green\" href=\"";
            // line 40
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
        // line 48
        echo "    </table>
    ";
        // line 50
        echo "    <div class=\"navigation\">
        ";
        // line 51
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 51, $this->getSourceContext()); })()));
        echo "
    </div>






";
        
        $__internal_a6f9d982f25d2d12d595d59cbbaa0d52434161a86589f706c736349aadfbca56->leave($__internal_a6f9d982f25d2d12d595d59cbbaa0d52434161a86589f706c736349aadfbca56_prof);

        
        $__internal_4a82986aa7855ca19f78ebfd32eed1abeebcf56f101163ca004e6874068855e0->leave($__internal_4a82986aa7855ca19f78ebfd32eed1abeebcf56f101163ca004e6874068855e0_prof);

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
        return array (  154 => 51,  151 => 50,  148 => 48,  134 => 40,  127 => 36,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  86 => 24,  80 => 21,  74 => 20,  67 => 16,  60 => 11,  55 => 10,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}

    <h1 class=\"header\">LE CLUSTER</h1>
    <table>

        {# table body #}
        {% for actor in pagination %}
            <div  class=\"row\">

            <div  class=\"container\">
            <div  class=\"card medium z-depth-5 hover black\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img id=\"blur\" class=\"activator\" src=\"{{ asset('uploads/images/' ~  actor.image ) }}\" height=\"300px\" width=\"600px\">

            </div>
            <div  class=\"card-content z-depth-10 white\">
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
", "actors/index.html.twig", "/home/sunshine/Documents/mecacorp/app/Resources/views/actors/index.html.twig");
    }
}
