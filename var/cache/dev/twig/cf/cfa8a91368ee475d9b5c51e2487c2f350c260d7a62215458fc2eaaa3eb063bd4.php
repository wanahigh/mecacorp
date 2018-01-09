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
        $__internal_623a277863c396462b6553c10d70a1b37629ce8f50a6e5d65e84946738b1f4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623a277863c396462b6553c10d70a1b37629ce8f50a6e5d65e84946738b1f4c8->enter($__internal_623a277863c396462b6553c10d70a1b37629ce8f50a6e5d65e84946738b1f4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a4cce3c446198d1111a489a5c96ddfbe596b1eaed8c573194ff0d1293f319129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cce3c446198d1111a489a5c96ddfbe596b1eaed8c573194ff0d1293f319129->enter($__internal_a4cce3c446198d1111a489a5c96ddfbe596b1eaed8c573194ff0d1293f319129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_623a277863c396462b6553c10d70a1b37629ce8f50a6e5d65e84946738b1f4c8->leave($__internal_623a277863c396462b6553c10d70a1b37629ce8f50a6e5d65e84946738b1f4c8_prof);

        
        $__internal_a4cce3c446198d1111a489a5c96ddfbe596b1eaed8c573194ff0d1293f319129->leave($__internal_a4cce3c446198d1111a489a5c96ddfbe596b1eaed8c573194ff0d1293f319129_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
