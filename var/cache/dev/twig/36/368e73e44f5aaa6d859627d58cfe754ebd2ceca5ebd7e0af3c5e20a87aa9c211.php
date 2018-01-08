<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_77f82fcdb397a28e57cf633558a2c6f704b12a9d8b2c3c64159d8c83c9efb0ee extends Twig_Template
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
        $__internal_e6ce8671a03caccf51bfcc0116e6e422b369813a5ac1cd95144bbc2527c98b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ce8671a03caccf51bfcc0116e6e422b369813a5ac1cd95144bbc2527c98b2e->enter($__internal_e6ce8671a03caccf51bfcc0116e6e422b369813a5ac1cd95144bbc2527c98b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_cdaf62b7e89763c2af58ec091e4fdc6c864d27b8a13a058b4580e718f2e1db15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdaf62b7e89763c2af58ec091e4fdc6c864d27b8a13a058b4580e718f2e1db15->enter($__internal_cdaf62b7e89763c2af58ec091e4fdc6c864d27b8a13a058b4580e718f2e1db15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 2, $this->getSourceContext()); })()), "format", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_e6ce8671a03caccf51bfcc0116e6e422b369813a5ac1cd95144bbc2527c98b2e->leave($__internal_e6ce8671a03caccf51bfcc0116e6e422b369813a5ac1cd95144bbc2527c98b2e_prof);

        
        $__internal_cdaf62b7e89763c2af58ec091e4fdc6c864d27b8a13a058b4580e718f2e1db15->leave($__internal_cdaf62b7e89763c2af58ec091e4fdc6c864d27b8a13a058b4580e718f2e1db15_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_smallint.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
