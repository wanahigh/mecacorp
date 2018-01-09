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
        $__internal_5b83e300ac941a9bf530a75640ba080a624cfb1f9dae4cf387e40e8be2c85abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b83e300ac941a9bf530a75640ba080a624cfb1f9dae4cf387e40e8be2c85abf->enter($__internal_5b83e300ac941a9bf530a75640ba080a624cfb1f9dae4cf387e40e8be2c85abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f989f210f4790adc2fc492fcc12b281d30e0b808240064a807becdcdac66d782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f989f210f4790adc2fc492fcc12b281d30e0b808240064a807becdcdac66d782->enter($__internal_f989f210f4790adc2fc492fcc12b281d30e0b808240064a807becdcdac66d782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5b83e300ac941a9bf530a75640ba080a624cfb1f9dae4cf387e40e8be2c85abf->leave($__internal_5b83e300ac941a9bf530a75640ba080a624cfb1f9dae4cf387e40e8be2c85abf_prof);

        
        $__internal_f989f210f4790adc2fc492fcc12b281d30e0b808240064a807becdcdac66d782->leave($__internal_f989f210f4790adc2fc492fcc12b281d30e0b808240064a807becdcdac66d782_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
