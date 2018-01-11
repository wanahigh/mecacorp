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
        $__internal_1b4e449d16959bd5896f7c3119001101f260ad18883d5b2883966f5d28a550f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4e449d16959bd5896f7c3119001101f260ad18883d5b2883966f5d28a550f2->enter($__internal_1b4e449d16959bd5896f7c3119001101f260ad18883d5b2883966f5d28a550f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_eee0da56e1a60eb8e7cbbfdeb9bb54c0a17f4d18d7c291bd816b0577ded2526b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee0da56e1a60eb8e7cbbfdeb9bb54c0a17f4d18d7c291bd816b0577ded2526b->enter($__internal_eee0da56e1a60eb8e7cbbfdeb9bb54c0a17f4d18d7c291bd816b0577ded2526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b4e449d16959bd5896f7c3119001101f260ad18883d5b2883966f5d28a550f2->leave($__internal_1b4e449d16959bd5896f7c3119001101f260ad18883d5b2883966f5d28a550f2_prof);

        
        $__internal_eee0da56e1a60eb8e7cbbfdeb9bb54c0a17f4d18d7c291bd816b0577ded2526b->leave($__internal_eee0da56e1a60eb8e7cbbfdeb9bb54c0a17f4d18d7c291bd816b0577ded2526b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f962377e2fe2772505cd19179e837044bb8fdecfc8f7155dd06f18a333c3de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f962377e2fe2772505cd19179e837044bb8fdecfc8f7155dd06f18a333c3de6->enter($__internal_1f962377e2fe2772505cd19179e837044bb8fdecfc8f7155dd06f18a333c3de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_642b84d7454dc6d08cc402cb82aab1f0ca49e72d4ee712ea01df6d6b24a16bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642b84d7454dc6d08cc402cb82aab1f0ca49e72d4ee712ea01df6d6b24a16bd7->enter($__internal_642b84d7454dc6d08cc402cb82aab1f0ca49e72d4ee712ea01df6d6b24a16bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <img  class=\"activator\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "image", array()), "html", null, true);
            echo "\">
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
        
        $__internal_642b84d7454dc6d08cc402cb82aab1f0ca49e72d4ee712ea01df6d6b24a16bd7->leave($__internal_642b84d7454dc6d08cc402cb82aab1f0ca49e72d4ee712ea01df6d6b24a16bd7_prof);

        
        $__internal_1f962377e2fe2772505cd19179e837044bb8fdecfc8f7155dd06f18a333c3de6->leave($__internal_1f962377e2fe2772505cd19179e837044bb8fdecfc8f7155dd06f18a333c3de6_prof);

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
        return array (  159 => 56,  156 => 55,  153 => 53,  139 => 45,  132 => 41,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  91 => 29,  85 => 26,  79 => 25,  73 => 22,  66 => 17,  61 => 16,  49 => 5,  40 => 4,  11 => 2,);
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
            <img  class=\"activator\" src=\"{{ actor.image }}\">
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
