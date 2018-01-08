<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5c359b53f780b090dc0db7065563add2729371164e46104e047acb7cd2daf7f7 extends Twig_Template
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
        $__internal_2b8795815596bc2a0185c16d0300129eea7d6c9a54a858a8c21791ffcde255de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8795815596bc2a0185c16d0300129eea7d6c9a54a858a8c21791ffcde255de->enter($__internal_2b8795815596bc2a0185c16d0300129eea7d6c9a54a858a8c21791ffcde255de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2052709cfbbca515e25f7f3b0928440a865661c4f98bee0d52423889d6840bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2052709cfbbca515e25f7f3b0928440a865661c4f98bee0d52423889d6840bd7->enter($__internal_2052709cfbbca515e25f7f3b0928440a865661c4f98bee0d52423889d6840bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2b8795815596bc2a0185c16d0300129eea7d6c9a54a858a8c21791ffcde255de->leave($__internal_2b8795815596bc2a0185c16d0300129eea7d6c9a54a858a8c21791ffcde255de_prof);

        
        $__internal_2052709cfbbca515e25f7f3b0928440a865661c4f98bee0d52423889d6840bd7->leave($__internal_2052709cfbbca515e25f7f3b0928440a865661c4f98bee0d52423889d6840bd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
