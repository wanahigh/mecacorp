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
        $__internal_26231449eec0f07b2fbe5e0122a960c77c0dc22975e6b244f716806e0310d682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26231449eec0f07b2fbe5e0122a960c77c0dc22975e6b244f716806e0310d682->enter($__internal_26231449eec0f07b2fbe5e0122a960c77c0dc22975e6b244f716806e0310d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_68d84ba67dfd78ee7cc4d20788fc37edd1676ec0f4609f2033778cc13cb52e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d84ba67dfd78ee7cc4d20788fc37edd1676ec0f4609f2033778cc13cb52e06->enter($__internal_68d84ba67dfd78ee7cc4d20788fc37edd1676ec0f4609f2033778cc13cb52e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

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
        
        $__internal_26231449eec0f07b2fbe5e0122a960c77c0dc22975e6b244f716806e0310d682->leave($__internal_26231449eec0f07b2fbe5e0122a960c77c0dc22975e6b244f716806e0310d682_prof);

        
        $__internal_68d84ba67dfd78ee7cc4d20788fc37edd1676ec0f4609f2033778cc13cb52e06->leave($__internal_68d84ba67dfd78ee7cc4d20788fc37edd1676ec0f4609f2033778cc13cb52e06_prof);

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
", "EasyAdminBundle:default:field_guid.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
