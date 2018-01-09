<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_022d307a9801ad557daff979698dcfe70998dbabb1d1fc474f105637b1d23fb5 extends Twig_Template
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
        $__internal_97b0fabb8521ab36ef148f99140f6f1f73e01b4c2958a8087a3821750880064c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b0fabb8521ab36ef148f99140f6f1f73e01b4c2958a8087a3821750880064c->enter($__internal_97b0fabb8521ab36ef148f99140f6f1f73e01b4c2958a8087a3821750880064c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_8bf6a328c8a6d0fe68d6782ac43b51913bd4b5843bf0c66e52f25c8129accee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf6a328c8a6d0fe68d6782ac43b51913bd4b5843bf0c66e52f25c8129accee7->enter($__internal_8bf6a328c8a6d0fe68d6782ac43b51913bd4b5843bf0c66e52f25c8129accee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_97b0fabb8521ab36ef148f99140f6f1f73e01b4c2958a8087a3821750880064c->leave($__internal_97b0fabb8521ab36ef148f99140f6f1f73e01b4c2958a8087a3821750880064c_prof);

        
        $__internal_8bf6a328c8a6d0fe68d6782ac43b51913bd4b5843bf0c66e52f25c8129accee7->leave($__internal_8bf6a328c8a6d0fe68d6782ac43b51913bd4b5843bf0c66e52f25c8129accee7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
