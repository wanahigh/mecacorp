<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_3769cb8988c5c9e206a6b9db8d408363a89fc30ea9e980ec9a365f4c526251ec extends Twig_Template
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
        $__internal_c5b392727236a717eeda76bcf2bc5c6675223a5ffbcb03eb5ffeaabb01003f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b392727236a717eeda76bcf2bc5c6675223a5ffbcb03eb5ffeaabb01003f22->enter($__internal_c5b392727236a717eeda76bcf2bc5c6675223a5ffbcb03eb5ffeaabb01003f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_ed5c855734068dae9b0f375c41d02d57767b6696fc0eda19dde1cc40b9ff0869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5c855734068dae9b0f375c41d02d57767b6696fc0eda19dde1cc40b9ff0869->enter($__internal_ed5c855734068dae9b0f375c41d02d57767b6696fc0eda19dde1cc40b9ff0869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_c5b392727236a717eeda76bcf2bc5c6675223a5ffbcb03eb5ffeaabb01003f22->leave($__internal_c5b392727236a717eeda76bcf2bc5c6675223a5ffbcb03eb5ffeaabb01003f22_prof);

        
        $__internal_ed5c855734068dae9b0f375c41d02d57767b6696fc0eda19dde1cc40b9ff0869->leave($__internal_ed5c855734068dae9b0f375c41d02d57767b6696fc0eda19dde1cc40b9ff0869_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
