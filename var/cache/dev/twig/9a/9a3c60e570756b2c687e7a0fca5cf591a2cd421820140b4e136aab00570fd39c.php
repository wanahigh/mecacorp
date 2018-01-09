<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_66fd3758596e1f614e4632510fe942ea41df8b6f48c3ed9b6c49439ff5e24a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3fc28da7d2a2d127e2cf6684b5eeb484873906be57d19f980ee2d4b913872b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc28da7d2a2d127e2cf6684b5eeb484873906be57d19f980ee2d4b913872b2f->enter($__internal_3fc28da7d2a2d127e2cf6684b5eeb484873906be57d19f980ee2d4b913872b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_f6e368650e90c039812792d985b77af8abb5a003c7e8435638d3aba48a817612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e368650e90c039812792d985b77af8abb5a003c7e8435638d3aba48a817612->enter($__internal_f6e368650e90c039812792d985b77af8abb5a003c7e8435638d3aba48a817612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc28da7d2a2d127e2cf6684b5eeb484873906be57d19f980ee2d4b913872b2f->leave($__internal_3fc28da7d2a2d127e2cf6684b5eeb484873906be57d19f980ee2d4b913872b2f_prof);

        
        $__internal_f6e368650e90c039812792d985b77af8abb5a003c7e8435638d3aba48a817612->leave($__internal_f6e368650e90c039812792d985b77af8abb5a003c7e8435638d3aba48a817612_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34edbc38f5e2b4f4f37bfabcaf28feed0b6bdeea4238792520a8080d34ef10d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34edbc38f5e2b4f4f37bfabcaf28feed0b6bdeea4238792520a8080d34ef10d3->enter($__internal_34edbc38f5e2b4f4f37bfabcaf28feed0b6bdeea4238792520a8080d34ef10d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7b672121722e8ddcecc850e30dab5362a0c32509de009de1828ab812f80b6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b672121722e8ddcecc850e30dab5362a0c32509de009de1828ab812f80b6d2->enter($__internal_f7b672121722e8ddcecc850e30dab5362a0c32509de009de1828ab812f80b6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f7b672121722e8ddcecc850e30dab5362a0c32509de009de1828ab812f80b6d2->leave($__internal_f7b672121722e8ddcecc850e30dab5362a0c32509de009de1828ab812f80b6d2_prof);

        
        $__internal_34edbc38f5e2b4f4f37bfabcaf28feed0b6bdeea4238792520a8080d34ef10d3->leave($__internal_34edbc38f5e2b4f4f37bfabcaf28feed0b6bdeea4238792520a8080d34ef10d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/monsite1/mecacorp/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
