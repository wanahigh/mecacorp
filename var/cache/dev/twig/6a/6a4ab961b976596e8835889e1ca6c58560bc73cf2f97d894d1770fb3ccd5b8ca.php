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
        $__internal_200523eb8a1351619a43f542ccbf190060827b3fd0bd02e9e0f72ac48dce70e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200523eb8a1351619a43f542ccbf190060827b3fd0bd02e9e0f72ac48dce70e8->enter($__internal_200523eb8a1351619a43f542ccbf190060827b3fd0bd02e9e0f72ac48dce70e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_1d9e1db0e78ba0d8463971bde1e1ac5807e5f2c7f0234f93ab3806871ea452c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9e1db0e78ba0d8463971bde1e1ac5807e5f2c7f0234f93ab3806871ea452c6->enter($__internal_1d9e1db0e78ba0d8463971bde1e1ac5807e5f2c7f0234f93ab3806871ea452c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_200523eb8a1351619a43f542ccbf190060827b3fd0bd02e9e0f72ac48dce70e8->leave($__internal_200523eb8a1351619a43f542ccbf190060827b3fd0bd02e9e0f72ac48dce70e8_prof);

        
        $__internal_1d9e1db0e78ba0d8463971bde1e1ac5807e5f2c7f0234f93ab3806871ea452c6->leave($__internal_1d9e1db0e78ba0d8463971bde1e1ac5807e5f2c7f0234f93ab3806871ea452c6_prof);

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
", "EasyAdminBundle:default:field_datetime.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
