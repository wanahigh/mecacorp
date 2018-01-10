<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f667650eacb8e40304c04a092e6f2ce7a94af17ba0d42f20796cc75242149dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f52cd3a5b0ee531ba1cd5f874dc6a58a324b3cb28a0848a311dd48c2f1bfacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f52cd3a5b0ee531ba1cd5f874dc6a58a324b3cb28a0848a311dd48c2f1bfacd->enter($__internal_2f52cd3a5b0ee531ba1cd5f874dc6a58a324b3cb28a0848a311dd48c2f1bfacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_05fa4142f488efb7cae55524fb091a9fb788f5e69c2da3cdffa4c73f511ebf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fa4142f488efb7cae55524fb091a9fb788f5e69c2da3cdffa4c73f511ebf2e->enter($__internal_05fa4142f488efb7cae55524fb091a9fb788f5e69c2da3cdffa4c73f511ebf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2f52cd3a5b0ee531ba1cd5f874dc6a58a324b3cb28a0848a311dd48c2f1bfacd->leave($__internal_2f52cd3a5b0ee531ba1cd5f874dc6a58a324b3cb28a0848a311dd48c2f1bfacd_prof);

        
        $__internal_05fa4142f488efb7cae55524fb091a9fb788f5e69c2da3cdffa4c73f511ebf2e->leave($__internal_05fa4142f488efb7cae55524fb091a9fb788f5e69c2da3cdffa4c73f511ebf2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
