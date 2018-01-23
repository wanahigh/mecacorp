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
        $__internal_2889a2c087b790ade65a91a46491a7dcd8102866e2d0fc0e90e53a700b1c7c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2889a2c087b790ade65a91a46491a7dcd8102866e2d0fc0e90e53a700b1c7c6f->enter($__internal_2889a2c087b790ade65a91a46491a7dcd8102866e2d0fc0e90e53a700b1c7c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_1ddcc87093a46c678c8de57fbb741aca2ea4c6e653fc8809de1389c3d92ee767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddcc87093a46c678c8de57fbb741aca2ea4c6e653fc8809de1389c3d92ee767->enter($__internal_1ddcc87093a46c678c8de57fbb741aca2ea4c6e653fc8809de1389c3d92ee767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2889a2c087b790ade65a91a46491a7dcd8102866e2d0fc0e90e53a700b1c7c6f->leave($__internal_2889a2c087b790ade65a91a46491a7dcd8102866e2d0fc0e90e53a700b1c7c6f_prof);

        
        $__internal_1ddcc87093a46c678c8de57fbb741aca2ea4c6e653fc8809de1389c3d92ee767->leave($__internal_1ddcc87093a46c678c8de57fbb741aca2ea4c6e653fc8809de1389c3d92ee767_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c6a7c74e5690330bfc9ed2c3d4e35859d15e268e82ac3b9233023c6cd0944a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6a7c74e5690330bfc9ed2c3d4e35859d15e268e82ac3b9233023c6cd0944a7->enter($__internal_8c6a7c74e5690330bfc9ed2c3d4e35859d15e268e82ac3b9233023c6cd0944a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e2ed07006212a23e8f3871ca29e626869452cc7e919f48cdac76d86d040e62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2ed07006212a23e8f3871ca29e626869452cc7e919f48cdac76d86d040e62a->enter($__internal_5e2ed07006212a23e8f3871ca29e626869452cc7e919f48cdac76d86d040e62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "categorie", array()), "html", null, true);
            echo "\">";
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
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 62, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 63
            echo "            <div id=\"actors\">
            <div  class=\"card medium z-depth-5 hover white\">
            <div  class=\"card-image waves-effect waves-block waves-light\">
            <img id=\"blur\" class=\"activator\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "image", array()))), "html", null, true);
            echo "\" height=\"300px\" width=\"600px\">

            </div>
            <div  class=\"card-content z-depth-10 white\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_show", array("raisonsocial" => twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "raisonsocial", array()), "html", null, true);
            echo "</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "siteweb", array()), "html", null, true);
            echo "</a></p>
            </div>
            <div  class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">phone</i> ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">mail</i> ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "mail", array()), "html", null, true);
            echo " </li>
            <li><i class=\"material-icons\">arrow</i> <blockquote> <strong>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "secteur", array()), "html", null, true);
            echo " </strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "description", array()), "html", null, true);
            echo "</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "facebook", array()), "html", null, true);
            echo " </li>
            <li><i  class=\"material-icons\">linkedin</i> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
            <li><a  href=\"\"><i class=\"material-icons\">twitter</i> ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</a> </li>
            <li><i  class=\"material-icons\">instragram</i> ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "instagram", array()), "html", null, true);
            echo " </li>
            <li></li>
            <li>  ";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "competences", array()), "html", null, true);
            echo " </li>
            </ul>
            <ul>
            <li>
            <a class=\"btn-large green\" href=\"";
            // line 90
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
        // line 96
        echo "</div>
    </table>
</div>
    <div class=\"navigation\">
        ";
        // line 100
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 100, $this->getSourceContext()); })()));
        echo "
    </div>






";
        
        $__internal_5e2ed07006212a23e8f3871ca29e626869452cc7e919f48cdac76d86d040e62a->leave($__internal_5e2ed07006212a23e8f3871ca29e626869452cc7e919f48cdac76d86d040e62a_prof);

        
        $__internal_8c6a7c74e5690330bfc9ed2c3d4e35859d15e268e82ac3b9233023c6cd0944a7->leave($__internal_8c6a7c74e5690330bfc9ed2c3d4e35859d15e268e82ac3b9233023c6cd0944a7_prof);

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
        return array (  217 => 100,  211 => 96,  199 => 90,  192 => 86,  187 => 84,  183 => 83,  179 => 82,  175 => 81,  168 => 79,  164 => 78,  160 => 77,  156 => 76,  151 => 74,  145 => 71,  139 => 70,  132 => 66,  127 => 63,  123 => 62,  105 => 46,  94 => 44,  90 => 43,  77 => 32,  49 => 5,  40 => 4,  11 => 2,);
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
                        <li><a href=\"{{ actor.categorie }}\">{{  actor.categorie }}</a></li>
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
