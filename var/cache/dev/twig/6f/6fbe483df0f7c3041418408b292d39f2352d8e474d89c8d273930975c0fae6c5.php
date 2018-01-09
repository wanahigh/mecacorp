<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_4f93f6477760cdfb530e1970a89f417572e8b6a1fc8563fd555f51ff3c6e3982 extends Twig_Template
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
        $__internal_3708860547a7afb96616da3d7bf72b4459bdfe186a0607acc98e21a7da374219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3708860547a7afb96616da3d7bf72b4459bdfe186a0607acc98e21a7da374219->enter($__internal_3708860547a7afb96616da3d7bf72b4459bdfe186a0607acc98e21a7da374219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_f76cf46e0363e99a227cb191400faf5912d5158283b9c870de455d7f6809e08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76cf46e0363e99a227cb191400faf5912d5158283b9c870de455d7f6809e08a->enter($__internal_f76cf46e0363e99a227cb191400faf5912d5158283b9c870de455d7f6809e08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_3708860547a7afb96616da3d7bf72b4459bdfe186a0607acc98e21a7da374219->leave($__internal_3708860547a7afb96616da3d7bf72b4459bdfe186a0607acc98e21a7da374219_prof);

        
        $__internal_f76cf46e0363e99a227cb191400faf5912d5158283b9c870de455d7f6809e08a->leave($__internal_f76cf46e0363e99a227cb191400faf5912d5158283b9c870de455d7f6809e08a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
