<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_8988ada96d50d704a2d5431f0872931e7c50e259a4c197792ef2255c09e7ed38 extends Twig_Template
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
        $__internal_4047dc1f119f78a61c46180e18c1ca43439e985f19b4bf2eff763140b1918346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4047dc1f119f78a61c46180e18c1ca43439e985f19b4bf2eff763140b1918346->enter($__internal_4047dc1f119f78a61c46180e18c1ca43439e985f19b4bf2eff763140b1918346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_f46f37f59389b71a5c8b3289e87e029499d19b2a247a980a470792839cadda4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46f37f59389b71a5c8b3289e87e029499d19b2a247a980a470792839cadda4b->enter($__internal_f46f37f59389b71a5c8b3289e87e029499d19b2a247a980a470792839cadda4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_4047dc1f119f78a61c46180e18c1ca43439e985f19b4bf2eff763140b1918346->leave($__internal_4047dc1f119f78a61c46180e18c1ca43439e985f19b4bf2eff763140b1918346_prof);

        
        $__internal_f46f37f59389b71a5c8b3289e87e029499d19b2a247a980a470792839cadda4b->leave($__internal_f46f37f59389b71a5c8b3289e87e029499d19b2a247a980a470792839cadda4b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
