<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_e8c2885127fafbc554ca7bd67d6b08b744a6afc38ee3b403bb62dc4cb8aba271 extends Twig_Template
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
        $__internal_d75c59da1e43736c712c80d5d28b6752a5b790e970d42938a7f94278e0714d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75c59da1e43736c712c80d5d28b6752a5b790e970d42938a7f94278e0714d8c->enter($__internal_d75c59da1e43736c712c80d5d28b6752a5b790e970d42938a7f94278e0714d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_aff630ff7d3cf9a0e60429fb4b78a79ecbfc2263159c19201ef5c202b06914de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff630ff7d3cf9a0e60429fb4b78a79ecbfc2263159c19201ef5c202b06914de->enter($__internal_aff630ff7d3cf9a0e60429fb4b78a79ecbfc2263159c19201ef5c202b06914de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_d75c59da1e43736c712c80d5d28b6752a5b790e970d42938a7f94278e0714d8c->leave($__internal_d75c59da1e43736c712c80d5d28b6752a5b790e970d42938a7f94278e0714d8c_prof);

        
        $__internal_aff630ff7d3cf9a0e60429fb4b78a79ecbfc2263159c19201ef5c202b06914de->leave($__internal_aff630ff7d3cf9a0e60429fb4b78a79ecbfc2263159c19201ef5c202b06914de_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
