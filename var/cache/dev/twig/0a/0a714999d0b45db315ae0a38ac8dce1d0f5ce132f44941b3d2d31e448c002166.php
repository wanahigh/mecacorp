<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_32f4ab469a2864df6f92032de7a3aa8fd90ce2ca237e2fc02c39a14d22242630 extends Twig_Template
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
        $__internal_07a2a68693eab9a7b47da646c3e438b00f44f11a2290949a25668884d7cb7495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a2a68693eab9a7b47da646c3e438b00f44f11a2290949a25668884d7cb7495->enter($__internal_07a2a68693eab9a7b47da646c3e438b00f44f11a2290949a25668884d7cb7495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c1d698212f554c602fa361e23b0aa31f066551df0ac293d3aeee4374ccc47784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d698212f554c602fa361e23b0aa31f066551df0ac293d3aeee4374ccc47784->enter($__internal_c1d698212f554c602fa361e23b0aa31f066551df0ac293d3aeee4374ccc47784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_07a2a68693eab9a7b47da646c3e438b00f44f11a2290949a25668884d7cb7495->leave($__internal_07a2a68693eab9a7b47da646c3e438b00f44f11a2290949a25668884d7cb7495_prof);

        
        $__internal_c1d698212f554c602fa361e23b0aa31f066551df0ac293d3aeee4374ccc47784->leave($__internal_c1d698212f554c602fa361e23b0aa31f066551df0ac293d3aeee4374ccc47784_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
