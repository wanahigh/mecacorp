<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5f6e1cf4ff59ab8f75e59a8d90349883ee1e130f236dde3cfa99d882363d4491 extends Twig_Template
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
        $__internal_24616211b859ed041038b66832b416d58e1c660900b02339e674782c6bfcf198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24616211b859ed041038b66832b416d58e1c660900b02339e674782c6bfcf198->enter($__internal_24616211b859ed041038b66832b416d58e1c660900b02339e674782c6bfcf198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4b35dcdfe936c2eed3a658fe98117abbc968dca4939b0dee369eb5e86a64c443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b35dcdfe936c2eed3a658fe98117abbc968dca4939b0dee369eb5e86a64c443->enter($__internal_4b35dcdfe936c2eed3a658fe98117abbc968dca4939b0dee369eb5e86a64c443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_24616211b859ed041038b66832b416d58e1c660900b02339e674782c6bfcf198->leave($__internal_24616211b859ed041038b66832b416d58e1c660900b02339e674782c6bfcf198_prof);

        
        $__internal_4b35dcdfe936c2eed3a658fe98117abbc968dca4939b0dee369eb5e86a64c443->leave($__internal_4b35dcdfe936c2eed3a658fe98117abbc968dca4939b0dee369eb5e86a64c443_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
