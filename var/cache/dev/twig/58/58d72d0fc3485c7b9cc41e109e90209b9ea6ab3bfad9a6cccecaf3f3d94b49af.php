<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_fa3de2d992793e74f6e56187dfb96c14247bd6965033e8bb69ec5f983d9c0550 extends Twig_Template
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
        $__internal_e1bc8cc66a161e0f2d4e0d48667ae583e7a36b9ace13fa9b247a3f58908f4b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bc8cc66a161e0f2d4e0d48667ae583e7a36b9ace13fa9b247a3f58908f4b07->enter($__internal_e1bc8cc66a161e0f2d4e0d48667ae583e7a36b9ace13fa9b247a3f58908f4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_e008fce2e145fc3eedb5d20a2b684b5c9e16e779c2d400394d4eca8959158728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e008fce2e145fc3eedb5d20a2b684b5c9e16e779c2d400394d4eca8959158728->enter($__internal_e008fce2e145fc3eedb5d20a2b684b5c9e16e779c2d400394d4eca8959158728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_e1bc8cc66a161e0f2d4e0d48667ae583e7a36b9ace13fa9b247a3f58908f4b07->leave($__internal_e1bc8cc66a161e0f2d4e0d48667ae583e7a36b9ace13fa9b247a3f58908f4b07_prof);

        
        $__internal_e008fce2e145fc3eedb5d20a2b684b5c9e16e779c2d400394d4eca8959158728->leave($__internal_e008fce2e145fc3eedb5d20a2b684b5c9e16e779c2d400394d4eca8959158728_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
