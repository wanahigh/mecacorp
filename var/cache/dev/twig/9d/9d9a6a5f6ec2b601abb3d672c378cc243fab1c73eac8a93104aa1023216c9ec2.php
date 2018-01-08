<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_46f3f4dd32e2333de45f2db86fc3628d94ac994e72d99f31023fdc9128c570ce extends Twig_Template
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
        $__internal_ba28fbc908d75b1c15f903052f4ca942b91dd36e42aff748c2b9f78e1aa31b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba28fbc908d75b1c15f903052f4ca942b91dd36e42aff748c2b9f78e1aa31b88->enter($__internal_ba28fbc908d75b1c15f903052f4ca942b91dd36e42aff748c2b9f78e1aa31b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_d86f696af0cf2128aeb8f92352bb183c756952c63eb3bfc33256016354051cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86f696af0cf2128aeb8f92352bb183c756952c63eb3bfc33256016354051cc4->enter($__internal_d86f696af0cf2128aeb8f92352bb183c756952c63eb3bfc33256016354051cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_ba28fbc908d75b1c15f903052f4ca942b91dd36e42aff748c2b9f78e1aa31b88->leave($__internal_ba28fbc908d75b1c15f903052f4ca942b91dd36e42aff748c2b9f78e1aa31b88_prof);

        
        $__internal_d86f696af0cf2128aeb8f92352bb183c756952c63eb3bfc33256016354051cc4->leave($__internal_d86f696af0cf2128aeb8f92352bb183c756952c63eb3bfc33256016354051cc4_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
