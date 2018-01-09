<?php

/* AcmeHomeBundle::index.html.twig */
class __TwigTemplate_6236e4f940d9489377d096789287cd4e0d07805e6dd60a0b3fb4d928ea832100 extends Twig_Template
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
        $__internal_a6463e524d59ff69f743c00111905b3ff046e2bcb10cc818128d171fa4446f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6463e524d59ff69f743c00111905b3ff046e2bcb10cc818128d171fa4446f4d->enter($__internal_a6463e524d59ff69f743c00111905b3ff046e2bcb10cc818128d171fa4446f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::index.html.twig"));

        $__internal_3cf85010d2af6319817fcad7616a4314382debf4b2fe9f59f47e50493edc1193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf85010d2af6319817fcad7616a4314382debf4b2fe9f59f47e50493edc1193->enter($__internal_3cf85010d2af6319817fcad7616a4314382debf4b2fe9f59f47e50493edc1193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::index.html.twig"));

        // line 2
        echo "

";
        // line 5
        echo "
";
        // line 7
        echo "

";
        // line 10
        echo "
";
        // line 12
        echo "

    ";
        // line 15
        echo "
    ";
        // line 17
        echo "
        ";
        // line 19
        echo "
            ";
        // line 21
        echo "
                ";
        // line 23
        echo "
            ";
        // line 25
        echo "
        ";
        // line 27
        echo "
    ";
        // line 29
        echo "

    ";
        // line 32
        echo "
    ";
        // line 34
        echo "
    ";
        // line 36
        echo "

";
        
        $__internal_a6463e524d59ff69f743c00111905b3ff046e2bcb10cc818128d171fa4446f4d->leave($__internal_a6463e524d59ff69f743c00111905b3ff046e2bcb10cc818128d171fa4446f4d_prof);

        
        $__internal_3cf85010d2af6319817fcad7616a4314382debf4b2fe9f59f47e50493edc1193->leave($__internal_3cf85010d2af6319817fcad7616a4314382debf4b2fe9f59f47e50493edc1193_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  71 => 34,  68 => 32,  64 => 29,  61 => 27,  58 => 25,  55 => 23,  52 => 21,  49 => 19,  46 => 17,  43 => 15,  39 => 12,  36 => 10,  32 => 7,  29 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}


{# On étend notre layout #}

{#{% extends \"::base.html.twig\" %}#}


{# Dans notre layout, il faut définir le block body #}

{#{% block body %}#}


    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {#{% for key, messages in app.session.flashbag.all() %}#}

        {#{% for message in messages %}#}

            {#<div class=\"alert alert-{{ key }}\">#}

                {#{{ message|trans({}, 'FOSUserBundle') }}#}

            {#</div>#}

        {#{% endfor %}#}

    {#{% endfor %}#}


    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}

    {#{% block fos_user_content %}#}

    {#{% endblock fos_user_content %}#}


{#{% endblock %}#}", "AcmeHomeBundle::index.html.twig", "/var/www/monsite1/mecacorp/src/Acme/AdminBundle/Resources/views/index.html.twig");
    }
}
