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
        $__internal_0fe32e9a784fec0cdf5803e3ca240c3e2ca0407eae74b03dd85670ad4743ba3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe32e9a784fec0cdf5803e3ca240c3e2ca0407eae74b03dd85670ad4743ba3b->enter($__internal_0fe32e9a784fec0cdf5803e3ca240c3e2ca0407eae74b03dd85670ad4743ba3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5078f0f72329c73f8935ce35f64c9d72352239b8f6ecec986b4f59c848d3ba94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5078f0f72329c73f8935ce35f64c9d72352239b8f6ecec986b4f59c848d3ba94->enter($__internal_5078f0f72329c73f8935ce35f64c9d72352239b8f6ecec986b4f59c848d3ba94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0fe32e9a784fec0cdf5803e3ca240c3e2ca0407eae74b03dd85670ad4743ba3b->leave($__internal_0fe32e9a784fec0cdf5803e3ca240c3e2ca0407eae74b03dd85670ad4743ba3b_prof);

        
        $__internal_5078f0f72329c73f8935ce35f64c9d72352239b8f6ecec986b4f59c848d3ba94->leave($__internal_5078f0f72329c73f8935ce35f64c9d72352239b8f6ecec986b4f59c848d3ba94_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
