<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_f801623681d3994505c335f4853c2c3d50f7defaa9983e5a8025b1469e39db61 extends Twig_Template
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
        $__internal_0913c427a63673a02ec6525e5f11081e15918c18d9dbec1d65a2981d08708acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0913c427a63673a02ec6525e5f11081e15918c18d9dbec1d65a2981d08708acb->enter($__internal_0913c427a63673a02ec6525e5f11081e15918c18d9dbec1d65a2981d08708acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_fb746eabc4462e0b421c04c7dbe59378d17c5df372530c57b87c1d7237e84f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb746eabc4462e0b421c04c7dbe59378d17c5df372530c57b87c1d7237e84f1f->enter($__internal_fb746eabc4462e0b421c04c7dbe59378d17c5df372530c57b87c1d7237e84f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_0913c427a63673a02ec6525e5f11081e15918c18d9dbec1d65a2981d08708acb->leave($__internal_0913c427a63673a02ec6525e5f11081e15918c18d9dbec1d65a2981d08708acb_prof);

        
        $__internal_fb746eabc4462e0b421c04c7dbe59378d17c5df372530c57b87c1d7237e84f1f->leave($__internal_fb746eabc4462e0b421c04c7dbe59378d17c5df372530c57b87c1d7237e84f1f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
", "EasyAdminBundle:default:field_bigint.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_bigint.html.twig");
    }
}
