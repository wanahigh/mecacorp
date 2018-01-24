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
        $__internal_0f3cb395a4f5ac88b3e6b08ac560455a49fababe6019df0bdad05fe3e748fc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3cb395a4f5ac88b3e6b08ac560455a49fababe6019df0bdad05fe3e748fc8d->enter($__internal_0f3cb395a4f5ac88b3e6b08ac560455a49fababe6019df0bdad05fe3e748fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_5e8012235dd5bab1617ec86d127c624d7552d0cdfc746fa26b94449a05265fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8012235dd5bab1617ec86d127c624d7552d0cdfc746fa26b94449a05265fb8->enter($__internal_5e8012235dd5bab1617ec86d127c624d7552d0cdfc746fa26b94449a05265fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3cb395a4f5ac88b3e6b08ac560455a49fababe6019df0bdad05fe3e748fc8d->leave($__internal_0f3cb395a4f5ac88b3e6b08ac560455a49fababe6019df0bdad05fe3e748fc8d_prof);

        
        $__internal_5e8012235dd5bab1617ec86d127c624d7552d0cdfc746fa26b94449a05265fb8->leave($__internal_5e8012235dd5bab1617ec86d127c624d7552d0cdfc746fa26b94449a05265fb8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9d7c5e462c0c3183b1274912b14817a1f377127ba68b5dc3c850b099585a8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9d7c5e462c0c3183b1274912b14817a1f377127ba68b5dc3c850b099585a8cb->enter($__internal_c9d7c5e462c0c3183b1274912b14817a1f377127ba68b5dc3c850b099585a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c2360a00157dc6763d91fee322d7ed0fd5894f7ef312c3649ced07abf3b89ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2360a00157dc6763d91fee322d7ed0fd5894f7ef312c3649ced07abf3b89ad->enter($__internal_4c2360a00157dc6763d91fee322d7ed0fd5894f7ef312c3649ced07abf3b89ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <style>
        nav .brand-logo {
            margin-left: 20px;
        }
        nav form {
            margin-left: 180px;
            width: 300px;
        }

        #actors{
            display:flex;
            margin-left:5%;
        }
        .material-icons{
            color:dodgerblue!important;
        }
    </style>


<div class=\"container\">
        <blockquote><h4 class=\"header\">Les acteurs de la filière \"Sport mécaniques & Mobilité Durable\"     </h4></blockquote>
        <hr>
        <p class=\"flowtext\">cet annuaire regroupe les coordonnées de tous les acteurs (entreprises, clubs, écoles, organisme de formation...) qui oeuvrent dans une ou plusieurs catégories de la filière \"Sport Mécanique et Mobilité Durable\" sur le territoire Alès Cévènnes.
        Vous recherchez un prestataire, un service, une formation dans ces métier? <strong>C'est ici</strong></p>


";
        // line 32
        echo "
    <div>
        <nav>
            <div class=\"nav-wrapper white z-depht-10\"><a class=\"brand-logo\" href=\"/\"><i class=\"material-icons\">search</i></a><a class=\"right button-collapse\" href=\"#\" data-activates=\"nav-mobile\"><i class=\"mdi-navigation-more-vert\"></i></a>


                <ul class=\"right hide-on-med-and-down\" id=\"nav-mobile\">

                    <a class='dropdown-button btn blue' href='#' data-activates='dropdown1'>Catégorie</a>

                    <ul id='dropdown1' class='dropdown-content'>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 44
            echo "                        <li><a href=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "categorie", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

                    </ul>

                </ul>

                <form class=\"red lighten-3\">
                    <div class=\"input-field\">
                        <input class=\"grey\" id=\"search\" type=\"search\"/>
                        <label for=\"search\"><i class=\"mdi-action-search\">MOTS CLEES</i></label><i class=\"mdi-navigation-close close\"></i>
                    </div>

                </form>
            </div>
        </nav>
    </div>
    <hr>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 63, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 64
            echo "            <div id=\"actors\">
            <div  class=\"card medium z-depth-5 hover white\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img id=\"blur\" class=\"activator\" src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "image", array()))), "html", null, true);
            echo "\" height=\"300px\" width=\"600px\">

            </div>
            <div  class=\"card-content z-depth-10 white\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo "</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</a></p>
            </div>
            <div  class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">phone</i> ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">mail</i> ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "mail", array()), "html", null, true);
            echo " </li>
            <li><i class=\"material-icons\">arrow</i> <blockquote> <strong>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "secteur", array()), "html", null, true);
            echo " </strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "description", array()), "html", null, true);
            echo "</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">linkedin</i> ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
            <li><a  href=\"\"><i class=\"material-icons\">twitter</i> ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</a> </li>
            <li><i  class=\"material-icons\">instragram</i> ";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo " </li>
            <li></li>
            <li>  ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "competences", array()), "html", null, true);
            echo " </li>
            </ul>
            <ul>
            <li>
            <a class=\"btn-large green\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">Voir +</a>
            </li>
            </ul>
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "</div>
    </table>
