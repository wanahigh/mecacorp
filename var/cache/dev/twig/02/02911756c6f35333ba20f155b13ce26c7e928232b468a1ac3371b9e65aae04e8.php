<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_4a2f61cc8f3c573e430d61f0737eb3420243f300b7a891ce97151040f26d3ef4 extends Twig_Template
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
        $__internal_19c6e851e4ebd26b919e0e3ad8b5b1d4057a615aacaf3952e8d826048df7bffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c6e851e4ebd26b919e0e3ad8b5b1d4057a615aacaf3952e8d826048df7bffa->enter($__internal_19c6e851e4ebd26b919e0e3ad8b5b1d4057a615aacaf3952e8d826048df7bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_4e94b4ee048245c4e8f94a01ce9c08da02517eac73c1472d12f59c7853b4ec35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e94b4ee048245c4e8f94a01ce9c08da02517eac73c1472d12f59c7853b4ec35->enter($__internal_4e94b4ee048245c4e8f94a01ce9c08da02517eac73c1472d12f59c7853b4ec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_19c6e851e4ebd26b919e0e3ad8b5b1d4057a615aacaf3952e8d826048df7bffa->leave($__internal_19c6e851e4ebd26b919e0e3ad8b5b1d4057a615aacaf3952e8d826048df7bffa_prof);

        
        $__internal_4e94b4ee048245c4e8f94a01ce9c08da02517eac73c1472d12f59c7853b4ec35->leave($__internal_4e94b4ee048245c4e8f94a01ce9c08da02517eac73c1472d12f59c7853b4ec35_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
