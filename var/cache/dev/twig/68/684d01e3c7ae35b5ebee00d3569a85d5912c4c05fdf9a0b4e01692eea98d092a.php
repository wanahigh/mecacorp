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
        $__internal_922f2231e38b48b5e799945b318a7ab4e5be21ca1063b34d51b6e54c5092671b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922f2231e38b48b5e799945b318a7ab4e5be21ca1063b34d51b6e54c5092671b->enter($__internal_922f2231e38b48b5e799945b318a7ab4e5be21ca1063b34d51b6e54c5092671b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8208a93d5a9a1109183126f5a374ae613052c561fccb8307de3e4552a5a21fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8208a93d5a9a1109183126f5a374ae613052c561fccb8307de3e4552a5a21fca->enter($__internal_8208a93d5a9a1109183126f5a374ae613052c561fccb8307de3e4552a5a21fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_922f2231e38b48b5e799945b318a7ab4e5be21ca1063b34d51b6e54c5092671b->leave($__internal_922f2231e38b48b5e799945b318a7ab4e5be21ca1063b34d51b6e54c5092671b_prof);

        
        $__internal_8208a93d5a9a1109183126f5a374ae613052c561fccb8307de3e4552a5a21fca->leave($__internal_8208a93d5a9a1109183126f5a374ae613052c561fccb8307de3e4552a5a21fca_prof);

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
", "WebProfilerBundle:Collector:exception.css.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
