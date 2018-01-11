<?php

/* actors/show.html.twig */
class __TwigTemplate_5869a43fe2b335e2c81d5a5105c288ec6bbc17dfc9aff76fe707aa1080d61ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "actors/show.html.twig", 1);
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
        $__internal_20455e18866f98911b7fcf71daf9b8a53ca4ae804330d8f05f0f0b4c047151b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20455e18866f98911b7fcf71daf9b8a53ca4ae804330d8f05f0f0b4c047151b6->enter($__internal_20455e18866f98911b7fcf71daf9b8a53ca4ae804330d8f05f0f0b4c047151b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/show.html.twig"));

        $__internal_e9da34e583a871bc5fbcfa0f32d101b3cb4a37fedef717c25ccc5ace673df30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9da34e583a871bc5fbcfa0f32d101b3cb4a37fedef717c25ccc5ace673df30f->enter($__internal_e9da34e583a871bc5fbcfa0f32d101b3cb4a37fedef717c25ccc5ace673df30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "actors/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20455e18866f98911b7fcf71daf9b8a53ca4ae804330d8f05f0f0b4c047151b6->leave($__internal_20455e18866f98911b7fcf71daf9b8a53ca4ae804330d8f05f0f0b4c047151b6_prof);

        
        $__internal_e9da34e583a871bc5fbcfa0f32d101b3cb4a37fedef717c25ccc5ace673df30f->leave($__internal_e9da34e583a871bc5fbcfa0f32d101b3cb4a37fedef717c25ccc5ace673df30f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9c6d30db38f3596b035f4c977f5aba41584c5969605e7b4cceb2796bd96131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9c6d30db38f3596b035f4c977f5aba41584c5969605e7b4cceb2796bd96131->enter($__internal_9f9c6d30db38f3596b035f4c977f5aba41584c5969605e7b4cceb2796bd96131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52f9eb55788d7f290562500718299f0d9ca60fa35886c9c42a4340b35b14f21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f9eb55788d7f290562500718299f0d9ca60fa35886c9c42a4340b35b14f21e->enter($__internal_52f9eb55788d7f290562500718299f0d9ca60fa35886c9c42a4340b35b14f21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>h1{
            background-color: #00a7d0;
            text-align:center;
        }

    </style>


    <div class=\" hover col l8 \" >
    <h1 class=\"header\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 13, $this->getSourceContext()); })()), "raisonsocial", array()), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 19, $this->getSourceContext()); })()), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdudirigeant</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 23, $this->getSourceContext()); })()), "nomdudirigeant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 27, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 31, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 35, $this->getSourceContext()); })()), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 39, $this->getSourceContext()); })()), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 43, $this->getSourceContext()); })()), "facebook", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Linkedin</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 47, $this->getSourceContext()); })()), "linkedin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 51, $this->getSourceContext()); })()), "twitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 55, $this->getSourceContext()); })()), "instagram", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 59, $this->getSourceContext()); })()), "secteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 63, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Competences</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 67, $this->getSourceContext()); })()), "competences", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raisonsocial</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 71, $this->getSourceContext()); })()), "raisonsocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn pulse green\" href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_index");
        echo "\">Retour a la liste</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_52f9eb55788d7f290562500718299f0d9ca60fa35886c9c42a4340b35b14f21e->leave($__internal_52f9eb55788d7f290562500718299f0d9ca60fa35886c9c42a4340b35b14f21e_prof);

        
        $__internal_9f9c6d30db38f3596b035f4c977f5aba41584c5969605e7b4cceb2796bd96131->leave($__internal_9f9c6d30db38f3596b035f4c977f5aba41584c5969605e7b4cceb2796bd96131_prof);

    }

    public function getTemplateName()
    {
        return "actors/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 78,  160 => 71,  153 => 67,  146 => 63,  139 => 59,  132 => 55,  125 => 51,  118 => 47,  111 => 43,  104 => 39,  97 => 35,  90 => 31,  83 => 27,  76 => 23,  69 => 19,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>h1{
            background-color: #00a7d0;
            text-align:center;
        }

    </style>


    <div class=\" hover col l8 \" >
    <h1 class=\"header\">{{ actor.raisonsocial  }}</h1>

    <table>
        <tbody>
            <tr>
                <th>Categorie</th>
                <td>{{ actor.categorie }}</td>
            </tr>
            <tr>
                <th>Nomdudirigeant</th>
                <td>{{ actor.nomdudirigeant }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ actor.adresse }}</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>{{ actor.tel }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ actor.mail }}</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>{{ actor.siteweb }}</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td>{{ actor.facebook }}</td>
            </tr>
            <tr>
                <th>Linkedin</th>
                <td>{{ actor.linkedin }}</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>{{ actor.twitter }}</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>{{ actor.instagram }}</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>{{ actor.secteur }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ actor.description }}</td>
            </tr>
            <tr>
                <th>Competences</th>
                <td>{{ actor.competences }}</td>
            </tr>
            <tr>
                <th>Raisonsocial</th>
                <td>{{ actor.raisonsocial }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn pulse green\" href=\"{{ path('actors_index') }}\">Retour a la liste</a>
        </li>
    </ul>
    </div>
{% endblock %}
", "actors/show.html.twig", "/home/fabien/mecacorp/app/Resources/views/actors/show.html.twig");
    }
}
