<?php

/* @EasyAdmin/default/field_datetime.html.twig */
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
        $__internal_6013044d627a1ec509bdeb88b1a848688c900f0dfc1881b249397ac563bc5cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6013044d627a1ec509bdeb88b1a848688c900f0dfc1881b249397ac563bc5cdd->enter($__internal_6013044d627a1ec509bdeb88b1a848688c900f0dfc1881b249397ac563bc5cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_33c230c3d38c336f22cceeaff940416c876bceac1f10b61e997c90c6a226a3ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c230c3d38c336f22cceeaff940416c876bceac1f10b61e997c90c6a226a3ac->enter($__internal_33c230c3d38c336f22cceeaff940416c876bceac1f10b61e997c90c6a226a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6013044d627a1ec509bdeb88b1a848688c900f0dfc1881b249397ac563bc5cdd->leave($__internal_6013044d627a1ec509bdeb88b1a848688c900f0dfc1881b249397ac563bc5cdd_prof);

        
        $__internal_33c230c3d38c336f22cceeaff940416c876bceac1f10b61e997c90c6a226a3ac->leave($__internal_33c230c3d38c336f22cceeaff940416c876bceac1f10b61e997c90c6a226a3ac_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/home/sunshine/Documents/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
