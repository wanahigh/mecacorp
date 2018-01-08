<?php

/* :actors:show.html.twig */
class __TwigTemplate_5869a43fe2b335e2c81d5a5105c288ec6bbc17dfc9aff76fe707aa1080d61ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":actors:show.html.twig", 1);
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
        $__internal_99f0b398b9856ea1ad2e3a3045d73adda797aedbd013f9706295c3d6fd592651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f0b398b9856ea1ad2e3a3045d73adda797aedbd013f9706295c3d6fd592651->enter($__internal_99f0b398b9856ea1ad2e3a3045d73adda797aedbd013f9706295c3d6fd592651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actors:show.html.twig"));

        $__internal_6d45f5982812aaace0a044c272a3d6c812a2f5904c156b51c2a89193419d4f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d45f5982812aaace0a044c272a3d6c812a2f5904c156b51c2a89193419d4f0a->enter($__internal_6d45f5982812aaace0a044c272a3d6c812a2f5904c156b51c2a89193419d4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":actors:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f0b398b9856ea1ad2e3a3045d73adda797aedbd013f9706295c3d6fd592651->leave($__internal_99f0b398b9856ea1ad2e3a3045d73adda797aedbd013f9706295c3d6fd592651_prof);

        
        $__internal_6d45f5982812aaace0a044c272a3d6c812a2f5904c156b51c2a89193419d4f0a->leave($__internal_6d45f5982812aaace0a044c272a3d6c812a2f5904c156b51c2a89193419d4f0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d2defd3fad061afe3089c0f924fc8f65409c3a565f8c0e8c7aafe0beba5e906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2defd3fad061afe3089c0f924fc8f65409c3a565f8c0e8c7aafe0beba5e906->enter($__internal_1d2defd3fad061afe3089c0f924fc8f65409c3a565f8c0e8c7aafe0beba5e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ffaa0e8a40085b2cfaa818b452069914f09371a25de1560b11f1f7a572247bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffaa0e8a40085b2cfaa818b452069914f09371a25de1560b11f1f7a572247bc->enter($__internal_9ffaa0e8a40085b2cfaa818b452069914f09371a25de1560b11f1f7a572247bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actor</h1>

    <table>
        <tbody>
            <tr>
                <th>Categorie</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 10, $this->getSourceContext()); })()), "categorie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdudirigeant</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 14, $this->getSourceContext()); })()), "nomdudirigeant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 18, $this->getSourceContext()); })()), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 22, $this->getSourceContext()); })()), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 26, $this->getSourceContext()); })()), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 30, $this->getSourceContext()); })()), "siteweb", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebook</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 34, $this->getSourceContext()); })()), "facebook", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Linkedin</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 38, $this->getSourceContext()); })()), "linkedin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Twitter</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 42, $this->getSourceContext()); })()), "twitter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instagram</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 46, $this->getSourceContext()); })()), "instagram", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secteur</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 50, $this->getSourceContext()); })()), "secteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 54, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Competences</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 58, $this->getSourceContext()); })()), "competences", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raisonsocial</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["actor"]) || array_key_exists("actor", $context) ? $context["actor"] : (function () { throw new Twig_Error_Runtime('Variable "actor" does not exist.', 62, $this->getSourceContext()); })()), "raisonsocial", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actors_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9ffaa0e8a40085b2cfaa818b452069914f09371a25de1560b11f1f7a572247bc->leave($__internal_9ffaa0e8a40085b2cfaa818b452069914f09371a25de1560b11f1f7a572247bc_prof);

        
        $__internal_1d2defd3fad061afe3089c0f924fc8f65409c3a565f8c0e8c7aafe0beba5e906->leave($__internal_1d2defd3fad061afe3089c0f924fc8f65409c3a565f8c0e8c7aafe0beba5e906_prof);

    }

    public function getTemplateName()
    {
        return ":actors:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  148 => 62,  141 => 58,  134 => 54,  127 => 50,  120 => 46,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Actor</h1>

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
            <a href=\"{{ path('actors_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":actors:show.html.twig", "/home/fabien/symfony-stg/app/Resources/views/actors/show.html.twig");
    }
}
