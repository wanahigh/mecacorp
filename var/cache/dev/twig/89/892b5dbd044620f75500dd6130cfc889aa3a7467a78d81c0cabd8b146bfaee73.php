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
        $__internal_f0306aa7709383f1e2fcba97a94379f747aa508b6ad57df6ac54ed63ffdaf6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0306aa7709383f1e2fcba97a94379f747aa508b6ad57df6ac54ed63ffdaf6cd->enter($__internal_f0306aa7709383f1e2fcba97a94379f747aa508b6ad57df6ac54ed63ffdaf6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ff5b7eaa4a144e7c6fdb8666bf9b9772c26f16d4c76967dbffe994244d2e0eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5b7eaa4a144e7c6fdb8666bf9b9772c26f16d4c76967dbffe994244d2e0eeb->enter($__internal_ff5b7eaa4a144e7c6fdb8666bf9b9772c26f16d4c76967dbffe994244d2e0eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_f0306aa7709383f1e2fcba97a94379f747aa508b6ad57df6ac54ed63ffdaf6cd->leave($__internal_f0306aa7709383f1e2fcba97a94379f747aa508b6ad57df6ac54ed63ffdaf6cd_prof);

        
        $__internal_ff5b7eaa4a144e7c6fdb8666bf9b9772c26f16d4c76967dbffe994244d2e0eeb->leave($__internal_ff5b7eaa4a144e7c6fdb8666bf9b9772c26f16d4c76967dbffe994244d2e0eeb_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
