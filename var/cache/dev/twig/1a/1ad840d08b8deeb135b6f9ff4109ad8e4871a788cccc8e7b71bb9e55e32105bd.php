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
        $__internal_6b16ca356d63c5f3bee81d8873fb40f8c8f35e82f31dba171c8a9c56ae99607c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16ca356d63c5f3bee81d8873fb40f8c8f35e82f31dba171c8a9c56ae99607c->enter($__internal_6b16ca356d63c5f3bee81d8873fb40f8c8f35e82f31dba171c8a9c56ae99607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $__internal_39d1f7c5bd5af52d85e594f789bdfb122e048db9391856bfc9a64bc207d2588f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d1f7c5bd5af52d85e594f789bdfb122e048db9391856bfc9a64bc207d2588f->enter($__internal_39d1f7c5bd5af52d85e594f789bdfb122e048db9391856bfc9a64bc207d2588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b16ca356d63c5f3bee81d8873fb40f8c8f35e82f31dba171c8a9c56ae99607c->leave($__internal_6b16ca356d63c5f3bee81d8873fb40f8c8f35e82f31dba171c8a9c56ae99607c_prof);

        
        $__internal_39d1f7c5bd5af52d85e594f789bdfb122e048db9391856bfc9a64bc207d2588f->leave($__internal_39d1f7c5bd5af52d85e594f789bdfb122e048db9391856bfc9a64bc207d2588f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_74b369cb7da12a0fc582e8629a09fa444d70d47691a8845bfbb03b73b23e48f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b369cb7da12a0fc582e8629a09fa444d70d47691a8845bfbb03b73b23e48f5->enter($__internal_74b369cb7da12a0fc582e8629a09fa444d70d47691a8845bfbb03b73b23e48f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a540c1940d3fa559613300250ca9aef20e0c89e6836bbd4d99a77d9d0a8f9a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a540c1940d3fa559613300250ca9aef20e0c89e6836bbd4d99a77d9d0a8f9a2f->enter($__internal_a540c1940d3fa559613300250ca9aef20e0c89e6836bbd4d99a77d9d0a8f9a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "            <div class=\"row\">

            <div class=\"container\">
            <div class=\"card medium z-depth-5 hover\">
            <div class=\"card-image waves-effect waves-block waves-light\">
            <img class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
            </div>
            <div class=\"card-content\">
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
            <div class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "nomdudirigeant", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "adresse", array()), "html", null, true);
            echo " </li>
            <li><i class=\"material-icons\">phone</i> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "tel", array()), "html", null, true);
            echo " </li>
            <li><i class=\"material-icons\">mail</i> ";
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
            <li><i class=\"material-icons\">linkedin</i> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "linkedin", array()), "html", null, true);
            echo " </li>
            <li><a href=\"\"><i class=\"material-icons\">twitter</i> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["actor"], "twitter", array()), "html", null, true);
            echo "</a> </li>
            <li><i class=\"material-icons\">instragram</i> ";
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
        // line 60
        echo "        ";
        // line 61
        echo "
        ";
        // line 63
        echo "            ";
        // line 64
        echo "                ";
        // line 65
        echo "                    ";
        // line 66
        echo "                ";
        // line 67
        echo "                ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                ";
        // line 71
        echo "                ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                        ";
        // line 75
        echo "                        ";
        // line 76
        echo "                        ";
        // line 77
        echo "                        ";
        // line 78
        echo "
                        ";
        // line 80
        echo "                        ";
        // line 81
        echo "                        ";
        // line 82
        echo "                        ";
        // line 83
        echo "                        ";
        // line 84
        echo "                        ";
        // line 85
        echo "                    ";
        // line 86
        echo "                        ";
        // line 87
        echo "                            ";
        // line 88
        echo "                                ";
        // line 89
        echo "                            ";
        // line 90
        echo "                        ";
        // line 91
        echo "                ";
        // line 92
        echo "            ";
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        // line 97
        echo "        ";
        // line 98
        echo "    ";
        // line 99
        echo "    ";
        // line 100
        echo "        ";
        // line 101
        echo "            ";
        // line 102
        echo "            ";
        // line 103
        echo "            ";
        // line 104
        echo "            ";
        // line 105
        echo "        ";
        // line 106
        echo "
        ";
        // line 108
        echo "        ";
        // line 109
        echo "            ";
        // line 110
        echo "                ";
        // line 111
        echo "                ";
        // line 112
        echo "                ";
        // line 113
        echo "            ";
        // line 114
        echo "        ";
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        // line 117
        echo "    ";
        // line 118
        echo "        ";
        // line 119
        echo "    ";
        // line 120
        echo "







";
        
        $__internal_a540c1940d3fa559613300250ca9aef20e0c89e6836bbd4d99a77d9d0a8f9a2f->leave($__internal_a540c1940d3fa559613300250ca9aef20e0c89e6836bbd4d99a77d9d0a8f9a2f_prof);

        
        $__internal_74b369cb7da12a0fc582e8629a09fa444d70d47691a8845bfbb03b73b23e48f5->leave($__internal_74b369cb7da12a0fc582e8629a09fa444d70d47691a8845bfbb03b73b23e48f5_prof);

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
        return array (  279 => 120,  277 => 119,  275 => 118,  273 => 117,  271 => 116,  269 => 115,  267 => 114,  265 => 113,  263 => 112,  261 => 111,  259 => 110,  257 => 109,  255 => 108,  252 => 106,  250 => 105,  248 => 104,  246 => 103,  244 => 102,  242 => 101,  240 => 100,  238 => 99,  236 => 98,  234 => 97,  232 => 96,  230 => 95,  228 => 94,  226 => 93,  224 => 92,  222 => 91,  220 => 90,  218 => 89,  216 => 88,  214 => 87,  212 => 86,  210 => 85,  208 => 84,  206 => 83,  204 => 82,  202 => 81,  200 => 80,  197 => 78,  195 => 77,  193 => 76,  191 => 75,  189 => 74,  187 => 73,  185 => 72,  183 => 71,  181 => 70,  179 => 69,  177 => 68,  175 => 67,  173 => 66,  171 => 65,  169 => 64,  167 => 63,  164 => 61,  162 => 60,  156 => 56,  153 => 55,  150 => 53,  136 => 45,  129 => 41,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  88 => 29,  82 => 26,  76 => 25,  66 => 17,  61 => 16,  49 => 5,  40 => 4,  11 => 2,);
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
            <div class=\"row\">

            <div class=\"container\">
            <div class=\"card medium z-depth-5 hover\">
            <div class=\"card-image waves-effect waves-block waves-light\">
            <img class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">
            </div>
            <div class=\"card-content\">
            <span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">{{ actor.raisonsocial }}</a><i class=\"material-icons right\">more_vert</i></span>
            <p><a href=\"#\">{{ actor.siteweb }}</a></p>
            </div>
            <div class=\"card-reveal\">
            <span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>{{ actor.nomdudirigeant }}<i class=\"material-icons right\">close</i></span>
            <ul>
            <li> <i class=\"material-icons\">place</i>{{ actor.adresse }} </li>
            <li><i class=\"material-icons\">phone</i> {{ actor.tel }} </li>
            <li><i class=\"material-icons\">mail</i> {{ actor.mail }} </li>
            <li><i \" class=\"material-icons\">arrow</i> <blockquote> <strong>{{ actor.secteur}} </strong> {{ actor.description }}</blockquote> </li>

            <li> <i class=\"material-icons\">device_hub</i> {{ actor.facebook }} </li>
            <li><i class=\"material-icons\">linkedin</i> {{ actor.linkedin }} </li>
            <li><a href=\"\"><i class=\"material-icons\">twitter</i> {{actor.twitter }}</a> </li>
            <li><i class=\"material-icons\">instragram</i> {{ actor.instagram }} </li>
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

    {#{% for actor in actors %}#}
        {#<div class=\"row\">#}

        {#<div class=\"container\">#}
            {#<div class=\"card medium\">#}
                {#<div class=\"card-image waves-effect waves-block waves-light\">#}
                    {#<img class=\"activator\" style=\"background-color:dodgerblue;\" src=\"#\">#}
                {#</div>#}
                {#<div class=\"card-content\">#}
                    {#<span class=\"card-title activator grey-text text-darken-4\"><a class=\"btn-large blue\" href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">{{ actor.raisonsocial }}</a><i class=\"material-icons right\">more_vert</i></span>#}
                    {#<p><a href=\"#\">{{ actor.siteweb }}</a></p>#}
                {#</div>#}
                {#<div class=\"card-reveal\">#}
                    {#<span class=\"card-title grey-text text-darken-4\"><i class=\"material-icons\">accessibility</i>{{ actor.nomdudirigeant }}<i class=\"material-icons right\">close</i></span>#}
                    {#<ul>#}
                        {#<li> <i class=\"material-icons\">place</i>{{ actor.adresse }} </li>#}
                        {#<li><i class=\"material-icons\">phone</i> {{ actor.tel }} </li>#}
                        {#<li><i class=\"material-icons\">mail</i> {{ actor.mail }} </li>#}
                        {#<li><i \" class=\"material-icons\">arrow</i> <blockquote> <strong>{{ actor.secteur}} </strong> {{ actor.description }}</blockquote> </li>#}

                        {#<li> <i class=\"material-icons\">device_hub</i> {{ actor.facebook }} </li>#}
                        {#<li><i class=\"material-icons\">linkedin</i> {{ actor.linkedin }} </li>#}
                        {#<li><a href=\"\"><i class=\"material-icons\">twitter</i> {{actor.twitter }}</a> </li>#}
                        {#<li><i class=\"material-icons\">instragram</i> {{ actor.instagram }} </li>#}
                        {#<li></li>#}
                        {#<li>  {{ actor.competences }} </li>#}
                    {#</ul>#}
                        {#<ul>#}
                            {#<li>#}
                                {#<a class=\"btn-large green\" href=\"{{ path('actors_show', { 'raisonsocial': actor.raisonsocial }) }}\">Voir +</a>#}
                            {#</li>#}
                        {#</ul>#}
                {#</div>#}
            {#</div>#}
        {#</div>#}
        {#</div>#}
    {#{% endfor %}#}
    {#<div class=\"count\">#}
        {#{{ pagination.getTotalItemCount }}#}
    {#</div>#}
    {#<table>#}
        {#<tr>#}
            {# sorting of properties based on query components #}
            {#<th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>#}
            {#<th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>#}
            {#<th>{{ knp_pagination_sortable(pagination, 'Release', ['a.date', 'a.time']) }}</th>#}
        {#</tr>#}

        {# table body #}
        {#{% for actor in pagination %}#}
            {#<tr {% if loop.index is odd %}class=\"color\"{% endif %}>#}
                {#<td>{{ actor.id }}</td>#}
                {#<td>{{ actor.title }}</td>#}
                {#<td>{{ actor.date | date('Y-m-d') }}, {{ actor.time | date('H:i:s') }}</td>#}
            {#</tr>#}
        {#{% endfor %}#}
    {#</table>#}
    {# display navigation #}
    {#<div class=\"navigation\">#}
        {#{{ knp_pagination_render(pagination) }}#}
    {#</div>#}








{% endblock %}
", "actors/index.html.twig", "/var/www/monsite1/mecacorp/app/Resources/views/actors/index.html.twig");
    }
}
