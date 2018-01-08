<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_93ea1193a62fa6ff66cbb0eb8bc9fa002316f63047de4a37639dda7c621d5ee5 extends Twig_Template
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
        $__internal_0257e8434434f7cd73723077d799faab94b107c46bf16326ebbb091a9c6eea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0257e8434434f7cd73723077d799faab94b107c46bf16326ebbb091a9c6eea59->enter($__internal_0257e8434434f7cd73723077d799faab94b107c46bf16326ebbb091a9c6eea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a6070a1878ddf67dbc742f2e2266e21a4e086a38902be1c6c77d27735de9f8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6070a1878ddf67dbc742f2e2266e21a4e086a38902be1c6c77d27735de9f8a2->enter($__internal_a6070a1878ddf67dbc742f2e2266e21a4e086a38902be1c6c77d27735de9f8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0257e8434434f7cd73723077d799faab94b107c46bf16326ebbb091a9c6eea59->leave($__internal_0257e8434434f7cd73723077d799faab94b107c46bf16326ebbb091a9c6eea59_prof);

        
        $__internal_a6070a1878ddf67dbc742f2e2266e21a4e086a38902be1c6c77d27735de9f8a2->leave($__internal_a6070a1878ddf67dbc742f2e2266e21a4e086a38902be1c6c77d27735de9f8a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
