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
        $__internal_90f0d5c8478584eb87e5d7c3a0264f5d4dca4356e6aa7ef9b28fa5eaf1512767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f0d5c8478584eb87e5d7c3a0264f5d4dca4356e6aa7ef9b28fa5eaf1512767->enter($__internal_90f0d5c8478584eb87e5d7c3a0264f5d4dca4356e6aa7ef9b28fa5eaf1512767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6ccbdcbf2bb97f0bb8e8ddb670006824ddb6fdb6f14de0ca342e6700d0d19131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccbdcbf2bb97f0bb8e8ddb670006824ddb6fdb6f14de0ca342e6700d0d19131->enter($__internal_6ccbdcbf2bb97f0bb8e8ddb670006824ddb6fdb6f14de0ca342e6700d0d19131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_90f0d5c8478584eb87e5d7c3a0264f5d4dca4356e6aa7ef9b28fa5eaf1512767->leave($__internal_90f0d5c8478584eb87e5d7c3a0264f5d4dca4356e6aa7ef9b28fa5eaf1512767_prof);

        
        $__internal_6ccbdcbf2bb97f0bb8e8ddb670006824ddb6fdb6f14de0ca342e6700d0d19131->leave($__internal_6ccbdcbf2bb97f0bb8e8ddb670006824ddb6fdb6f14de0ca342e6700d0d19131_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
