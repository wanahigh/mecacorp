<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_d785e0a0544d3fcafa718df12d89902b26a80fe70e533b90e08fed08586de638 extends Twig_Template
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
        $__internal_825824946574a906a97b947e100bd2d0e333b85e5b06f75c46b2171e82b6ea15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825824946574a906a97b947e100bd2d0e333b85e5b06f75c46b2171e82b6ea15->enter($__internal_825824946574a906a97b947e100bd2d0e333b85e5b06f75c46b2171e82b6ea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_e4596c92311a143ecdd41f3a525e8e033ed1e01f6d3117747f142e897789c415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4596c92311a143ecdd41f3a525e8e033ed1e01f6d3117747f142e897789c415->enter($__internal_e4596c92311a143ecdd41f3a525e8e033ed1e01f6d3117747f142e897789c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_825824946574a906a97b947e100bd2d0e333b85e5b06f75c46b2171e82b6ea15->leave($__internal_825824946574a906a97b947e100bd2d0e333b85e5b06f75c46b2171e82b6ea15_prof);

        
        $__internal_e4596c92311a143ecdd41f3a525e8e033ed1e01f6d3117747f142e897789c415->leave($__internal_e4596c92311a143ecdd41f3a525e8e033ed1e01f6d3117747f142e897789c415_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
