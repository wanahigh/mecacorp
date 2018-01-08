<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_affdd4d73adb9f17546b5bb3baf206a703689e59bd8c2d111a0703fc99089b8f extends Twig_Template
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
        $__internal_ef6a5728e01780cb318b9bbf2870d34c475548d89cbdd3a638bb2eb2812c53ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6a5728e01780cb318b9bbf2870d34c475548d89cbdd3a638bb2eb2812c53ef->enter($__internal_ef6a5728e01780cb318b9bbf2870d34c475548d89cbdd3a638bb2eb2812c53ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1f76a272d214b7ed70f31b60394faba9e3d332a97c44f07c4c8ddbc419f15026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f76a272d214b7ed70f31b60394faba9e3d332a97c44f07c4c8ddbc419f15026->enter($__internal_1f76a272d214b7ed70f31b60394faba9e3d332a97c44f07c4c8ddbc419f15026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ef6a5728e01780cb318b9bbf2870d34c475548d89cbdd3a638bb2eb2812c53ef->leave($__internal_ef6a5728e01780cb318b9bbf2870d34c475548d89cbdd3a638bb2eb2812c53ef_prof);

        
        $__internal_1f76a272d214b7ed70f31b60394faba9e3d332a97c44f07c4c8ddbc419f15026->leave($__internal_1f76a272d214b7ed70f31b60394faba9e3d332a97c44f07c4c8ddbc419f15026_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
