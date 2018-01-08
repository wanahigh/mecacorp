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
        $__internal_ab36944dd5a586c9c1d0e4e3e6376aef034a0cf05927d3ae777ff69ad73a6807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab36944dd5a586c9c1d0e4e3e6376aef034a0cf05927d3ae777ff69ad73a6807->enter($__internal_ab36944dd5a586c9c1d0e4e3e6376aef034a0cf05927d3ae777ff69ad73a6807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7e378bed51e96d455d07b99660a70d2eeb9c305991ca7f8100118ed9ac8becb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e378bed51e96d455d07b99660a70d2eeb9c305991ca7f8100118ed9ac8becb1->enter($__internal_7e378bed51e96d455d07b99660a70d2eeb9c305991ca7f8100118ed9ac8becb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_ab36944dd5a586c9c1d0e4e3e6376aef034a0cf05927d3ae777ff69ad73a6807->leave($__internal_ab36944dd5a586c9c1d0e4e3e6376aef034a0cf05927d3ae777ff69ad73a6807_prof);

        
        $__internal_7e378bed51e96d455d07b99660a70d2eeb9c305991ca7f8100118ed9ac8becb1->leave($__internal_7e378bed51e96d455d07b99660a70d2eeb9c305991ca7f8100118ed9ac8becb1_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
