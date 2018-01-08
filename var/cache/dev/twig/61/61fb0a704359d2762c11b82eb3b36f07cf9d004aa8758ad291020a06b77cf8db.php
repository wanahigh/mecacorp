<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_d612eb27c62fe2dc9d2a419750b09eb2d715d07cfa1315229424f41972f40e8f extends Twig_Template
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
        $__internal_5126069b6fa03fe98943b892f7a593a17e3ff4e970c3e18dd9c8f8614b25c50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5126069b6fa03fe98943b892f7a593a17e3ff4e970c3e18dd9c8f8614b25c50e->enter($__internal_5126069b6fa03fe98943b892f7a593a17e3ff4e970c3e18dd9c8f8614b25c50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_b252804d991b289b56357dee2f5eee8550f48d1d89dd580b6828c850ba5d2e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b252804d991b289b56357dee2f5eee8550f48d1d89dd580b6828c850ba5d2e77->enter($__internal_b252804d991b289b56357dee2f5eee8550f48d1d89dd580b6828c850ba5d2e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_5126069b6fa03fe98943b892f7a593a17e3ff4e970c3e18dd9c8f8614b25c50e->leave($__internal_5126069b6fa03fe98943b892f7a593a17e3ff4e970c3e18dd9c8f8614b25c50e_prof);

        
        $__internal_b252804d991b289b56357dee2f5eee8550f48d1d89dd580b6828c850ba5d2e77->leave($__internal_b252804d991b289b56357dee2f5eee8550f48d1d89dd580b6828c850ba5d2e77_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
