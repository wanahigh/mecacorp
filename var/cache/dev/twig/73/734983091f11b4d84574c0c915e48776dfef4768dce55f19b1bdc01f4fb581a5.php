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
        $__internal_89fa47b933202ad98ba3458c031fa6a455501f93282eb11f3e77defc097689fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fa47b933202ad98ba3458c031fa6a455501f93282eb11f3e77defc097689fa->enter($__internal_89fa47b933202ad98ba3458c031fa6a455501f93282eb11f3e77defc097689fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1b6b0a7bc6ced8662aa760fa99e04d3803520c3d85ccccd36d0fc72830360c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6b0a7bc6ced8662aa760fa99e04d3803520c3d85ccccd36d0fc72830360c35->enter($__internal_1b6b0a7bc6ced8662aa760fa99e04d3803520c3d85ccccd36d0fc72830360c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_89fa47b933202ad98ba3458c031fa6a455501f93282eb11f3e77defc097689fa->leave($__internal_89fa47b933202ad98ba3458c031fa6a455501f93282eb11f3e77defc097689fa_prof);

        
        $__internal_1b6b0a7bc6ced8662aa760fa99e04d3803520c3d85ccccd36d0fc72830360c35->leave($__internal_1b6b0a7bc6ced8662aa760fa99e04d3803520c3d85ccccd36d0fc72830360c35_prof);

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
