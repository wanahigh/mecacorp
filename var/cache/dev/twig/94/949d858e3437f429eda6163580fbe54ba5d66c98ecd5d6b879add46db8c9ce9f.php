<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ef78e2b1108924d7db820bdb623be60c664db5e359f89c65a3442eed5a78d9e7 extends Twig_Template
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
        $__internal_81915f2763af35d9cd77fc48faf849fdb8663a3c2fd002892b19732c08c5ca7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81915f2763af35d9cd77fc48faf849fdb8663a3c2fd002892b19732c08c5ca7a->enter($__internal_81915f2763af35d9cd77fc48faf849fdb8663a3c2fd002892b19732c08c5ca7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1260b840ab2f0c20e2bd4392e7bf36484d8653d114c5566ade31db25aa6118fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1260b840ab2f0c20e2bd4392e7bf36484d8653d114c5566ade31db25aa6118fd->enter($__internal_1260b840ab2f0c20e2bd4392e7bf36484d8653d114c5566ade31db25aa6118fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_81915f2763af35d9cd77fc48faf849fdb8663a3c2fd002892b19732c08c5ca7a->leave($__internal_81915f2763af35d9cd77fc48faf849fdb8663a3c2fd002892b19732c08c5ca7a_prof);

        
        $__internal_1260b840ab2f0c20e2bd4392e7bf36484d8653d114c5566ade31db25aa6118fd->leave($__internal_1260b840ab2f0c20e2bd4392e7bf36484d8653d114c5566ade31db25aa6118fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
