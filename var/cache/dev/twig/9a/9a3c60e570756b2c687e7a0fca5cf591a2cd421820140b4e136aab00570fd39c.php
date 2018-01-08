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
        $__internal_4a1a2f96a64cfa53509a5feca3ce7f999e44114d156ffba6cb31300ba5121d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1a2f96a64cfa53509a5feca3ce7f999e44114d156ffba6cb31300ba5121d55->enter($__internal_4a1a2f96a64cfa53509a5feca3ce7f999e44114d156ffba6cb31300ba5121d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_799e26b0bcecd2f7c8a89f7f9f718c26abfde66f4b2ed9812bcdff6f9d3ee1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e26b0bcecd2f7c8a89f7f9f718c26abfde66f4b2ed9812bcdff6f9d3ee1e7->enter($__internal_799e26b0bcecd2f7c8a89f7f9f718c26abfde66f4b2ed9812bcdff6f9d3ee1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a1a2f96a64cfa53509a5feca3ce7f999e44114d156ffba6cb31300ba5121d55->leave($__internal_4a1a2f96a64cfa53509a5feca3ce7f999e44114d156ffba6cb31300ba5121d55_prof);

        
        $__internal_799e26b0bcecd2f7c8a89f7f9f718c26abfde66f4b2ed9812bcdff6f9d3ee1e7->leave($__internal_799e26b0bcecd2f7c8a89f7f9f718c26abfde66f4b2ed9812bcdff6f9d3ee1e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15a46d5d70037389f56cacf3cade5dba1ea6ca562e6c7146a1c6eae1ebd35510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a46d5d70037389f56cacf3cade5dba1ea6ca562e6c7146a1c6eae1ebd35510->enter($__internal_15a46d5d70037389f56cacf3cade5dba1ea6ca562e6c7146a1c6eae1ebd35510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_228698d7eb64c50c0460f98d9b7197781e2315bcf819cbca104d1ca70464e23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228698d7eb64c50c0460f98d9b7197781e2315bcf819cbca104d1ca70464e23b->enter($__internal_228698d7eb64c50c0460f98d9b7197781e2315bcf819cbca104d1ca70464e23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_228698d7eb64c50c0460f98d9b7197781e2315bcf819cbca104d1ca70464e23b->leave($__internal_228698d7eb64c50c0460f98d9b7197781e2315bcf819cbca104d1ca70464e23b_prof);

        
        $__internal_15a46d5d70037389f56cacf3cade5dba1ea6ca562e6c7146a1c6eae1ebd35510->leave($__internal_15a46d5d70037389f56cacf3cade5dba1ea6ca562e6c7146a1c6eae1ebd35510_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "/home/fabien/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
