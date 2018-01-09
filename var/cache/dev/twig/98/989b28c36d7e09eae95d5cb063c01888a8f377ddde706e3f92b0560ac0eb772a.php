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
        $__internal_96480c3fe9aab29da2b9541bed8ceace2e2b3833b6cddb423d177e5773c700c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96480c3fe9aab29da2b9541bed8ceace2e2b3833b6cddb423d177e5773c700c4->enter($__internal_96480c3fe9aab29da2b9541bed8ceace2e2b3833b6cddb423d177e5773c700c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_79948ac99c5f2b3b23d1b88f1cab7af634efa23cfa7bfb95a96a35e5e29ab2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79948ac99c5f2b3b23d1b88f1cab7af634efa23cfa7bfb95a96a35e5e29ab2ec->enter($__internal_79948ac99c5f2b3b23d1b88f1cab7af634efa23cfa7bfb95a96a35e5e29ab2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_96480c3fe9aab29da2b9541bed8ceace2e2b3833b6cddb423d177e5773c700c4->leave($__internal_96480c3fe9aab29da2b9541bed8ceace2e2b3833b6cddb423d177e5773c700c4_prof);

        
        $__internal_79948ac99c5f2b3b23d1b88f1cab7af634efa23cfa7bfb95a96a35e5e29ab2ec->leave($__internal_79948ac99c5f2b3b23d1b88f1cab7af634efa23cfa7bfb95a96a35e5e29ab2ec_prof);

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
", "TwigBundle:Exception:error.css.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
