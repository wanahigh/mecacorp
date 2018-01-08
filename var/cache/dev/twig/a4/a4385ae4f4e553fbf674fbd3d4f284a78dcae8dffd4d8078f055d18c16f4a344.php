<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3da58e6046f07e1dbff60436cf94378270002850c8b0054ed51f2a947c2108e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cf317b13fcffe12e317dfb3ac86bba46824951134ddbb1740118a4b455268b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf317b13fcffe12e317dfb3ac86bba46824951134ddbb1740118a4b455268b23->enter($__internal_cf317b13fcffe12e317dfb3ac86bba46824951134ddbb1740118a4b455268b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5b460d8568eae303e6be700fbfdb069fa5eddb8f57605b7f5b562b87a5439f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b460d8568eae303e6be700fbfdb069fa5eddb8f57605b7f5b562b87a5439f5f->enter($__internal_5b460d8568eae303e6be700fbfdb069fa5eddb8f57605b7f5b562b87a5439f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf317b13fcffe12e317dfb3ac86bba46824951134ddbb1740118a4b455268b23->leave($__internal_cf317b13fcffe12e317dfb3ac86bba46824951134ddbb1740118a4b455268b23_prof);

        
        $__internal_5b460d8568eae303e6be700fbfdb069fa5eddb8f57605b7f5b562b87a5439f5f->leave($__internal_5b460d8568eae303e6be700fbfdb069fa5eddb8f57605b7f5b562b87a5439f5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5878b4e013d6adb849c8e0d377ecd5efffaaad03fc97ead54acb16aaada7b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5878b4e013d6adb849c8e0d377ecd5efffaaad03fc97ead54acb16aaada7b83->enter($__internal_a5878b4e013d6adb849c8e0d377ecd5efffaaad03fc97ead54acb16aaada7b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bec6c8d080fb4dc8b19d0cefe2df8c8392a9f46d24b832b700b591491c72a815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec6c8d080fb4dc8b19d0cefe2df8c8392a9f46d24b832b700b591491c72a815->enter($__internal_bec6c8d080fb4dc8b19d0cefe2df8c8392a9f46d24b832b700b591491c72a815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bec6c8d080fb4dc8b19d0cefe2df8c8392a9f46d24b832b700b591491c72a815->leave($__internal_bec6c8d080fb4dc8b19d0cefe2df8c8392a9f46d24b832b700b591491c72a815_prof);

        
        $__internal_a5878b4e013d6adb849c8e0d377ecd5efffaaad03fc97ead54acb16aaada7b83->leave($__internal_a5878b4e013d6adb849c8e0d377ecd5efffaaad03fc97ead54acb16aaada7b83_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
