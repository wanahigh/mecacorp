<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fe71847bd15e50504a88825982acebd8d7874654bf16f4d0ac1e5643c9dada54 extends Twig_Template
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
        $__internal_9b90e72fadfbadc3fff2a57ccb126dc6f704be2da7d79d295f352b252adae930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b90e72fadfbadc3fff2a57ccb126dc6f704be2da7d79d295f352b252adae930->enter($__internal_9b90e72fadfbadc3fff2a57ccb126dc6f704be2da7d79d295f352b252adae930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_42372e7982ac04461314c537176a5a9d59bd6e541edf17647f234a736bf69193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42372e7982ac04461314c537176a5a9d59bd6e541edf17647f234a736bf69193->enter($__internal_42372e7982ac04461314c537176a5a9d59bd6e541edf17647f234a736bf69193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9b90e72fadfbadc3fff2a57ccb126dc6f704be2da7d79d295f352b252adae930->leave($__internal_9b90e72fadfbadc3fff2a57ccb126dc6f704be2da7d79d295f352b252adae930_prof);

        
        $__internal_42372e7982ac04461314c537176a5a9d59bd6e541edf17647f234a736bf69193->leave($__internal_42372e7982ac04461314c537176a5a9d59bd6e541edf17647f234a736bf69193_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
