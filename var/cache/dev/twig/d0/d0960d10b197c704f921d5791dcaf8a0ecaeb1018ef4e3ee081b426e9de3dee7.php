<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_c75cfcd3501212705a20a2f59e2de35eefc45e7e2631c6b40e39c359e93f7da9 extends Twig_Template
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
        $__internal_3883c98dff57390ab08c0ca8c5264309b0c04c19137c95c1668f24b45f6d6a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3883c98dff57390ab08c0ca8c5264309b0c04c19137c95c1668f24b45f6d6a64->enter($__internal_3883c98dff57390ab08c0ca8c5264309b0c04c19137c95c1668f24b45f6d6a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_657a7fa6a6befb29434fbea998cb1de5fc14e9127cc343856b1fadcc8fa3c552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657a7fa6a6befb29434fbea998cb1de5fc14e9127cc343856b1fadcc8fa3c552->enter($__internal_657a7fa6a6befb29434fbea998cb1de5fc14e9127cc343856b1fadcc8fa3c552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_3883c98dff57390ab08c0ca8c5264309b0c04c19137c95c1668f24b45f6d6a64->leave($__internal_3883c98dff57390ab08c0ca8c5264309b0c04c19137c95c1668f24b45f6d6a64_prof);

        
        $__internal_657a7fa6a6befb29434fbea998cb1de5fc14e9127cc343856b1fadcc8fa3c552->leave($__internal_657a7fa6a6befb29434fbea998cb1de5fc14e9127cc343856b1fadcc8fa3c552_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
