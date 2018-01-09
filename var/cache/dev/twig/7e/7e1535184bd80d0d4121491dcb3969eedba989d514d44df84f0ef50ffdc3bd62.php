<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_589fba6f7b6350ef0303f5925601c0da72ad227f826aa05e7580f5855eae1c24 extends Twig_Template
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
        $__internal_c7f0dd9fa4607fca615fafcdc98eb3da2a4441ccb53d0edbb20305daa8990664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f0dd9fa4607fca615fafcdc98eb3da2a4441ccb53d0edbb20305daa8990664->enter($__internal_c7f0dd9fa4607fca615fafcdc98eb3da2a4441ccb53d0edbb20305daa8990664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_fe493b9469129b0e34633839aad64ff80ba855aa113dfe5742fa6d16c35e5be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe493b9469129b0e34633839aad64ff80ba855aa113dfe5742fa6d16c35e5be4->enter($__internal_fe493b9469129b0e34633839aad64ff80ba855aa113dfe5742fa6d16c35e5be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c7f0dd9fa4607fca615fafcdc98eb3da2a4441ccb53d0edbb20305daa8990664->leave($__internal_c7f0dd9fa4607fca615fafcdc98eb3da2a4441ccb53d0edbb20305daa8990664_prof);

        
        $__internal_fe493b9469129b0e34633839aad64ff80ba855aa113dfe5742fa6d16c35e5be4->leave($__internal_fe493b9469129b0e34633839aad64ff80ba855aa113dfe5742fa6d16c35e5be4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
