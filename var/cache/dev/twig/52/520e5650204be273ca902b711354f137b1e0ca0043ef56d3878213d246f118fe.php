<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_bea5c15f7f5a2792315a83067f45440dd16a483c3219412691a61241f78196ff extends Twig_Template
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
        $__internal_c687a217ccdf8cbc183da42fe0a266bd5ee5577ca623ebeeeefa5df1fd3a78ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c687a217ccdf8cbc183da42fe0a266bd5ee5577ca623ebeeeefa5df1fd3a78ab->enter($__internal_c687a217ccdf8cbc183da42fe0a266bd5ee5577ca623ebeeeefa5df1fd3a78ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_668d9536d74522678d3ded257f0c4eac2ebb7c5ea3b96f899af0d7a7a8e8e10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668d9536d74522678d3ded257f0c4eac2ebb7c5ea3b96f899af0d7a7a8e8e10f->enter($__internal_668d9536d74522678d3ded257f0c4eac2ebb7c5ea3b96f899af0d7a7a8e8e10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_c687a217ccdf8cbc183da42fe0a266bd5ee5577ca623ebeeeefa5df1fd3a78ab->leave($__internal_c687a217ccdf8cbc183da42fe0a266bd5ee5577ca623ebeeeefa5df1fd3a78ab_prof);

        
        $__internal_668d9536d74522678d3ded257f0c4eac2ebb7c5ea3b96f899af0d7a7a8e8e10f->leave($__internal_668d9536d74522678d3ded257f0c4eac2ebb7c5ea3b96f899af0d7a7a8e8e10f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
