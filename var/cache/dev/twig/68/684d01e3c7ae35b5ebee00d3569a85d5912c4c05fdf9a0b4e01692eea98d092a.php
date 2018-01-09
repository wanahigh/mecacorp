<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_6a6b18884c1a08b1d851654c7480c7bd11afc746c1dc1eb94784cfe1bc95bc8e extends Twig_Template
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
        $__internal_255f57e212c95b93a25da0b4e168d28b8bf5c9400e80a8c023bb317348965734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255f57e212c95b93a25da0b4e168d28b8bf5c9400e80a8c023bb317348965734->enter($__internal_255f57e212c95b93a25da0b4e168d28b8bf5c9400e80a8c023bb317348965734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_15af3665882904e38d1bae8751541e123beb3a3b0eaa12538f382628446f8a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15af3665882904e38d1bae8751541e123beb3a3b0eaa12538f382628446f8a70->enter($__internal_15af3665882904e38d1bae8751541e123beb3a3b0eaa12538f382628446f8a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_255f57e212c95b93a25da0b4e168d28b8bf5c9400e80a8c023bb317348965734->leave($__internal_255f57e212c95b93a25da0b4e168d28b8bf5c9400e80a8c023bb317348965734_prof);

        
        $__internal_15af3665882904e38d1bae8751541e123beb3a3b0eaa12538f382628446f8a70->leave($__internal_15af3665882904e38d1bae8751541e123beb3a3b0eaa12538f382628446f8a70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
