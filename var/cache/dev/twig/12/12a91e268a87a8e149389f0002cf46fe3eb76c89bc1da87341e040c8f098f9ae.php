<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1c0d6613c0f624d5bfc12c04716af97d9973605bd43abad5cf0cbe317ed583f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a77b4ad37610a3e4b86a90d1d6c353d035544fb5a20ae1b89532d36e83ea3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a77b4ad37610a3e4b86a90d1d6c353d035544fb5a20ae1b89532d36e83ea3e5->enter($__internal_2a77b4ad37610a3e4b86a90d1d6c353d035544fb5a20ae1b89532d36e83ea3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_bfd05a0a640b3e62c3969ce67dcbcd714eca9b9326da940bafa5f35c3f9eb3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd05a0a640b3e62c3969ce67dcbcd714eca9b9326da940bafa5f35c3f9eb3ba->enter($__internal_bfd05a0a640b3e62c3969ce67dcbcd714eca9b9326da940bafa5f35c3f9eb3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a77b4ad37610a3e4b86a90d1d6c353d035544fb5a20ae1b89532d36e83ea3e5->leave($__internal_2a77b4ad37610a3e4b86a90d1d6c353d035544fb5a20ae1b89532d36e83ea3e5_prof);

        
        $__internal_bfd05a0a640b3e62c3969ce67dcbcd714eca9b9326da940bafa5f35c3f9eb3ba->leave($__internal_bfd05a0a640b3e62c3969ce67dcbcd714eca9b9326da940bafa5f35c3f9eb3ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07a3bbd77140920480c25e9ad2e5dc27f8b8e41fbbdb0f9e632e6fccd2face41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a3bbd77140920480c25e9ad2e5dc27f8b8e41fbbdb0f9e632e6fccd2face41->enter($__internal_07a3bbd77140920480c25e9ad2e5dc27f8b8e41fbbdb0f9e632e6fccd2face41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4cb9fe15a9c7bb1a23c088ed245f59b418f73308fc70dc2e28d4d88c209dc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cb9fe15a9c7bb1a23c088ed245f59b418f73308fc70dc2e28d4d88c209dc37->enter($__internal_f4cb9fe15a9c7bb1a23c088ed245f59b418f73308fc70dc2e28d4d88c209dc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_f4cb9fe15a9c7bb1a23c088ed245f59b418f73308fc70dc2e28d4d88c209dc37->leave($__internal_f4cb9fe15a9c7bb1a23c088ed245f59b418f73308fc70dc2e28d4d88c209dc37_prof);

        
        $__internal_07a3bbd77140920480c25e9ad2e5dc27f8b8e41fbbdb0f9e632e6fccd2face41->leave($__internal_07a3bbd77140920480c25e9ad2e5dc27f8b8e41fbbdb0f9e632e6fccd2face41_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56d76bbafb8e0ea039a50251eac1569b15316477b2a1bdb5b5f959cdcaea2bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d76bbafb8e0ea039a50251eac1569b15316477b2a1bdb5b5f959cdcaea2bc2->enter($__internal_56d76bbafb8e0ea039a50251eac1569b15316477b2a1bdb5b5f959cdcaea2bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad9b2a431354eec2ec5426e5c24fbba68d39ad22c1a8046a56abc2082d3217c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9b2a431354eec2ec5426e5c24fbba68d39ad22c1a8046a56abc2082d3217c5->enter($__internal_ad9b2a431354eec2ec5426e5c24fbba68d39ad22c1a8046a56abc2082d3217c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_ad9b2a431354eec2ec5426e5c24fbba68d39ad22c1a8046a56abc2082d3217c5->leave($__internal_ad9b2a431354eec2ec5426e5c24fbba68d39ad22c1a8046a56abc2082d3217c5_prof);

        
        $__internal_56d76bbafb8e0ea039a50251eac1569b15316477b2a1bdb5b5f959cdcaea2bc2->leave($__internal_56d76bbafb8e0ea039a50251eac1569b15316477b2a1bdb5b5f959cdcaea2bc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/home/fabien/Téléchargements/mecacorp/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
