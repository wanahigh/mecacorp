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
        $__internal_e7b8743deff8812e207d4eeb7b934be07f578a15c0231ea3387a5754cd9269ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b8743deff8812e207d4eeb7b934be07f578a15c0231ea3387a5754cd9269ec->enter($__internal_e7b8743deff8812e207d4eeb7b934be07f578a15c0231ea3387a5754cd9269ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fee4a9798c6ab13a2aef5a9b66745bb90c57e59102b3f7c68ae650b3b7dcae24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee4a9798c6ab13a2aef5a9b66745bb90c57e59102b3f7c68ae650b3b7dcae24->enter($__internal_fee4a9798c6ab13a2aef5a9b66745bb90c57e59102b3f7c68ae650b3b7dcae24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e7b8743deff8812e207d4eeb7b934be07f578a15c0231ea3387a5754cd9269ec->leave($__internal_e7b8743deff8812e207d4eeb7b934be07f578a15c0231ea3387a5754cd9269ec_prof);

        
        $__internal_fee4a9798c6ab13a2aef5a9b66745bb90c57e59102b3f7c68ae650b3b7dcae24->leave($__internal_fee4a9798c6ab13a2aef5a9b66745bb90c57e59102b3f7c68ae650b3b7dcae24_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
