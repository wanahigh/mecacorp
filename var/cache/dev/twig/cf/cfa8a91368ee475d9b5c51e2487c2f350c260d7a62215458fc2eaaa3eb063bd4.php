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
        $__internal_eb77bef73f56e62e007b39c3c0efab268b332752e76baa80b8866af0264782b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb77bef73f56e62e007b39c3c0efab268b332752e76baa80b8866af0264782b7->enter($__internal_eb77bef73f56e62e007b39c3c0efab268b332752e76baa80b8866af0264782b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cd0c625e1c70a320cb9d9dd149ce8fd8799754caa5ec823c4d94c98ed0e64ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0c625e1c70a320cb9d9dd149ce8fd8799754caa5ec823c4d94c98ed0e64ee6->enter($__internal_cd0c625e1c70a320cb9d9dd149ce8fd8799754caa5ec823c4d94c98ed0e64ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eb77bef73f56e62e007b39c3c0efab268b332752e76baa80b8866af0264782b7->leave($__internal_eb77bef73f56e62e007b39c3c0efab268b332752e76baa80b8866af0264782b7_prof);

        
        $__internal_cd0c625e1c70a320cb9d9dd149ce8fd8799754caa5ec823c4d94c98ed0e64ee6->leave($__internal_cd0c625e1c70a320cb9d9dd149ce8fd8799754caa5ec823c4d94c98ed0e64ee6_prof);

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
