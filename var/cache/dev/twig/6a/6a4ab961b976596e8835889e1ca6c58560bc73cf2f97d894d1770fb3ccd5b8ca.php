<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_b86e40f7682e1061f15cf54351234b4ef28288d301b320cef6603d3e6ae6fb76 extends Twig_Template
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
        $__internal_353c8436f925c68390972baf14b539e9885f4bc9e7662c7daadb4504321a58af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_353c8436f925c68390972baf14b539e9885f4bc9e7662c7daadb4504321a58af->enter($__internal_353c8436f925c68390972baf14b539e9885f4bc9e7662c7daadb4504321a58af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_3b15487594a52a015cfaba28612de47c1b8ed48f77fbb89092c31bd479eb417e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b15487594a52a015cfaba28612de47c1b8ed48f77fbb89092c31bd479eb417e->enter($__internal_3b15487594a52a015cfaba28612de47c1b8ed48f77fbb89092c31bd479eb417e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_353c8436f925c68390972baf14b539e9885f4bc9e7662c7daadb4504321a58af->leave($__internal_353c8436f925c68390972baf14b539e9885f4bc9e7662c7daadb4504321a58af_prof);

        
        $__internal_3b15487594a52a015cfaba28612de47c1b8ed48f77fbb89092c31bd479eb417e->leave($__internal_3b15487594a52a015cfaba28612de47c1b8ed48f77fbb89092c31bd479eb417e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
