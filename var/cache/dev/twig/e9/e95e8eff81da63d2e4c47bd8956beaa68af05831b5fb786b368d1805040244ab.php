<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_39877b5acdb3b03ecf17c752121067c99da12e025a96f7d0610d5ad2cdc2e9e2 extends Twig_Template
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
        $__internal_eda9eb41722e0b1cb60403e524baee3e2a82180a0da698345a1c9f8ca4818cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda9eb41722e0b1cb60403e524baee3e2a82180a0da698345a1c9f8ca4818cc9->enter($__internal_eda9eb41722e0b1cb60403e524baee3e2a82180a0da698345a1c9f8ca4818cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_8fefdf991fbd3a5ff6f41a594ac5406ff4dc6e23c536ac87286c6e1daf015d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fefdf991fbd3a5ff6f41a594ac5406ff4dc6e23c536ac87286c6e1daf015d5d->enter($__internal_8fefdf991fbd3a5ff6f41a594ac5406ff4dc6e23c536ac87286c6e1daf015d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_eda9eb41722e0b1cb60403e524baee3e2a82180a0da698345a1c9f8ca4818cc9->leave($__internal_eda9eb41722e0b1cb60403e524baee3e2a82180a0da698345a1c9f8ca4818cc9_prof);

        
        $__internal_8fefdf991fbd3a5ff6f41a594ac5406ff4dc6e23c536ac87286c6e1daf015d5d->leave($__internal_8fefdf991fbd3a5ff6f41a594ac5406ff4dc6e23c536ac87286c6e1daf015d5d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
