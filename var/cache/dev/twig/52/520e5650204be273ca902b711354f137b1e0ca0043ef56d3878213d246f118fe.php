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
        $__internal_a2955cb77d6e9e0687adbccc287ec6681bfc619f282f826a5eb67e0471fa7775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2955cb77d6e9e0687adbccc287ec6681bfc619f282f826a5eb67e0471fa7775->enter($__internal_a2955cb77d6e9e0687adbccc287ec6681bfc619f282f826a5eb67e0471fa7775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_7473ce552d2259b3ce63827821f235d43e0d36db6ab971c3939a7d2b2687f38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7473ce552d2259b3ce63827821f235d43e0d36db6ab971c3939a7d2b2687f38b->enter($__internal_7473ce552d2259b3ce63827821f235d43e0d36db6ab971c3939a7d2b2687f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_a2955cb77d6e9e0687adbccc287ec6681bfc619f282f826a5eb67e0471fa7775->leave($__internal_a2955cb77d6e9e0687adbccc287ec6681bfc619f282f826a5eb67e0471fa7775_prof);

        
        $__internal_7473ce552d2259b3ce63827821f235d43e0d36db6ab971c3939a7d2b2687f38b->leave($__internal_7473ce552d2259b3ce63827821f235d43e0d36db6ab971c3939a7d2b2687f38b_prof);

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
", "EasyAdminBundle:default:field_date.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
