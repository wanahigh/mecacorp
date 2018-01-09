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
        $__internal_e8b25580a26541b6ae4835fed4d9e20e1dc823153f3aec1cf160ba04c7f08195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b25580a26541b6ae4835fed4d9e20e1dc823153f3aec1cf160ba04c7f08195->enter($__internal_e8b25580a26541b6ae4835fed4d9e20e1dc823153f3aec1cf160ba04c7f08195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_28a7624dffd8be095e9a0f74f3bd6e02b37cced8723e4d510901ffa63003b1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a7624dffd8be095e9a0f74f3bd6e02b37cced8723e4d510901ffa63003b1ee->enter($__internal_28a7624dffd8be095e9a0f74f3bd6e02b37cced8723e4d510901ffa63003b1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_e8b25580a26541b6ae4835fed4d9e20e1dc823153f3aec1cf160ba04c7f08195->leave($__internal_e8b25580a26541b6ae4835fed4d9e20e1dc823153f3aec1cf160ba04c7f08195_prof);

        
        $__internal_28a7624dffd8be095e9a0f74f3bd6e02b37cced8723e4d510901ffa63003b1ee->leave($__internal_28a7624dffd8be095e9a0f74f3bd6e02b37cced8723e4d510901ffa63003b1ee_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
