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
        $__internal_f372fe1e63642c30aa0b1fe9b6728e47313473b70f6d723c629712296bdb095a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f372fe1e63642c30aa0b1fe9b6728e47313473b70f6d723c629712296bdb095a->enter($__internal_f372fe1e63642c30aa0b1fe9b6728e47313473b70f6d723c629712296bdb095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_331fcd5aad54c2c8478fd91f58f68508c7de9dbd9e67547f4057d9ac2e80b6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331fcd5aad54c2c8478fd91f58f68508c7de9dbd9e67547f4057d9ac2e80b6d3->enter($__internal_331fcd5aad54c2c8478fd91f58f68508c7de9dbd9e67547f4057d9ac2e80b6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f372fe1e63642c30aa0b1fe9b6728e47313473b70f6d723c629712296bdb095a->leave($__internal_f372fe1e63642c30aa0b1fe9b6728e47313473b70f6d723c629712296bdb095a_prof);

        
        $__internal_331fcd5aad54c2c8478fd91f58f68508c7de9dbd9e67547f4057d9ac2e80b6d3->leave($__internal_331fcd5aad54c2c8478fd91f58f68508c7de9dbd9e67547f4057d9ac2e80b6d3_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
