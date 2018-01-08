<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8d019d62340cc90458c92fb7e4dcfefbb2a1158164b41bfadc3e43f250d34c65 extends Twig_Template
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
        $__internal_cfe160f5517150f5c7e9d32ef6ab66c994b743f91f394dcae5a05e9550a49874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe160f5517150f5c7e9d32ef6ab66c994b743f91f394dcae5a05e9550a49874->enter($__internal_cfe160f5517150f5c7e9d32ef6ab66c994b743f91f394dcae5a05e9550a49874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d8cedd2e94c6f405e597eb31d6791f3d9f807197f95f48be8ae6b7a66c6e5259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cedd2e94c6f405e597eb31d6791f3d9f807197f95f48be8ae6b7a66c6e5259->enter($__internal_d8cedd2e94c6f405e597eb31d6791f3d9f807197f95f48be8ae6b7a66c6e5259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cfe160f5517150f5c7e9d32ef6ab66c994b743f91f394dcae5a05e9550a49874->leave($__internal_cfe160f5517150f5c7e9d32ef6ab66c994b743f91f394dcae5a05e9550a49874_prof);

        
        $__internal_d8cedd2e94c6f405e597eb31d6791f3d9f807197f95f48be8ae6b7a66c6e5259->leave($__internal_d8cedd2e94c6f405e597eb31d6791f3d9f807197f95f48be8ae6b7a66c6e5259_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
