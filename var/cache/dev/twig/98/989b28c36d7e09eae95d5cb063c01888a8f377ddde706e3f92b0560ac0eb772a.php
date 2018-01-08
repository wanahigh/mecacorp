<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_90ef30a2580aa4fc1fe15b4913468540f33008c4bcbb1e66cfd5de503629b001 extends Twig_Template
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
        $__internal_de1ecd6746ede5f3578754b7fb1e922ead814954a334a9591e9e09dca48b3289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1ecd6746ede5f3578754b7fb1e922ead814954a334a9591e9e09dca48b3289->enter($__internal_de1ecd6746ede5f3578754b7fb1e922ead814954a334a9591e9e09dca48b3289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_b4c50371fbb803992e65646ad56f048628295f0828b0e2f1176067c4e2a5e07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c50371fbb803992e65646ad56f048628295f0828b0e2f1176067c4e2a5e07c->enter($__internal_b4c50371fbb803992e65646ad56f048628295f0828b0e2f1176067c4e2a5e07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_de1ecd6746ede5f3578754b7fb1e922ead814954a334a9591e9e09dca48b3289->leave($__internal_de1ecd6746ede5f3578754b7fb1e922ead814954a334a9591e9e09dca48b3289_prof);

        
        $__internal_b4c50371fbb803992e65646ad56f048628295f0828b0e2f1176067c4e2a5e07c->leave($__internal_b4c50371fbb803992e65646ad56f048628295f0828b0e2f1176067c4e2a5e07c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