</div>
    <div class=\"navigation\">
        ";
        // line 101
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 101, $this->getSourceContext()); })()));
        echo "
    </div>






";
        
        $__internal_4c2360a00157dc6763d91fee322d7ed0fd5894f7ef312c3649ced07abf3b89ad->leave($__internal_4c2360a00157dc6763d91fee322d7ed0fd5894f7ef312c3649ced07abf3b89ad_prof);

        
        $__internal_c9d7c5e462c0c3183b1274912b14817a1f377127ba68b5dc3c850b099585a8cb->leave($__internal_c9d7c5e462c0c3183b1274912b14817a1f377127ba68b5dc3c850b099585a8cb_prof);

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
        return array (  216 => 101,  210 => 97,  198 => 91,  191 => 87,  186 => 85,  182 => 84,  178 => 83,  174 => 82,  167 => 80,  163 => 79,  159 => 78,  155 => 77,  150 => 75,  144 => 72,  138 => 71,  131 => 67,  126 => 64,  122 => 63,  103 => 46,  94 => 44,  90 => 43,  77 => 32,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    <style>
        nav .brand-logo {
            margin-left: 20px;
        }
        nav form {
            margin-left: 180px;
            width: 300px;
        }

        #actors{
            display:flex;
            margin-left:5%;
        }
        .material-icons{
            color:dodgerblue!important;
        }
    </style>


<div class=\"container\">
        <blockquote><h4 class=\"header\">Les acteurs de la filière \"Sport mécaniques & Mobilité Durable\"     </h4></blockquote>
        <hr>
        <p class=\"flowtext\">cet annuaire regroupe les coordonnées de tous les acteurs (entreprises, clubs, écoles, organisme de formation...) qui oeuvrent dans une ou plusieurs catégories de la filière \"Sport Mécanique et Mobilité Durable\" sur le territoire Alès Cévènnes.
        Vous recherchez un prestataire, un service, une formation dans ces métier? <strong>C'est ici</strong></p>


{#search bar#}

    <div>
        <nav>
            <div class=\"nav-wrapper white z-depht-10\"><a class=\"brand-logo\" href=\"/\"><i class=\"material-icons\">search</i></a><a class=\"right button-collapse\" href=\"#\" data-activates=\"nav-mobile\"><i class=\"mdi-navigation-more-vert\"></i></a>


                <ul class=\"right hide-on-med-and-down\" id=\"nav-mobile\">

                    <a class='dropdown-button btn blue' href='#' data-activates='dropdown1'>Catégorie</a>

                    <ul id='dropdown1' class='dropdown-content'>
                        {% for actor in pagination %}
                        <li><a href=\"\">{{  actor.categorie }}</a></li>
                        {% endfor %}


                    </ul>

                </ul>

                <form class=\"red lighten-3\">
                    <div class=\"input-field\">
                        <input class=\"grey\" id=\"search\" type=\"search\"/>
                        <label for=\"search\"><i class=\"mdi-action-search\">MOTS CLEES</i></label><i class=\"mdi-navigation-close close\"></i>
                    </div>

                </form>
            </div>
        </nav>
    </div>
    <hr>
        {% for actor in pagination %}
            <div id=\"actors\">
            <div  class=\"card medium z-depth-5 hover white\">
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
            <li><i class=\"material-icons\">arrow</i> <blockquote> <strong>{{ actor.secteur}} </strong> {{ actor.description }}</blockquote> </li>

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
        {% endfor %}
</div>
    </table>
</div>
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>






{% endblock %}
", "actors/index.html.twig", "/home/fabien/Modèles/mecacorp maj/app/Resources/views/actors/index.html.twig");
    }
}
