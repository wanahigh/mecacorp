<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c473987ef45f4d1f5ab263ca4f5ebf6a927a8942f8f80e6466100b32c95c07fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a361d475360750789fefd58ecc4b314c3a909a94040502c13883abcebf55c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a361d475360750789fefd58ecc4b314c3a909a94040502c13883abcebf55c5->enter($__internal_97a361d475360750789fefd58ecc4b314c3a909a94040502c13883abcebf55c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c6758934609fc607548b4d621c44c197cb10d08bdb8c22bcbb336fbbf62b845e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6758934609fc607548b4d621c44c197cb10d08bdb8c22bcbb336fbbf62b845e->enter($__internal_c6758934609fc607548b4d621c44c197cb10d08bdb8c22bcbb336fbbf62b845e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a361d475360750789fefd58ecc4b314c3a909a94040502c13883abcebf55c5->leave($__internal_97a361d475360750789fefd58ecc4b314c3a909a94040502c13883abcebf55c5_prof);

        
        $__internal_c6758934609fc607548b4d621c44c197cb10d08bdb8c22bcbb336fbbf62b845e->leave($__internal_c6758934609fc607548b4d621c44c197cb10d08bdb8c22bcbb336fbbf62b845e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7a5faa4853ded33609c0b5163cff31d61b4703d8c20a11d49783abfcbb93a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a5faa4853ded33609c0b5163cff31d61b4703d8c20a11d49783abfcbb93a98->enter($__internal_a7a5faa4853ded33609c0b5163cff31d61b4703d8c20a11d49783abfcbb93a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dca49ba56f08a124d2db2784093385b51f6ca53ea4c9bfa63cea00a41364c591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca49ba56f08a124d2db2784093385b51f6ca53ea4c9bfa63cea00a41364c591->enter($__internal_dca49ba56f08a124d2db2784093385b51f6ca53ea4c9bfa63cea00a41364c591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_dca49ba56f08a124d2db2784093385b51f6ca53ea4c9bfa63cea00a41364c591->leave($__internal_dca49ba56f08a124d2db2784093385b51f6ca53ea4c9bfa63cea00a41364c591_prof);

        
        $__internal_a7a5faa4853ded33609c0b5163cff31d61b4703d8c20a11d49783abfcbb93a98->leave($__internal_a7a5faa4853ded33609c0b5163cff31d61b4703d8c20a11d49783abfcbb93a98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
