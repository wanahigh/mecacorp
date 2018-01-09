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
        $__internal_9e3f56e766c47dab1906419ff9f49134749e9f1d5f51baab94154441b6005162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3f56e766c47dab1906419ff9f49134749e9f1d5f51baab94154441b6005162->enter($__internal_9e3f56e766c47dab1906419ff9f49134749e9f1d5f51baab94154441b6005162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_91db457f6f577a4e68c597c7ab0a6b4c8ef4377f7e9d747ec242a248a7e70204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91db457f6f577a4e68c597c7ab0a6b4c8ef4377f7e9d747ec242a248a7e70204->enter($__internal_91db457f6f577a4e68c597c7ab0a6b4c8ef4377f7e9d747ec242a248a7e70204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_9e3f56e766c47dab1906419ff9f49134749e9f1d5f51baab94154441b6005162->leave($__internal_9e3f56e766c47dab1906419ff9f49134749e9f1d5f51baab94154441b6005162_prof);

        
        $__internal_91db457f6f577a4e68c597c7ab0a6b4c8ef4377f7e9d747ec242a248a7e70204->leave($__internal_91db457f6f577a4e68c597c7ab0a6b4c8ef4377f7e9d747ec242a248a7e70204_prof);

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
", "EasyAdminBundle:default:label_null.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
