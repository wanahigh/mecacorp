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
        $__internal_daa242d4a3201525749255c07e5abded70a665f28e978a1702e1ba1f568fb1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa242d4a3201525749255c07e5abded70a665f28e978a1702e1ba1f568fb1d8->enter($__internal_daa242d4a3201525749255c07e5abded70a665f28e978a1702e1ba1f568fb1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_163c2578d30010cf0b41b8ee9fde2b7fc259e066d99240b58dec01242ff4b14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163c2578d30010cf0b41b8ee9fde2b7fc259e066d99240b58dec01242ff4b14d->enter($__internal_163c2578d30010cf0b41b8ee9fde2b7fc259e066d99240b58dec01242ff4b14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_daa242d4a3201525749255c07e5abded70a665f28e978a1702e1ba1f568fb1d8->leave($__internal_daa242d4a3201525749255c07e5abded70a665f28e978a1702e1ba1f568fb1d8_prof);

        
        $__internal_163c2578d30010cf0b41b8ee9fde2b7fc259e066d99240b58dec01242ff4b14d->leave($__internal_163c2578d30010cf0b41b8ee9fde2b7fc259e066d99240b58dec01242ff4b14d_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
