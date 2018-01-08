<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_9bd842756d955582e0824e52da6580491c33a0ed1d08b342b704a77fb4954c02 extends Twig_Template
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
        $__internal_03b2aa9748db8a194ec7bad7b4bd6fd903da4016ee6ee865f6922cbe41a3d675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b2aa9748db8a194ec7bad7b4bd6fd903da4016ee6ee865f6922cbe41a3d675->enter($__internal_03b2aa9748db8a194ec7bad7b4bd6fd903da4016ee6ee865f6922cbe41a3d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_0a222cbe4505d4439faa8d00e74d0418a5ca8b1b85f4d3144ff342646670e655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a222cbe4505d4439faa8d00e74d0418a5ca8b1b85f4d3144ff342646670e655->enter($__internal_0a222cbe4505d4439faa8d00e74d0418a5ca8b1b85f4d3144ff342646670e655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_03b2aa9748db8a194ec7bad7b4bd6fd903da4016ee6ee865f6922cbe41a3d675->leave($__internal_03b2aa9748db8a194ec7bad7b4bd6fd903da4016ee6ee865f6922cbe41a3d675_prof);

        
        $__internal_0a222cbe4505d4439faa8d00e74d0418a5ca8b1b85f4d3144ff342646670e655->leave($__internal_0a222cbe4505d4439faa8d00e74d0418a5ca8b1b85f4d3144ff342646670e655_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/home/fabien/symfony-stg/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
