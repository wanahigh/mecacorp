<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5f6e1cf4ff59ab8f75e59a8d90349883ee1e130f236dde3cfa99d882363d4491 extends Twig_Template
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
        $__internal_a3023c13db13ec07936f714ec58b872a7cf0b5b348f5b03a1af96e0b54c2ac97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3023c13db13ec07936f714ec58b872a7cf0b5b348f5b03a1af96e0b54c2ac97->enter($__internal_a3023c13db13ec07936f714ec58b872a7cf0b5b348f5b03a1af96e0b54c2ac97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_86ee72b05a72bea0ccbcd2de880ba53f91dc1a8ad1860a1ec7526902b0b153cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ee72b05a72bea0ccbcd2de880ba53f91dc1a8ad1860a1ec7526902b0b153cc->enter($__internal_86ee72b05a72bea0ccbcd2de880ba53f91dc1a8ad1860a1ec7526902b0b153cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a3023c13db13ec07936f714ec58b872a7cf0b5b348f5b03a1af96e0b54c2ac97->leave($__internal_a3023c13db13ec07936f714ec58b872a7cf0b5b348f5b03a1af96e0b54c2ac97_prof);

        
        $__internal_86ee72b05a72bea0ccbcd2de880ba53f91dc1a8ad1860a1ec7526902b0b153cc->leave($__internal_86ee72b05a72bea0ccbcd2de880ba53f91dc1a8ad1860a1ec7526902b0b153cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
