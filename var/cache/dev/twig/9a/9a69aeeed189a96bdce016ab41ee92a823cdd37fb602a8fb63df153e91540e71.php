<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f01dc6044a708b87cf2ecfcbfb354f0df61cbe334bc1de26db2861ce7166701f extends Twig_Template
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
        $__internal_eac4229ecaf931348fc2b5ee31462d9a2ca1f62c1c95173c81c329d553176579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac4229ecaf931348fc2b5ee31462d9a2ca1f62c1c95173c81c329d553176579->enter($__internal_eac4229ecaf931348fc2b5ee31462d9a2ca1f62c1c95173c81c329d553176579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1debcd69cc1cf814671bd7dc700a76950f2fad9b424f97777893d9cf10ba6599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1debcd69cc1cf814671bd7dc700a76950f2fad9b424f97777893d9cf10ba6599->enter($__internal_1debcd69cc1cf814671bd7dc700a76950f2fad9b424f97777893d9cf10ba6599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_eac4229ecaf931348fc2b5ee31462d9a2ca1f62c1c95173c81c329d553176579->leave($__internal_eac4229ecaf931348fc2b5ee31462d9a2ca1f62c1c95173c81c329d553176579_prof);

        
        $__internal_1debcd69cc1cf814671bd7dc700a76950f2fad9b424f97777893d9cf10ba6599->leave($__internal_1debcd69cc1cf814671bd7dc700a76950f2fad9b424f97777893d9cf10ba6599_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
