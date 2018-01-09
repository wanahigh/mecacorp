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
        $__internal_70937be8edaadd2f58284d41327860faa3a93b94ebf7e03c8e87335778521ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70937be8edaadd2f58284d41327860faa3a93b94ebf7e03c8e87335778521ac8->enter($__internal_70937be8edaadd2f58284d41327860faa3a93b94ebf7e03c8e87335778521ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_83b364199f2ac9c3719c01d3f1ec7c6a5490b3ebd1ab73d2df65e9286a428066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b364199f2ac9c3719c01d3f1ec7c6a5490b3ebd1ab73d2df65e9286a428066->enter($__internal_83b364199f2ac9c3719c01d3f1ec7c6a5490b3ebd1ab73d2df65e9286a428066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_70937be8edaadd2f58284d41327860faa3a93b94ebf7e03c8e87335778521ac8->leave($__internal_70937be8edaadd2f58284d41327860faa3a93b94ebf7e03c8e87335778521ac8_prof);

        
        $__internal_83b364199f2ac9c3719c01d3f1ec7c6a5490b3ebd1ab73d2df65e9286a428066->leave($__internal_83b364199f2ac9c3719c01d3f1ec7c6a5490b3ebd1ab73d2df65e9286a428066_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
