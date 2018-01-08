<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_32f4ab469a2864df6f92032de7a3aa8fd90ce2ca237e2fc02c39a14d22242630 extends Twig_Template
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
        $__internal_07ea9eaedee1bcb3f1e4bf9d7409782777616eb4b97eaea4631b35a30a8901fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ea9eaedee1bcb3f1e4bf9d7409782777616eb4b97eaea4631b35a30a8901fb->enter($__internal_07ea9eaedee1bcb3f1e4bf9d7409782777616eb4b97eaea4631b35a30a8901fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_1b206d3eddc613429782fddfdacbdad456e53c568ff0df3a81954decc7392883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b206d3eddc613429782fddfdacbdad456e53c568ff0df3a81954decc7392883->enter($__internal_1b206d3eddc613429782fddfdacbdad456e53c568ff0df3a81954decc7392883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_07ea9eaedee1bcb3f1e4bf9d7409782777616eb4b97eaea4631b35a30a8901fb->leave($__internal_07ea9eaedee1bcb3f1e4bf9d7409782777616eb4b97eaea4631b35a30a8901fb_prof);

        
        $__internal_1b206d3eddc613429782fddfdacbdad456e53c568ff0df3a81954decc7392883->leave($__internal_1b206d3eddc613429782fddfdacbdad456e53c568ff0df3a81954decc7392883_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
