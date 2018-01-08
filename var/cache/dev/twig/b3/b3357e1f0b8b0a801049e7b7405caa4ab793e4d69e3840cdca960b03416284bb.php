<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_d8cdd84a2fafedccf91e0b62b1c4424bc8e3cf7bca9cf31c12ab6bf7a8ed9709 extends Twig_Template
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
        $__internal_e292d86af5f52ae18f509aa87d433530917fe226d0f1c9079e697a91307740b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e292d86af5f52ae18f509aa87d433530917fe226d0f1c9079e697a91307740b0->enter($__internal_e292d86af5f52ae18f509aa87d433530917fe226d0f1c9079e697a91307740b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_4dc604b430e975b8f45e9211749ebc57d2dfc1f6d26f498e333fe4e0a10da4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc604b430e975b8f45e9211749ebc57d2dfc1f6d26f498e333fe4e0a10da4aa->enter($__internal_4dc604b430e975b8f45e9211749ebc57d2dfc1f6d26f498e333fe4e0a10da4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_e292d86af5f52ae18f509aa87d433530917fe226d0f1c9079e697a91307740b0->leave($__internal_e292d86af5f52ae18f509aa87d433530917fe226d0f1c9079e697a91307740b0_prof);

        
        $__internal_4dc604b430e975b8f45e9211749ebc57d2dfc1f6d26f498e333fe4e0a10da4aa->leave($__internal_4dc604b430e975b8f45e9211749ebc57d2dfc1f6d26f498e333fe4e0a10da4aa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
", "EasyAdminBundle:default:field_string.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
