<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_93ea1193a62fa6ff66cbb0eb8bc9fa002316f63047de4a37639dda7c621d5ee5 extends Twig_Template
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
        $__internal_a2fbafe4df84aa24a3aa72f1bde4addf65ed589c513274ad55a4499f9abb8d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fbafe4df84aa24a3aa72f1bde4addf65ed589c513274ad55a4499f9abb8d68->enter($__internal_a2fbafe4df84aa24a3aa72f1bde4addf65ed589c513274ad55a4499f9abb8d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9e2d25b0b292b7a1b26efcb220d577b11af25d8f56abb5e7b3db58437f7ca567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2d25b0b292b7a1b26efcb220d577b11af25d8f56abb5e7b3db58437f7ca567->enter($__internal_9e2d25b0b292b7a1b26efcb220d577b11af25d8f56abb5e7b3db58437f7ca567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a2fbafe4df84aa24a3aa72f1bde4addf65ed589c513274ad55a4499f9abb8d68->leave($__internal_a2fbafe4df84aa24a3aa72f1bde4addf65ed589c513274ad55a4499f9abb8d68_prof);

        
        $__internal_9e2d25b0b292b7a1b26efcb220d577b11af25d8f56abb5e7b3db58437f7ca567->leave($__internal_9e2d25b0b292b7a1b26efcb220d577b11af25d8f56abb5e7b3db58437f7ca567_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
