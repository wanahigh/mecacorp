<?php

/* :actors:index.html.twig */
class __TwigTemplate_3425300761e105d7093ec33cef7609426b783ef2f4e53a426381ef0929081275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":actors:index.html.twig", 2);
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
        $__internal_a6de1e83695b9ea27f508054e77a7e2eb2b88e6ed187c6ef3387cb4935281656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6de1e83695b9ea27f508054e77a7e2eb2b88e6ed187c6ef3387cb4935281656->enter($__internal_a6de1e83695b9ea27f508054e77a7e2eb2b88e6ed187c6ef3387cb4935281656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actors:index.html.twig"));

        $__internal_578fc605d433e1302082b78327cc81443bf5a040b841f189d7d672560452f68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578fc605d433e1302082b78327cc81443bf5a040b841f189d7d672560452f68a->enter($__internal_578fc605d433e1302082b78327cc81443bf5a040b841f189d7d672560452f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actors:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6de1e83695b9ea27f508054e77a7e2eb2b88e6ed187c6ef3387cb4935281656->leave($__internal_a6de1e83695b9ea27f508054e77a7e2eb2b88e6ed187c6ef3387cb4935281656_prof);

        
        $__internal_578fc605d433e1302082b78327cc81443bf5a040b841f189d7d672560452f68a->leave($__internal_578fc605d433e1302082b78327cc81443bf5a040b841f189d7d672560452f68a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_530faae79f3e8f09201f77628b091d8a5d2b5a1e9c44dc419b1896106d9c96cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530faae79f3e8f09201f77628b091d8a5d2b5a1e9c44dc419b1896106d9c96cc->enter($__internal_530faae79f3e8f09201f77628b091d8a5d2b5a1e9c44dc419b1896106d9c96cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b676287045770a1ebcb3922ae8f50620fc6c32f7ff6bf71b154d5ef3bd1f5ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b676287045770a1ebcb3922ae8f50620fc6c32f7ff6bf71b154d5ef3bd1f5ea5->enter($__internal_b676287045770a1ebcb3922ae8f50620fc6c32f7ff6bf71b154d5ef3bd1f5ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b676287045770a1ebcb3922ae8f50620fc6c32f7ff6bf71b154d5ef3bd1f5ea5->leave($__internal_b676287045770a1ebcb3922ae8f50620fc6c32f7ff6bf71b154d5ef3bd1f5ea5_prof);

        
        $__internal_530faae79f3e8f09201f77628b091d8a5d2b5a1e9c44dc419b1896106d9c96cc->leave($__internal_530faae79f3e8f09201f77628b091d8a5d2b5a1e9c44dc419b1896106d9c96cc_prof);

    }

    public function getTemplateName()
    {
        return ":actors:index.html.twig";
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
", ":actors:index.html.twig", "/home/fabien/Modèles/mecacorp/app/Resources/views/actors/index.html.twig");
    }
}
