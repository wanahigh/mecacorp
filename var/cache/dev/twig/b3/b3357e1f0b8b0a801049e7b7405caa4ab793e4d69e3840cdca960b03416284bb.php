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
        $__internal_f5f6eb001bc5bcf4fb3cd64736073070ec21757a340744c7e2bdefbd8e76a9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f6eb001bc5bcf4fb3cd64736073070ec21757a340744c7e2bdefbd8e76a9c9->enter($__internal_f5f6eb001bc5bcf4fb3cd64736073070ec21757a340744c7e2bdefbd8e76a9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_a5e80d25e6bb719b36107456cf71b49d7cf92b46034d958888034c94f4ad98c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e80d25e6bb719b36107456cf71b49d7cf92b46034d958888034c94f4ad98c6->enter($__internal_a5e80d25e6bb719b36107456cf71b49d7cf92b46034d958888034c94f4ad98c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_f5f6eb001bc5bcf4fb3cd64736073070ec21757a340744c7e2bdefbd8e76a9c9->leave($__internal_f5f6eb001bc5bcf4fb3cd64736073070ec21757a340744c7e2bdefbd8e76a9c9_prof);

        
        $__internal_a5e80d25e6bb719b36107456cf71b49d7cf92b46034d958888034c94f4ad98c6->leave($__internal_a5e80d25e6bb719b36107456cf71b49d7cf92b46034d958888034c94f4ad98c6_prof);

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
", "EasyAdminBundle:default:field_string.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
