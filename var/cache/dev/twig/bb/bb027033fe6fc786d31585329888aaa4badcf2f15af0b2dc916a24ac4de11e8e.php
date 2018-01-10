<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8d019d62340cc90458c92fb7e4dcfefbb2a1158164b41bfadc3e43f250d34c65 extends Twig_Template
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
        $__internal_84d6606599196e0bacdd13ecaa9ce5143e2aa81f6c930f93728fce9765d88f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d6606599196e0bacdd13ecaa9ce5143e2aa81f6c930f93728fce9765d88f6a->enter($__internal_84d6606599196e0bacdd13ecaa9ce5143e2aa81f6c930f93728fce9765d88f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ff119bdd8a91ff1f30e9fae78ca718465ac54857be7c1b386f9b1ae31ae7102d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff119bdd8a91ff1f30e9fae78ca718465ac54857be7c1b386f9b1ae31ae7102d->enter($__internal_ff119bdd8a91ff1f30e9fae78ca718465ac54857be7c1b386f9b1ae31ae7102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_84d6606599196e0bacdd13ecaa9ce5143e2aa81f6c930f93728fce9765d88f6a->leave($__internal_84d6606599196e0bacdd13ecaa9ce5143e2aa81f6c930f93728fce9765d88f6a_prof);

        
        $__internal_ff119bdd8a91ff1f30e9fae78ca718465ac54857be7c1b386f9b1ae31ae7102d->leave($__internal_ff119bdd8a91ff1f30e9fae78ca718465ac54857be7c1b386f9b1ae31ae7102d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
