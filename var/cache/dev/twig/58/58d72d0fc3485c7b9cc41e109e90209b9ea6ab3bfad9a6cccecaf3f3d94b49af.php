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
        $__internal_98f23d6436b4ac2a2d86070db49a2f6583146418b4b3807980fb8bfe3e71d538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f23d6436b4ac2a2d86070db49a2f6583146418b4b3807980fb8bfe3e71d538->enter($__internal_98f23d6436b4ac2a2d86070db49a2f6583146418b4b3807980fb8bfe3e71d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5ca5341dc1a8d14aa08580f8fe645df3ce2a873c00460470184198b1f830f48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca5341dc1a8d14aa08580f8fe645df3ce2a873c00460470184198b1f830f48f->enter($__internal_5ca5341dc1a8d14aa08580f8fe645df3ce2a873c00460470184198b1f830f48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_98f23d6436b4ac2a2d86070db49a2f6583146418b4b3807980fb8bfe3e71d538->leave($__internal_98f23d6436b4ac2a2d86070db49a2f6583146418b4b3807980fb8bfe3e71d538_prof);

        
        $__internal_5ca5341dc1a8d14aa08580f8fe645df3ce2a873c00460470184198b1f830f48f->leave($__internal_5ca5341dc1a8d14aa08580f8fe645df3ce2a873c00460470184198b1f830f48f_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
